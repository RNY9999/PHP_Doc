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
            <h2 class="study-area__title">関数</h2>
            <div class="study-area__write">
                <!-- ここから下に勉強用のコードを記述 -->
                <?php
                $greet = hello();
                echo $greet . "<br>";
                increment(0);
                /**
                 * 再帰関数
                 * 
                 * 引数として受け取った値をインクリメントし続けて5を超えたら値をechoで表示します
                 *
                 * @param int $a これは最初の数値でこの値に1ずつ足されます
                 * @return function この関数事態を呼び出します
                 */
                function increment($a) {
                    if ($a < 5):
                        return increment($a + 1);
                    else:
                        echo $a . "<br>";
                    endif;
                }


                /**
                 * ユーザー定義関数
                 * @return string - string型のhelloを返却
                 */
                function hello() {
                    return "hello world";
                }

                ?>
                <!-- ここまでコード記述 -->
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>