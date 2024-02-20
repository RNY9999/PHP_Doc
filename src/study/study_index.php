<?php
$login_flag = false; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/pages/top.css">
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
        <div class="index">
            <ol class="studyList">
                <li class="studyList__item">
                    <a href="s1.php">1. 基本的な構文</a>
                </li>
                <li class="studyList__item">
                    <a href="s2.php">2. 型</a>
                </li>
                <li class="studyList__item">
                    <a href="s3.php">3. 関数</a>
                </li>
            </ol>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>