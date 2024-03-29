<?php
$login_flag = false; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/pages/top.css">
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
    <main>
        <div class="study">
            <h2 class="study__title">今日の勉強を</h2>
            <a href="./study/study_index.php">勉強する</a>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>