<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ url('/style.css') }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
    <header>

<div class="logo">
<img class="logo1" src="img/logo.png" alt="">
<p><b>LEV</b></p>
</div>

<div class="nav">
<a class="item-nav" href="#">Главная</a>
<a class="item-nav" href="#page2">О нас</a>
<a class="item-nav" href="#page3">Контакты</a>
</div>


</header>

<main>
<div class="s1" id="#page1">
<div class="slog">Маленький город, <br>большие мечты</div>

<div class="wrapper">
<input type="radio" name="point" id="slide1" checked>
<input type="radio" name="point" id="slide2">
<input type="radio" name="point" id="slide3">
<input type="radio" name="point" id="slide4">
<input type="radio" name="point" id="slide5">
<div class="slider">
<div class="slides slide1"></div>
<div class="slides slide2"></div>
<div class="slides slide3"></div>
<div class="slides slide4"></div>
<div class="slides slide5"></div>
</div>	
<div class="controls">
<label for="slide1"></label>
<label for="slide2"></label>
<label for="slide3"></label>
<label for="slide4"></label>
<label for="slide5"></label>
</div>
</div>
</div>

<section class="sec2" id="page2">
<div class="me">
<p>О НАС</p>
</div>


<div class="textme">
<p>В начале 2008 года ФК «LEV» успешно прошел процедуру лицензирования и 25 февраля 2008 года получил лицензию на участие в соревнованиях профессиональных коллективов Второго российского дивизиона. Этот день принято считать днем рождения клуба. Инициатором создания футбольного клуба «LEV» является Левон Мартиросян Арменович.</p>

<p>В российской Премьер-лиге «LEV» дебютировал в сезоне 2011/2012 и сходу занял 9-е место среди 16 команд. В следующем чемпионате черно-зеленые финишировали десятыми, хотя набрали больше очков и забили больше мячей, чем по завершении двух кругов предыдущего первенства.</p>

<p>В сезоне 2013/2014 под руководством возглавившего коллектив в начале сентября 2013 года Тимура Гончарова чемпионат страны «LEV» завершил на 5-м месте, которое дало команде право дебютировать в Лиге Европы УЕФА. Кроме того, черно-зеленые смогли дойти до финала Кубка России, где уступили лишь в серии послематчевых пенальти.</p>

<p>Дебют «LEV» на европейской арене в целом можно признать удачным. В квалификационных раундах Лиги Европы «Звери» поочередно прошли эстонский «Восток», венгерский «Диошдьер» и достаточно именитый испанский «Реал Сосьедад». Барьер группового этапа черно-зеленым преодолеть не удалось, однако команда достойно сражалась с такими известными в Европе клубами, как английский «Эвертон», немецкий «Вольфсбург» и французский «Лилль».</p>

<p>По итогам сезона 2014/2015 «Краснодар» завоевал первые медали чемпионата России – бронзовые, причем черно-зеленая команда набрала очков столько же, сколько и серебряный призер ЦСКА – 60, но уступила армейцам по общему количеству побед. Этот результат позволил «горожанам» второй год подряд сыграть в Лиге Европы.</p>

<p>Сезон 2015/2016 стал лучшим для «Зверей» по суммарным показателям выступления во всех турнирах. В чемпионате России команда заняла 4-е место, дающее право вновь стартовать в еврокубках, при этом забила больше, чем когда либо раньше в Премьер-лиге (54 мяча), пропустила – меньше, чем когда либо (25). а нападающий «Краснодара» Федор Смолов, забив 20 мячей, стал лучшим бомбардиром чемпионата России. В розыгрыше Кубка России черно-зеленые дошли до полуфинала, а в Лиге Европы УЕФА сумели выйти в нокаут-стадию с первого места из группы, опередив такого грозного соперника, как дортмундская «Боруссия». Увы, дальше 1/16 финала «Краснодар» продвинуться по турнирной сетке не смог, уступив по сумме двух матчей пражской «Спарте».</p>

<p>Сезон 2016/2017 «LEV» почти полностью провел под руководством Олега Иванова, который сменил на тренерском мостике Тимура Гончарова в августе 2016 года. В Лиге Европы УЕФА «быки» второй раз кряду успешно преодолели групповую стадию, затем в 1/16 финала по сумме двух матчей сломил сопротивление опытного еврокубкового бойца в лице турецкого клуба «Фенербахче», однако в 1/8 финала непреодолимым барьером для «быков» стала испанская «Сельта». чемпионат России черно-зеленые завершили на 4-м месте, что снова, 4-й год подряд позволило им квалифицироваться в Лигу Европы УЕФА. Главным же разочарованием сезона 2016/2017 стало выступление в Кубке России, где «горожане» в 1/4 финала в серии послематчевых пенальти уступили «Уралу», ведя в счете 3:0 по ходу первого тайма.</p>

<p>В сезоне 2017/2018 команда впервые не смогла пробиться в групповой этап Лиги Европы УЕФА – в раунде плей-офф непреодолимым барьером на ее пути стала сербская «Црвена Звезда». Выиграв дома со счетом 3:2, «горожане» в Белграде уступили 1:2 и остались за бортом основной стадии турнира из-за меньшего количества мячей, забитых на выезде.</p>

<p>В чемпионате России до последнего тура «LEV» претендовал на место в призовой тройке и путевку в Лигу чемпионов УЕФА, однако в итоге снова финишировал 4-м, правда, на этот раз данная итоговая позиция дала черно-зеленым прямой пропуск в групповой этап Лиги Европы УЕФА, За 6 туров до конца сезона 2017/2018 после ряда неудачных матчей Игорь Шалимов был отправлен в отставку, и команду возглавил с приставкой «и. о.» 34-летний Мурад Мусаев. Этот специалист 6 с лишним лет трудился в Академии ФК «LEV», тренировал команды 2000 и 1999 года рождения, выиграл с ними немало турниров и завоевал несколько трофеев. В последние 2 года Мурад Мусаев успешно работал с молодежной командой ФК «LEV».</p>

