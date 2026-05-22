<?php
$pageTitle = 'L2VPN.ru — Защищённые L2VPN-каналы для операторов и бизнеса';
$pageDescription = 'L2VPN-каналы уровня L2: прозрачный Ethernet, SLA, резервирование по разным маршрутам. Скорости 10/50/100/500 Мбит/с и выше. Проверка техвозможности, подключение по РФ.';
$ogTitle = 'L2VPN.ru — Защищённые L2VPN-каналы';
$ogDescription = 'Прозрачные L2-каналы для операторов и бизнеса. SLA, резерв по независимым трассам. Скорости до 10 Гбит/с.';
$ogUrl = 'https://l2vpn.ru/';
$ogImage = 'https://l2vpn.ru/og-l2vpn.jpg';

include 'includes/header.php';
?>

  <!-- HERO -->
  <section id="top" class="relative">
    <div class="mx-auto max-w-7xl px-4 py-20 md:py-28">
      <div class="grid md:grid-cols-2 gap-10 items-center">
        <div>
          <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
            Защищённые <span class="text-accent">L2VPN</span>-каналы<br/>для операторов и бизнеса
          </h1>
          <p class="mt-5 text-lg/8 text-slate-300">
            Прозрачный Ethernet без маршрутизации, низкая задержка, гарантированная полоса. Доступно резервирование по независимым маршрутам (SLA). Скорости от 10 Мбит/с до 10 Гбит/с.
          </p>
          <div class="mt-8 flex flex-wrap gap-4">
            <a href="/pricing.php" class="rounded-xl bg-accent px-5 py-3 text-slate-900 font-semibold hover:bg-cyan-300 transition">Смотреть тарифы</a>
            <a href="/contact.php" class="rounded-xl border border-slate-600 px-5 py-3 font-semibold hover:bg-slate-800/60 transition">Проверить техвозможность</a>
          </div>
          <p class="mt-4 text-sm text-slate-400">*Подключение возможно после проверки технической возможности на адресах. Итоговая цена зависит от региона и трасс.</p>
        </div>
        <div class="loft-card rounded-2xl p-6 md:p-8">
          <div class="grid grid-cols-2 gap-4 text-sm">
            <div class="loft-border rounded-xl p-4">
              <div class="text-slate-400">Топология</div>
              <div class="mt-1 text-base font-semibold">Point-to-Point / L2VPN</div>
            </div>
            <div class="loft-border rounded-xl p-4">
              <div class="text-slate-400">Интерфейс</div>
              <div class="mt-1 text-base font-semibold">Ethernet / VLAN / QinQ</div>
            </div>
            <div class="loft-border rounded-xl p-4">
              <div class="text-slate-400">SLA</div>
              <div class="mt-1 text-base font-semibold">99.5–99.95%</div>
            </div>
            <div class="loft-border rounded-xl p-4">
              <div class="text-slate-400">Резерв</div>
              <div class="mt-1 text-base font-semibold">Независимые трассы</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT -->
  <section id="what" class="relative border-t border-slate-800/60">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <div class="grid md:grid-cols-3 gap-8">
        <div class="md:col-span-2">
          <h2 class="text-3xl md:text-4xl font-bold">Что такое L2VPN</h2>
          <p class="mt-4 text-slate-300">L2VPN — это частный канал на уровне канального протокола (Layer 2), объединяющий площадки как единую локальную сеть. В отличие от IP‑VPN, вы получаете прозрачный <strong>Ethernet‑линк</strong> без маршрутизации: ваши VLAN идут от точки до точки.</p>
          <ul class="mt-6 grid sm:grid-cols-2 gap-4 text-slate-300">
            <li class="loft-border rounded-xl p-4">🔒 Изоляция от интернета</li>
            <li class="loft-border rounded-xl p-4">⚡ Гарантированная скорость</li>
            <li class="loft-border rounded-xl p-4">🧭 Независимые резервные маршруты (SLA)</li>
            <li class="loft-border rounded-xl p-4">🛰️ Совместимость: MPLS / MetroE / DWDM</li>
          </ul>
        </div>
        <aside class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Примеры</div>
          <ul class="mt-3 space-y-3 text-slate-200">
            <li>Связь филиалов банка/оператора</li>
            <li>Резервный uplink в ЦОД</li>
            <li>Передача IPTV без маршрутизации</li>
            <li>Подключение базовых станций LTE</li>
          </ul>
        </aside>
      </div>
    </div>
  </section>

  <!-- PRICING PREVIEW -->
  <section id="pricing" class="relative border-t border-slate-800/60">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <div class="flex items-end justify-between flex-wrap gap-4">
        <h2 class="text-3xl md:text-4xl font-bold">Тарифы L2VPN</h2>
        <p class="text-slate-400 text-sm">Цена зависит от региона/трассы. Обязательно <a href="/contact.php" class="underline decoration-dotted underline-offset-2">уточняйте техвозможность</a>.</p>
      </div>

      <div class="mt-8 grid md:grid-cols-4 gap-6 items-stretch">
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

      <div class="mt-8 text-center">
        <a href="/pricing.php" class="rounded-xl border border-slate-600 px-6 py-3 font-semibold hover:bg-slate-800/60 transition">Все тарифы →</a>
      </div>

      <p class="mt-4 text-xs text-slate-400">*Опция независимых трасс доступна при наличии альтернативных магистралей в регионе. Все цены — ориентировочные и не являются публичной офертой.</p>
    </div>
  </section>

  <!-- SLA / Dual Path -->
  <section id="sla" class="relative border-t border-slate-800/60">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <div class="grid md:grid-cols-2 gap-8 items-start">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold">Два канала в одну точку по разным маршрутам</h2>
          <p class="mt-4 text-slate-300">Повышаем доступность за счёт полностью независимых путей: разные магистрали, разные поставщики, разные вводы. Для критичных сервисов на площадках ЦОД.</p>
          <ul class="mt-6 space-y-3 text-slate-300">
            <li class="loft-border rounded-xl p-4">Резервирование L2 (active/standby или active/active)</li>
            <li class="loft-border rounded-xl p-4">Целевые метрики: SLA 99.5–99.95%*</li>
            <li class="loft-border rounded-xl p-4">Мониторинг, алерты, ежемесячные отчёты</li>
            <li class="loft-border rounded-xl p-4">Опция шифрования L2/L3</li>
          </ul>
          <p class="mt-4 text-xs text-slate-400">*Фактические значения SLA зависят от доступности независимых трасс в регионе и согласуются в КП.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Что входит</div>
          <ul class="mt-3 space-y-2 text-slate-200 text-sm">
            <li>Аудит адресов и магистралей</li>
            <li>Подбор двух независимых маршрутов</li>
            <li>Проект включений и L2‑диаграмма</li>
            <li>Тесты failover / failback</li>
            <li>План реагирования и контакты NOC 24/7</li>
          </ul>
          <a href="/sla.php" class="mt-6 inline-block rounded-xl bg-accent px-5 py-3 text-slate-900 font-semibold">Подробнее про SLA →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section id="how" class="relative border-t border-slate-800/60">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <h2 class="text-3xl md:text-4xl font-bold">Как подключить</h2>
      <div class="mt-8 grid md:grid-cols-4 gap-6">
        <div class="loft-card rounded-2xl p-6">
          <div class="text-3xl font-black text-accent">1</div>
          <div class="mt-2 font-semibold">Заявка</div>
          <p class="mt-2 text-slate-300 text-sm">Адреса, скорости, нужна ли опция Dual‑Path / SLA.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-3xl font-black text-accent">2</div>
          <div class="mt-2 font-semibold">Проверка Техвозможности</div>
          <p class="mt-2 text-slate-300 text-sm">Проводим аудит магистралей и согласуем точки включения.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-3xl font-black text-accent">3</div>
          <div class="mt-2 font-semibold">КП и Проект</div>
          <p class="mt-2 text-slate-300 text-sm">Формируем коммерческое предложение и L2‑диаграмму.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-3xl font-black text-accent">4</div>
          <div class="mt-2 font-semibold">Инсталляция и Запуск</div>
          <p class="mt-2 text-slate-300 text-sm">Подключение, тесты, запуск мониторинга, акт.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT / FORM -->
  <section id="contact" class="relative border-t border-slate-800/60">
    <div class="mx-auto max-w-3xl px-4 py-16">
      <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold">Проверка технической возможности</h2>
        <p class="mt-3 text-slate-300">Заполните поля — заявка уйдёт в Telegram. Мы вернёмся с расчётом и сроками подключения.</p>
      </div>

