<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($pageTitle ?? 'L2VPN.ru — Защищённые L2VPN-каналы для операторов и бизнеса'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? 'L2VPN-каналы уровня L2: прозрачный Ethernet, SLA, резервирование по разным маршрутам. Скорости 10/50/100/500 Мбит/с и выше. Проверка техвозможности, подключение по РФ.'); ?>" />
  <meta name="theme-color" content="#0f172a" />
  <meta name="robots" content="index,follow" />
  <!-- OpenGraph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle ?? 'L2VPN.ru — Защищённые L2VPN-каналы'); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription ?? 'Прозрачные L2-каналы для операторов и бизнеса. SLA, резерв по независимым трассам. Скорости до 10 Гбит/с.'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo htmlspecialchars($ogUrl ?? 'https://l2vpn.ru/'); ?>" />
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage ?? 'https://l2vpn.ru/og-l2vpn.jpg'); ?>" />

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


<link rel="stylesheet" href="/dist/tailwind.css">


  <style>
    /* LOFT texture background */
    body { background: radial-gradient(60% 60% at 50% 0%, rgba(34,51,68,.25) 0%, rgba(9,12,16, .9) 45%, #0b0f14 100%), url('https://www.l2vpn.ru/background2.png?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-attachment: fixed; }
    .glass { backdrop-filter: blur(10px); background: rgba(17,24,39,.72); }
    .loft-card { background: linear-gradient(180deg, rgba(31,41,55,.85), rgba(17,24,39,.85)); border: 1px solid rgba(148,163,184,.15); box-shadow: 0 20px 60px rgba(0,0,0,.35); }
    .loft-border { border: 1px dashed rgba(148,163,184,.25); }
  </style>
</head>
<body class="text-slate-200 antialiased selection:bg-accent/30 selection:text-white">
  <!-- Top bar -->
  <header class="glass sticky top-0 z-50 border-b border-slate-700/50">
    <div class="mx-auto max-w-7xl px-4 py-3 flex items-center justify-between">
      <a href="/index.php" class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-accent/20 text-accent font-black">L2</span>
        <span class="text-xl font-semibold tracking-wide">L2VPN.ru</span>
      </a>
      <nav class="hidden md:flex items-center gap-6 text-sm">
        <a href="/index.php#what" class="hover:text-white/90">Что это</a>
        <a href="/pricing.php" class="hover:text-white/90">Тарифы</a>
        <a href="/sla.php" class="hover:text-white/90">SLA & Резерв</a>
        <a href="/how.php" class="hover:text-white/90">Как подключить</a>
        <a href="/contact.php" class="hover:text-white/90">Заявка</a>
      </nav>
      <a href="/contact.php" class="rounded-xl bg-accent/90 px-4 py-2 text-slate-900 font-semibold hover:bg-accent transition">Проверить подключение</a>
    </div>
  </header>
