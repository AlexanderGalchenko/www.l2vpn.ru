<?php
$pageTitle = 'Заявка на подключение L2VPN — проверка техвозможности | L2VPN.ru';
$pageDescription = 'Оставьте заявку на проверку технической возможности подключения L2VPN. Укажите адреса, скорость и контакты — мы вернёмся с расчётом.';
$ogTitle = 'Заявка на подключение L2VPN';
$ogDescription = 'Проверка техвозможности подключения L2VPN-канала. Заполните форму и получите расчёт.';
$ogUrl = 'https://l2vpn.ru/contact.php';
$ogImage = 'https://l2vpn.ru/og-l2vpn.jpg';

include 'includes/header.php';
?>

  <!-- CONTACT / FORM -->
  <section id="contact" class="relative">
    <div class="mx-auto max-w-3xl px-4 py-16">
      <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Проверка технической возможности</h1>
        <p class="mt-4 text-lg text-slate-300">Заполните форму — заявка уйдёт в Telegram. Мы вернёмся с расчётом и сроками подключения.</p>
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

      <div class="mt-8 loft-card rounded-2xl p-6">
        <h3 class="text-xl font-semibold mb-4">Контакты для связи</h3>
        <ul class="space-y-2 text-slate-300">
          <li>Email: <a href="mailto:info@l2vpn.ru" class="text-accent hover:underline">info@l2vpn.ru</a></li>
          <li>Telegram: <a href="#" class="text-accent hover:underline">@l2vpn_support</a></li>
        </ul>
      </div>

      <p class="mt-6 text-xs text-slate-500">*Данный сайт — первая фаза проекта. На втором этапе L2VPN.ru станет маркетплейсом предложений каналов.</p>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
