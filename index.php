<?php
$a = ['A', 'B', '!A', 'A || B', 'A && B', 'A xor B'];
$b = [
    [0, 0],
    [0, 1],
    [1, 0],
    [1, 1]
];
$c = [true, false, 1, 0, -1, "1", null, "php"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Старт в PHP</title>
</head>

<body>
    <div class="container">
        <h3>Задание 1. Таблица истинности PHP</h3>
        <div class="first_table">
            <?php
            foreach ($a as $value) {
                echo "<div>$value</div>";
            }
            foreach ($b as $value) {
                echo '<div>' . $value[0] . '</div>';
                echo '<div>' . $value[1] . '</div>';
                echo '<div>';
                var_export(!$value[0]);
                echo '</div>';
                echo '<div>';
                var_export($value[0] || $value[1]);
                echo '</div>';
                echo '<div>';
                var_export($value[0] && $value[1]);
                echo '</div>';
                echo '<div>';
                var_export($value[0] xor $value[1]);
                echo '</div>';
            }
            ?>
        </div>
        <h3>Задание 2. Таблица сравнения c гибким сравнением <code>==</code></h3>
        <div class="second_table">
            <?php
            echo '<div></div>';
            foreach ($c as $value) {
                echo '<div>';
                var_export($value);
                echo '</div>';
            }
            for ($i = 0; $i < count($c); $i++) {
                echo '<div class="first_column">';
                var_export($c[$i]);
                echo '</div>';
                foreach ($c as $value) {
                    echo '<div>';
                    var_export($value == $c[$i]);
                    echo '</div>';
                }
            }
            ?>
        </div>
        <h3>Задание 2. Таблица сравнения c жестким сравнением <code>===</code></h3>
        <div class="third_table">
            <?php
            echo '<div></div>';
            foreach ($c as $value) {
                echo '<div>';
                var_export($value);
                echo '</div>';
            }
            for ($i = 0; $i < count($c); $i++) {
                echo '<div class="first_column">';
                var_export($c[$i]);
                echo '</div>';
                foreach ($c as $value) {
                    echo '<div>';
                    var_export($value === $c[$i]);
                    echo '</div>';
                }
            }
            ?>
        </div><br>
        <div class="conclusion">
            <strong>Вывод:</strong><br>
            <span>Задача 1</span><br>
            <i><b>!A</b> - Истина, если <b>A</b> не равна <b>true</b>.</i><br>
            <i><b>A || B</b> - Истина, если хотя бы одна из <b>A</b> и <b>B</b> равна <b>true</b>.</i><br>
            <i><b>A && B</b> - Истина, если <b>A</b> и <b>B</b> равны <b>true</b>.</i><br>
            <i><b>A xor B</b> - Истина, если одна из <b>A</b> и <b>B</b> равна <b>true</b>, но не обе.</i><br><br>
            <span>Задача 2</span><br>
            <i>При нестрогом сравнении оператор осуществляет приведение между двумя различными типами, если они различаются. То есть он сравнивает значение после преобразования типов.</i><br>
            <i>При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение.</i>
        </div><br>
    </div>
</body>

</html>