  <!-- FOOTER -->
  <footer class="border-t border-slate-800/60">
    <div class="mx-auto max-w-7xl px-4 py-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
      <div>
        <div class="text-slate-400 text-sm">© <span id="y"><?php echo date('Y'); ?></span> L2VPN.ru</div>
        <div class="text-xs text-slate-500 mt-1">Не является публичной офертой. Цены ориентировочные, зависят от региона и доступных магистралей. Подключение — после проверки техвозможности.</div>
      </div>
      <div class="text-sm text-slate-400">
        <a href="/contact.php" class="underline decoration-dotted underline-offset-2">Заявка</a>
        <span class="mx-2">•</span>
        <a href="/pricing.php" class="underline decoration-dotted underline-offset-2">Тарифы</a>
        <span class="mx-2">•</span>
        <a href="/sla.php" class="underline decoration-dotted underline-offset-2">SLA</a>
      </div>
    </div>
  </footer>

<script>
  // Footer year
  document.getElementById('y').textContent = new Date().getFullYear();

  // Webhook POST → n8n
  const WEBHOOK_URL = 'https://n8n.flexdc.ru/webhook/l2vpn';

  function isValidEmail(v) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test((v || '').trim());
  }

  function isValidPhoneRU(v) {
    const s = (v || '').replace(/[\s()-]/g, '');
    return /^\+7\d{10}$/.test(s) || /^8\d{10}$/.test(s);
  }

  function showErr(id, show) {
    const el = document.getElementById(id);
    if (!el) return;
    el.classList.toggle('hidden', !show);
  }

  function setStatus(msg, ok) {
    const box = document.getElementById('formStatus');
    if (!box) return;
    box.classList.remove('hidden');
    box.textContent = msg;
    box.classList.toggle('text-green-300', !!ok);
    box.classList.toggle('text-red-300', !ok);
    box.classList.toggle('border-green-700', !!ok);
    box.classList.toggle('border-red-700', !ok);
  }

  document.getElementById('leadForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const form = e.target;
    const fd = new FormData(form);

    const addrA   = (fd.get('addrA')   || '').trim();
    const addrB   = (fd.get('addrB')   || '').trim();
    const speed   = (fd.get('speed')   || '').trim();
    const dual    = (fd.get('dual')    || '').trim();
    const contact = (fd.get('contact') || '').trim();
    const note    = (fd.get('note')    || '').trim();

    // Валидация
    showErr('err-addrA', !addrA);
    showErr('err-addrB', !addrB);
    showErr('err-speed', !speed);
    const contactOk = isValidEmail(contact) || isValidPhoneRU(contact);
    showErr('err-contact', !contactOk);

    if (!(addrA && addrB && speed && contactOk)) {
      setStatus('Проверьте выделенные поля.', false);
      return;
    }

    // Пакет в n8n
    const payload = {
      source: 'l2vpn.ru',
      addrA, addrB, speed, dual, contact, note,
      meta: {
        url: location.href,
        ua: navigator.userAgent,
        tz: Intl.DateTimeFormat().resolvedOptions().timeZone,
        ts: new Date().toISOString(),
        utm: Object.fromEntries(new URLSearchParams(location.search)),
      },
    };

    // UI lock
    const btn = document.getElementById('submitBtn');
    btn.disabled = true;
    btn.classList.add('opacity-60', 'cursor-not-allowed');
    setStatus('Отправляем заявку…', true);

    try {
      const res = await fetch(WEBHOOK_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload),
      });
      if (!res.ok) throw new Error('HTTP ' + res.status);
      setStatus('Заявка принята. Мы свяжемся с вами в ближайшее время.', true);
      form.reset();
    } catch (err) {
      setStatus('Не удалось отправить заявку. Попробуйте позже или свяжитесь с нами другим способом.', false);
    } finally {
      btn.disabled = false;
      btn.classList.remove('opacity-60', 'cursor-not-allowed');
    }
  });
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105184166', 'ym');

    ym(105184166, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/105184166" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



</body>
</html>