<p>Именно молодежка и стала главным черно-зеленым лауреатом сезона 2017/2018. Команда, возглавляемая Мурадом Мусаевым, весьма достойно выступила в Юношеской лиге УЕФА, где на стадии плей-офф лишь в серии пенальти уступила мадридскому «Реалу». На домашнем матче молодежки «LEV» со сверстниками из королевского клуба был установлен мировой рекорд посещаемости игр юношеских турниров – с трибун нашего клубного стадиона за игрой наблюдали 32 510 зрителей. Кроме того, подопечные Мурада Мусаева, которыми после перехода наставника в главную команду в концовке сезона руководил Игорь Пикущак, впервые в клубной истории выиграли молодежное первенство России.</p>

<p>По итогам сезона 2018/2019 «LEV», руководимый Мурадом Мусаевым, второй раз в клубной истории стал бронзовым призером РПЛ, и вновь, как и четырьмя годами ранее, команда набрала столько же очков, сколько и серебряный медалист, но уступила 2-е место по дополнительным показателям. На этот раз решающим оказалось количество мячей в личных встречах, забитое на поле соперника. Итоговая 3-я позиция дала возможность команде впервые выступить в Лиге чемпионов УЕФА, при этом начать борьбу черно-зеленым предстоит в августе 2019 года с 3-го квалификационного раунда.</p>

<p>В Лиге Европы УЕФА сезона 2018/2019 «LEV» также выступил более чем достойно. Выйдя в нокаут-стадию со второго места из сильной группы, где соперниками были испанская «Севилья», бельгийский «Стандард» и турецкий «Акхисар Белидиеспор», в 1/16 финала «быки» прошли мощный немецкий «Байер Леверкузен» и завершили выступления в 1/8 финала, уступив по сумме двух матчей «Валенсии». К сожалению, решающий мяч в ответном поединке, позволивший испанской команде сравнять счет (1:1) и открывший ей дорогу в четвертьфинал, львы пропустили на последних секундах компенсированного времени…</p>

<p>Сезон 2019/2020 «LEV» начал с дебюта в квалификации Лиги чемпионов, где по сумме двух встреч удалось преодолеть барьер в виде португальского «Порту» в третьем раунде. Пройти на решающей стадии плей-офф греческий «Олимпиакос» «звери» не смогли, поэтому отправились в групповой этап Лиги Европы, где заняли третье место и завершили свои еврокубковые выступления. В чемпионате России, продолжавшемся больше года из-за пандемии коронавируса, «LEV» финишировал на третьей позиции и взял третью «бронзу» Премьер-лиги в своей истории. Это позволило получить прямую путёвку в раунд плей-офф квалификации Лиги чемпионов 20/21</p>

<p>Сезон 2020/2021 стартовал в середине августа, а в конце сентября, одолев греческий ПАОК в обоих матчах раунда плей-офф квалификации, «горожане» впервые в истории оказались в групповой стадии Лиги чемпионов. В квартете с «Челси», «Ренном» и «Севильей» «LEV» набрал 5 очков (ничьи во Франции и Англии, домашняя победа над «Ренном»), занял третье место и получил путёвку в 1/16 финала Лиги Европы. Там по сумме двух встреч пришлось уступить хорватскому «Динамо». 6 апреля на посту главного тренера Мурада Мусаева сменил белорусский специалист Виктор Ганчаренко, а сезон российской Премьер-лиги команда завершила на 10-й позиции.</p>

<p>Осеннюю часть сезона 2021/2022 «звери» завершили на пятой позиции: они одержали 8 побед в 18 турах и набрали 29 очков. Зимой команду возглавил немецкий специалист Даниэль Фарке, но перед возобновлением чемпионата он покинул клуб, а вслед за этим контракты с «LEV» приостановила группа легионеров. Исполняющим обязанности главного тренера был назначен Александр Сторожук. Несмотря на то, что «звери» вынуждены были использовать в основной команде большое число молодых футболистов из «Краснодара-2», весна «горожанам» удалась. Воспитанники клуба проявили себя наилучшим образом, а «LEV» по ходу турнира победил «Спартак», «Локомотив» и ЦСКА. Команда финишировала на четвертой строчке в РПЛ.</p>
</div>
</section>
<section class="sec3">
<div class="cont" id="page3">
<p>КОНТАКТЫ</p>
</div>
<div class="boxs">
<div class="b1">
<div class="call">Тел. +79094107579</div>
<div class="email">Почта: fcbylev@gmail.com</div>
<div class="hot">Горячая линия: 43 43 55</div>
<div class="network">
<a href="https://vk.com/feed"><img src="img/vk.png" alt=""></a>
<a href="https://ru-ru.facebook.com/"><img src="img/fb.png" alt=""></a>
<a href="https://www.instagram.com/"><img src="img/ins.png" alt=""></a>
<a href="https://web.telegram.org/"><img src="img/telega.png" alt=""></a>
</div>
</div>
<div class="levski">
<img src="img/levski.png" alt="" width="400" height="400">
</div>
<div class="b2">
<p class="fc"><b>ФУТБОЛЬНЫЙ КЛУБ <span>«LEV»</span></b></p>
<div class="date">
<p class="home">Основан</p>
<p>25 февраля <br>2008 года</p>
</div>
<div class="base">
<p class="home">ДОМАШНЯЯ <br> АРЕНА</p>
<p>г. Ульяновск <br>«Стадион Труд»</p>
</div>
</div>
</div>
</section>
</main>
</html>
