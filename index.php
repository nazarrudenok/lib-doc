<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>russian Losses</title>
    <link rel="stylesheet" href="styles/css/style.css">
</head>
<body>
    <header>
        <div class="header">
            <li class="header-item"><a href="#" class="header-link">Home</a></li>
            <li class="header-item"><a href="#" class="header-link">About-us</a></li>
            <li class="header-item"><a href="#" class="header-link">Download</a></li>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="-main">
                <div class="main-title">
                    <h1 class="title">russianLosses2</h1>
                    <p class="text">Модуль, що дарує радість</p>
                </div>
                <div class="main-stats">
                    <?php
                        $url = 'https://russianwarship.rip/api/v2/statistics/latest';
                        $jsonData = file_get_contents($url);
                        $r = json_decode($jsonData, true);
                        $personnel = $r['data']['stats']['personnel_units'];
                        $personnel = str_replace(',', '.', number_format($personnel));
                        // 
                        $tanks = $r['data']['stats']['tanks'];
                        $tanks = str_replace(',', '.', number_format($tanks));
                        // 
                        $bbm = $r['data']['stats']['armoured_fighting_vehicles'];
                        $bbm = str_replace(',', '.', number_format($bbm));
                        // 
                        $planes = $r['data']['stats']['planes'];
                        $planes = str_replace(',', '.', number_format($planes));
                        // 
                        $helicopters = $r['data']['stats']['helicopters'];
                        $helicopters = str_replace(',', '.', number_format($helicopters));
                        echo "<h1 class='item-stats'>Особовий склад - $personnel</h1>";
                        echo "<h1 class='item-stats'>Танки - $tanks</h1>";
                        echo "<h1 class='item-stats'>Броньовані машини - $bbm</h1>";
                        echo "<h1 class='item-stats'>Літаки - $planes</h1>";
                        echo "<h1 class='item-stats'>Гелікоптери - $helicopters</h1>";
                    ?>
                </div>
            </div>
            <div class="about">
                <p class="-about-text">Модуль дозволяє вам отримувати інформацію про втрати ворога.</p>
                <p class="-about-text">Джерело даних - сайт <a href="#" class="-about-link">Міністерства оборони України</a>.</p>
                <p class="-a1bout-text-2">⚠️ Зверніть увагу, що цей сервіс не є офіційним. Ми залишаємо за собою право не нести відповідальність за збої в системі</a>.</p>
                <p class="--about-text-2">⚠️ Ви маєте право використовувати цей модуль в будь-яких цілях. Єдиний вийняток - застосування його для ведення підривної діяльності проти України, що є суворо забороненим</a>.</p>
            </div>
            <div class="use">
                <h1 class="-use">Застосування</h1>
                <h2 class="-use-item"><span class="-use-title">Клас </span>rus_total</h2>
                <div class="use-container">
                    <div class="use-text">
                        <span>from</span>
                        <span>russianLosses2</span>
                        <span>import</span>
                        <span>rus_total</span>
                        <span>#імпортуємо клас rus_total з бібліотеки</span>
                        <br>
                        <br>
                        <span>rus</span>
                        <span> = </span>
                        <span>rus_total()</span>
                        <span>#створюємо об'єкт на основі класу rus_total</span>
                        <br>
                        <span>rus</span>
                        <span>.get_item</span>
                        <span>('personnel')</span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>