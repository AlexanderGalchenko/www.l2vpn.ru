<?php
$pageTitle = 'SLA и резервирование L2VPN — Dual-Path каналы | L2VPN.ru';
$pageDescription = 'Резервирование L2VPN по независимым маршрутам. SLA 99.5-99.95%. Два канала в одну точку по разным трассам для критичных сервисов.';
$ogTitle = 'SLA и резервирование L2VPN — Dual-Path каналы';
$ogDescription = 'Полностью независимые пути: разные магистрали, поставщики, вводы. Для ЦОД и критичных сервисов.';
$ogUrl = 'https://l2vpn.ru/sla.php';
$ogImage = 'https://l2vpn.ru/og-l2vpn.jpg';

include 'includes/header.php';
?>

  <!-- SLA / Dual Path -->
  <section id="sla" class="relative">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold">SLA и резервирование каналов</h1>
        <p class="mt-4 text-lg text-slate-300">Два канала в одну точку по разным маршрутам для максимальной доступности</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8 items-start mb-16">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold">Независимые маршруты</h2>
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
          <a href="/contact.php" class="mt-6 inline-block rounded-xl bg-accent px-5 py-3 text-slate-900 font-semibold">Запросить расчёт SLA</a>
        </div>
      </div>

      <!-- SLA Tiers -->
      <h2 class="text-3xl font-bold mb-8">Уровни SLA</h2>
      <div class="grid md:grid-cols-3 gap-6 mb-16">
        <div class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Базовый</div>
          <div class="mt-2 text-4xl font-black text-accent">99.5%</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>✓ Единый маршрут</li>
            <li>✓ Поддержка 24/7</li>
            <li>✓ Мониторинг</li>
            <li>— Резервирование</li>
          </ul>
          <div class="mt-6 text-slate-400 text-sm">Для некритичных сервисов</div>
        </div>
        <div class="loft-card rounded-2xl p-6 border border-accent/30">
          <div class="text-slate-400">Бизнес</div>
          <div class="mt-2 text-4xl font-black text-accent">99.9%</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>✓ Dual-Path опция</li>
            <li>✓ Поддержка 24/7</li>
            <li>✓ Приоритетный мониторинг</li>
            <li>✓ Failover &lt; 50 мс</li>
          </ul>
          <div class="mt-6 text-slate-400 text-sm">Для корпоративных клиентов</div>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <div class="text-slate-400">Премиум</div>
          <div class="mt-2 text-4xl font-black text-accent">99.95%</div>
          <ul class="mt-4 space-y-2 text-sm text-slate-300">
            <li>✓ Полное резервирование</li>
            <li>✓ Выделенный NOC</li>
            <li>✓ Персональный менеджер</li>
            <li>✓ Отчёты и аудит</li>
          </ul>
          <div class="mt-6 text-slate-400 text-sm">Для ЦОД и операторов</div>
        </div>
      </div>

      <!-- Use Cases -->
      <h2 class="text-3xl font-bold mb-8">Сценарии применения</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="loft-card rounded-2xl p-6">
          <h3 class="text-xl font-semibold text-accent">ЦОД</h3>
          <p class="mt-2 text-slate-300 text-sm">Резервные uplink'и в дата-центр с гарантированной доступностью. Разные точки входа, независимые магистрали.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <h3 class="text-xl font-semibold text-accent">Банки и финтех</h3>
          <p class="mt-2 text-slate-300 text-sm">Связь между филиалами и процессинговыми центрами. Соответствие требованиям регуляторов по доступности.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <h3 class="text-xl font-semibold text-accent">Операторы связи</h3>
          <p class="mt-2 text-slate-300 text-sm">Транспортная сеть для мобильных базовых станций LTE/5G. Резервирование для критичной инфраструктуры.</p>
        </div>
        <div class="loft-card rounded-2xl p-6">
          <h3 class="text-xl font-semibold text-accent">Корпоративные клиенты</h3>
          <p class="mt-2 text-slate-300 text-sm">Объединение офисов в единую L2-сеть с гарантированной полосой и низкой задержкой.</p>
        </div>
      </div>

      <div class="mt-12 text-center">
        <a href="/contact.php" class="rounded-xl bg-accent px-6 py-3 text-slate-900 font-semibold hover:bg-cyan-300 transition">Запросить расчёт SLA</a>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