<form id="leadForm" class="mt-8 loft-card rounded-2xl p-6 grid gap-5" novalidate>
  <div class="grid md:grid-cols-2 gap-5">
    <div>
      <label class="block text-sm text-slate-400">Адрес точки A</label>
      <input required name="addrA"
             class="mt-2 w-full rounded-xl border border-slate-600 bg-slate-900/50 px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
             placeholder="Город, улица, дом" />
      <p id="err-addrA" class="mt-1 text-xs text-red-400 hidden">Укажите адрес точки A.</p>
    </div>
    <div>
      <label class="block text-sm text-slate-400">Адрес точки B</label>
      <input required name="addrB"
             class="mt-2 w-full rounded-xl border border-slate-600 bg-slate-900/50 px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
             placeholder="Город, улица, дом" />
      <p id="err-addrB" class="mt-1 text-xs text-red-400 hidden">Укажите адрес точки B.</p>
    </div>
  </div>

  <div class="grid md:grid-cols-3 gap-5 items-end">
    <div class="flex flex-col h-full justify-end">
      <label class="block text-sm text-slate-400">Требуемая скорость</label>
      <select name="speed"
              class="mt-2 w-full rounded-xl border border-slate-600 bg-slate-900/50 px-4 py-3 outline-none focus:ring-2 focus:ring-accent">
        <option>10 Мбит/с</option>
        <option>50 Мбит/с</option>
        <option>100 Мбит/с</option>
        <option>500 Мбит/с</option>
        <option>Иная (указать в комментарии)</option>
      </select>
      <p id="err-speed" class="mt-1 text-xs text-red-400 hidden">Выберите скорость.</p>
    </div>

    <div class="flex flex-col h-full justify-end">
      <label class="block text-sm text-slate-400">Резерв по независимому маршруту (SLA)</label>
      <select name="dual"
              class="mt-2 w-full rounded-xl border border-slate-600 bg-slate-900/50 px-4 py-3 outline-none focus:ring-2 focus:ring-accent">
        <option>Нужно</option>
        <option selected>Не требуется</option>
      </select>
    </div>

    <div class="flex flex-col h-full justify-end">
      <label class="block text-sm text-slate-400">Телефон / Email</label>
      <input required name="contact" autocomplete="on"
             class="mt-2 w-full rounded-xl border border-slate-600 bg-slate-900/50 px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
             placeholder="+7 999 123-45-67 или mail@domain" />
      <p id="err-contact" class="mt-1 text-xs text-red-400 hidden">Укажите корректный телефон (+7 ...) или email.</p>
    </div>
  </div>

  <div>
    <label class="block text-sm text-slate-400">Комментарий</label>
    <textarea name="note" rows="3"
              class="mt-2 w-full rounded-xl border border-slate-600 bg-slate-900/50 px-4 py-3 outline-none focus:ring-2 focus:ring-accent"
              placeholder="Точки в ЦОД, желаемые сроки, требования по L2, VLAN/QinQ, шифрование и т.д."></textarea>
  </div>

  <div id="formStatus" class="hidden rounded-xl border border-slate-600 p-3 text-sm"></div>

  <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-6">
    <button id="submitBtn" type="submit"
            class="rounded-xl bg-accent px-6 py-3 text-slate-900 font-semibold">
      Отправить
    </button>
    <p class="text-xs text-slate-400">
      Нажимая кнопку, вы подтверждаете согласие с обработкой данных.
    </p>
  </div>
</form>



      <p class="mt-6 text-xs text-slate-500">*Данный сайт — первая фаза проекта. На втором этапе L2VPN.ru станет маркетплейсом предложений каналов </p>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
