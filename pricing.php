<?php
$pageTitle = 'Тарифы L2VPN — цены на защищённые каналы | L2VPN.ru';
$pageDescription = 'Тарифы на L2VPN-каналы: 10, 50, 100, 500 Мбит/с и выше. Прозрачный Ethernet, SLA, резервирование. Проверка техвозможности по РФ.';
$ogTitle = 'Тарифы L2VPN — цены на защищённые каналы';
$ogDescription = 'Прозрачные L2-каналы для операторов и бизнеса. Скорости от 10 Мбит/с до 10 Гбит/с.';
$ogUrl = 'https://l2vpn.ru/pricing.php';
$ogImage = 'https://l2vpn.ru/og-l2vpn.jpg';

include 'includes/header.php';
?>

  <!-- PRICING -->
  <section id="pricing" class="relative">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold">Тарифы L2VPN</h1>
        <p class="mt-4 text-lg text-slate-300">Выберите подходящую скорость канала. Цены ориентировочные и зависят от региона и трассы.</p>
      </div>

      <div class="grid md:grid-cols-4 gap-6 items-stretch">
        <!-- 10 Mbps -->
        <div class="loft-card rounded-2xl p-6 flex flex-col h-full">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">10 Мбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">от 1000 ₽<span class="text-base text-slate-400">/Мбит</span></div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>Прозрачный Ethernet (VLAN/QinQ)</li>
            <li>Гарантированная полоса</li>
            <li>Поддержка 24/7</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Проверить адрес</a>
        </div>
        <!-- 50 Mbps -->
        <div class="loft-card rounded-2xl p-6 flex flex-col h-full">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">50 Мбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">от 1000 ₽<span class="text-base text-slate-400">/Мбит</span></div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>Низкая задержка</li>
            <li>Совместимо с MPLS</li>
            <li>Опция SLA</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Проверить адрес</a>
        </div>
        <!-- 100 Mbps -->
        <div class="loft-card rounded-2xl p-6 flex flex-col h-full border border-accent/30">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">100 Мбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">от 3 500 ₽</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>Ethernet L2, VLAN/QinQ</li>
            <li>Подрядчик‑независимые трассы*</li>
            <li>Поддержка 24/7</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Проверить адрес</a>
        </div>
        <!-- 500 Mbps -->
        <div class="loft-card rounded-2xl p-6 flex flex-col h-full">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">500 Мбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">от 12 000 ₽</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>Гарантированная полоса</li>
            <li>Опция Dual‑Path (SLA)</li>
            <li>Инсталляция по РФ</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Проверить адрес</a>
        </div>
      </div>

      <!-- High Speed Options -->
      <div class="mt-12 grid md:grid-cols-3 gap-6">
        <div class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">1 Гбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">индивидуально</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>Для крупных предприятий</li>
            <li>Опция шифрования</li>
            <li>Приоритетная поддержка</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Запросить расчёт</a>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">5 Гбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">индивидуально</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>Магистральные решения</li>
            <li>DWDM совместимость</li>
            <li>Персональный менеджер</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Запросить расчёт</a>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Скорость</div>
          <div class="mt-1 text-2xl font-extrabold">10 Гбит/с</div>
          <div class="mt-4 text-3xl font-black text-accent">индивидуально</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>ЦОД и операторы</li>
            <li>Full redundancy</li>
            <li>SLA 99.95%</li>
          </ul>
          <a href="/contact.php" class="mt-auto rounded-xl bg-accent px-4 py-2 text-slate-900 font-semibold text-center">Запросить расчёт</a>
        </div>
      </div>

      <p class="mt-8 text-xs text-slate-400">*Опция независимых трасс доступна при наличии альтернативных магистралей в регионе. Все цены — ориентировочные и не являются публичной офертой.</p>
      
      <div class="mt-8 text-center">
        <a href="/contact.php" class="rounded-xl bg-accent px-6 py-3 text-slate-900 font-semibold hover:bg-cyan-300 transition">Проверить техвозможность</a>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
