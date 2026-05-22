<?php
$pageTitle = 'Как подключить L2VPN — этапы подключения | L2VPN.ru';
$pageDescription = 'Пошаговая инструкция по подключению L2VPN: заявка, проверка техвозможности, КП, инсталляция и запуск канала.';
$ogTitle = 'Как подключить L2VPN — этапы подключения';
$ogDescription = '4 шага к защищённому L2-каналу: от заявки до запуска. Проверка техвозможности, проект, монтаж.';
$ogUrl = 'https://l2vpn.ru/how.php';
$ogImage = 'https://l2vpn.ru/og-l2vpn.jpg';

include 'includes/header.php';
?>

  <!-- HOW IT WORKS -->
  <section id="how" class="relative">
    <div class="mx-auto max-w-7xl px-4 py-16">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold">Как подключить L2VPN</h1>
        <p class="mt-4 text-lg text-slate-300">Четыре простых шага от заявки до работающего канала</p>
      </div>

      <div class="grid md:grid-cols-4 gap-6 mb-16">
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

      <!-- Detailed Steps -->
      <h2 class="text-3xl font-bold mb-8">Подробно о каждом этапе</h2>
      
      <div class="space-y-8">
        <!-- Step 1 -->
        <div class="loft-card rounded-2xl p-6 md:p-8">
          <div class="flex items-start gap-4">
            <div class="text-5xl font-black text-accent">01</div>
            <div>
              <h3 class="text-2xl font-bold">Заявка</h3>
              <p class="mt-3 text-slate-300">На этом этапе нам нужно понять ваши требования:</p>
              <ul class="mt-4 space-y-2 text-slate-300">
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Адреса точек подключения (точка A и точка B)</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Требуемая скорость канала</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Необходимость резервирования (Dual-Path)</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Технические требования (VLAN, QinQ, шифрование)</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Желаемые сроки подключения</span></li>
              </ul>
              <div class="mt-6">
                <a href="/contact.php" class="rounded-xl bg-accent px-5 py-3 text-slate-900 font-semibold">Оставить заявку →</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="loft-card rounded-2xl p-6 md:p-8">
          <div class="flex items-start gap-4">
            <div class="text-5xl font-black text-accent">02</div>
            <div>
              <h3 class="text-2xl font-bold">Проверка технической возможности</h3>
              <p class="mt-3 text-slate-300">Проводим детальный аудит:</p>
              <ul class="mt-4 space-y-2 text-slate-300">
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Проверка наличия магистралей в регионах</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Поиск точек включения у провайдеров</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Оценка возможности резервирования</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Расчёт стоимости "последней мили"</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Согласование технических деталей с заказчиком</span></li>
              </ul>
              <p class="mt-4 text-slate-400 text-sm">Срок проверки: 1-3 рабочих дня</p>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="loft-card rounded-2xl p-6 md:p-8">
          <div class="flex items-start gap-4">
            <div class="text-5xl font-black text-accent">03</div>
            <div>
              <h3 class="text-2xl font-bold">Коммерческое предложение и проект</h3>
              <p class="mt-3 text-slate-300">Формируем полный пакет документов:</p>
              <ul class="mt-4 space-y-2 text-slate-300">
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Детализированное КП со стоимостью</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>L2-диаграмма сети</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Схема резервирования (если применимо)</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Проект включений и спецификация оборудования</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Условия SLA</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="loft-card rounded-2xl p-6 md:p-8">
          <div class="flex items-start gap-4">
            <div class="text-5xl font-black text-accent">04</div>
            <div>
              <h3 class="text-2xl font-bold">Инсталляция и запуск</h3>
              <p class="mt-3 text-slate-300">Финальный этап подключения:</p>
              <ul class="mt-4 space-y-2 text-slate-300">
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Монтаж оборудования и кабелей</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Настройка каналов и VLAN</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Тестирование failover/failback</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Запуск мониторинга</span></li>
                <li class="flex items-start gap-2"><span class="text-accent">•</span><span>Подписание акта приёма-передачи</span></li>
              </ul>
              <p class="mt-4 text-slate-400 text-sm">Срок инсталляции: 5-15 рабочих дней (зависит от сложности)</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="mt-12 text-center">
        <h2 class="text-2xl font-bold mb-4">Готовы начать?</h2>
        <p class="text-slate-300 mb-6">Оставьте заявку и мы свяжемся с вами для обсуждения деталей</p>
        <a href="/contact.php" class="rounded-xl bg-accent px-6 py-3 text-slate-900 font-semibold hover:bg-cyan-300 transition">Оставить заявку</a>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
