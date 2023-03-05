<?php
$title = tr('seo');
$description = tr("Red Counsel's team has substantial experience in providing full-fledged legal support to its clients with high standard of legal advice and tailor-made business solutions. More than 15 years of successful experience in practicing law, a thorough knowledge of the local business environment, and a clear understanding of clients' needs, puts Red Counsel in the right place to add real value to projects of our clients at all stages, from initiation to execution.");
$image = asset('img/logo-red.png');
$site_name = 'https://redcounsel.uz';
$current_url = url()->current();
?>

<link rel="shortcut icon" href="{{ asset('img/logo-red.png') }}" type="image/png">

<meta name="article:tag" content="Экспертиза Ташкенте">
<meta name="article:tag" content="Юридической поддержка">
<meta name="article:tag" content="Национальный Суд">
<meta name="article:tag" content="Юрист">
<meta name="article:tag" content="Адвокатура">
<meta name="article:tag" content="Корпоративное право">
<meta name="article:tag" content="Оформлении">
<meta name="article:tag" content="Сделка">
<meta name="article:tag" content="Эксперт Узбекистана">
<meta name="article:tag" content="Консультация">
<meta name="article:tag" content="Юридическая консультация">
<meta name="article:tag" content="Коммерческое законолательство">
<meta name="article:tag" content="Юридических услуг">
<meta name="article:tag" content="Юридическии услуги">
<meta name="article:tag" content="Консалтинг">
<meta name="article:tag" content="Консалтинговые компании в Узбекистане">
<meta name="article:tag" content="Анализируя законы">
<meta name="article:tag" content="Узбекистан">

<meta name="article:tag" content="Examination of Tashkent">
<meta name="article:tag" content="Legal support">
<meta name="article:tag" content="National Court">
<meta name="article:tag" content="Lawyer">
<meta name="article:tag" content="Advocacy">
<meta name="article:tag" content="Corporate law">
<meta name="article:tag" content="Registration">
<meta name="article:tag" content="Deal">
<meta name="article:tag" content="Expert of Uzbekistan">
<meta name="article:tag" content="Consultation">
<meta name="article:tag" content="Legal advice">
<meta name="article:tag" content="Commercial legislation">
<meta name="article:tag" content="Legal services">
<meta name="article:tag" content="Consulting">
<meta name="article:tag" content="Consulting companies in Uzbekistan">
<meta name="article:tag" content="Analyzing laws">
<meta name="article:tag" content="Uzbekistan">

<meta name="article:tag" content="Toshkent ekspertizasi">
<meta name="article:tag" content="Huquqiy yordam">
<meta name="article:tag" content="Milliy Sud">
<meta name="article:tag" content="Advokat">
<meta name="article:tag" content="Targ'ibot">
<meta name="article:tag" content="Korporativ huquq">
<meta name="article:tag" content="Ro'yxatdan o'tish">
<meta name="article:tag" content="Shartnoma">
<meta name="article:tag" content="O'zbekiston ekspert">
<meta name="article:tag" content="Maslahat">
<meta name="article:tag" content="Yuridik maslahat">
<meta name="article:tag" content="Tijorat qonunchiligi">
<meta name="article:tag" content="Yuridik xizmatlar">
<meta name="article:tag" content="Konsalting">
<meta name="article:tag" content="O'zbekistonda konsalting kompaniyalari">
<meta name="article:tag" content="Qonunlarni tahlil qilish">
<meta name="article:tag" content="O'zbekiston">

<meta name="article:tag" content="Тошкент експертизаси">
<meta name="article:tag" content="Ҳуқуқий ёрдам">
<meta name="article:tag" content="Миллий Суд">
<meta name="article:tag" content="Адвокат">
<meta name="article:tag" content="Тарғибот">
<meta name="article:tag" content="Корпоратив ҳуқуқ">
<meta name="article:tag" content="Рўйхатдан ўтиш">
<meta name="article:tag" content="Шартнома">
<meta name="article:tag" content="Ўзбекистон експерт">
<meta name="article:tag" content="Маслаҳат">
<meta name="article:tag" content="Юридик маслаҳат">
<meta name="article:tag" content="Тижорат қонунчилиги">
<meta name="article:tag" content="Юридик хизматлар">
<meta name="article:tag" content="Консалтинг">
<meta name="article:tag" content="Ўзбекистонда консалтинг компаниялари">
<meta name="article:tag" content="Қонунларни таҳлил қилиш">
<meta name="article:tag" content="Ўзбекистон">

<meta name="keywords" content="{{ $description }}">
<meta name="robots" content="{{ $title }}">
<meta name="googlebot" content="{{ $title }}">
<meta name="robots" content="index, follow">

<meta name="twitter:site" content="{{ $site_name }}">
<meta name="twitter:type" content="website">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:url" content="{{ $current_url }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:card" content="summary_large_image">

<meta property="og:image" content="{{ $image }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}" />
<meta property="og:locale" content="{{ app()->getLocale() }}">
<meta property="og:site_name" content="{{ $site_name }}">
<meta property="og:type" content="website">
<meta property="og:updated_time" content="{{ date(now()) }}">
<meta property="og:url" content="{{ $current_url }}">
<link href="{{ $current_url }}" rel="canonical">

<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TSGGZRS');
</script>
<!-- End Google Tag Manager -->
