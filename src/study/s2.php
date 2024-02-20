<?php
$login_flag = false; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/pages/study.css">
    <title>PHP マニュアル</title>
</head>
<body>
    <header class="header">
        <h1 class="header__title">PHPマニュアル勉強用</h1>
        <nav class="header__nav">
            <ul class="navigation-list">
                <li class="navigation-list__item">
                    <?php if ($login_flag) { ?>
                        <a href="#">プロフィール</a>
                    <?php } else { ?>
                        <a href="#">ログイン</a>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <a class="back-button" href="study_index.php">戻る</a>

        <section class="study-area">
            <!-- この勉強のタイトルを記入してください -->
            <h2 class="study-area__title">基本的な構文</h2>
            <div class="study-area__write">
                <!-- ここから下に勉強用のコードを記述 -->
                <?php
                // phpの型
                // null, bool, int, float, string, array, object, callable, resource
                $a_bool = true; //bool
                $a_str = "foo"; //string
                $a_str2 = 'foo'; //string
                $a_int = 12; //int
                
                //型を知りたいときは get_debug_type()
                echo get_debug_type($a_bool), "<br>";
                echo get_debug_type($a_str), "<br>";
                
                //式と型を知りたいときはvar_dump()
                echo var_dump($a_int), "<br>";
                echo var_dump(is_int($a_str)), "<br>";
                echo var_dump(is_string($a_str)), "<br>";

                if (is_int($a_int)) {
                    echo "<p>これはintです。値: " . $a_int*$a_int . "</p>";
                }

                //null型
                $big_null = NULL;
                $small_null = null;

                if (is_null($big_null)) {
                    echo "<p>大文字のNULLです</p>";
                }
                if (is_null($small_null)) {
                    echo "<p>小文字のnullです</p>";
                }

                //boolean
                $bool = true;
                if ($bool) {
                    echo "<p>bool = true</p>";
                }
                $bool = false;
                if (!$bool) {
                    echo "<p>bool = false</p>";
                }

                // キャストでfalseになるもの
                // これ以外はtrueになるらしいです
                $bool_b = (bool)false;
                $bool_num = (bool)0;
                $bool_float = (bool)0.0;
                $bool_str = (bool)'';
                $bool_strzero = (bool)'0';
                $bool_array = (bool)[];

                echo var_dump($bool_b) . "<br>";
                echo var_dump($bool_num) . "<br>";
                echo var_dump($bool_float) . "<br>";
                echo var_dump($bool_str) . "<br>";
                echo var_dump($bool_strzero) . "<br>";
                echo var_dump($bool_array) . "<br>";
                ?>
                <!-- ここまでコード記述 -->
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>