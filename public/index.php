<?php
// lang-data.php の読み込み
include 'lang-data.php';

// 言語パラメータを取得（デフォルトは日本語）
$lang = isset($_GET['lang']) && array_key_exists($_GET['lang'], $langData) ? $_GET['lang'] : 'ja';

// 言語に対応するデータを取得
$selectedLangData = $langData[$lang];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <?php if ($lang == 'ja'): ?>
        <meta name="google" content="notranslate">
        <meta http-equiv="Content-Language" content="ja">
    <?php elseif ($lang == 'zh'): ?>
        <meta name="google" content="notranslate">
        <meta http-equiv="Content-Language" content="zh">
    <?php elseif ($lang == 'en'): ?>
        <meta name="google" content="notranslate">
        <meta http-equiv="Content-Language" content="en">
    <?php endif; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $selectedLangData['title']; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/favicon.ico">
    <script src="https://kit.fontawesome.com/e186698b3b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">

    <!-- メッセージ部分➀ -->
        <div class="container">
            <div class="comment">
                <h1 id="greeting"><?php echo $selectedLangData['greeting']; ?></h1>
                <div class=vertical>
                    <!-- 画像部分 -->
                    <div class="introImg">
                        <img id="main-image" src="<?php echo $selectedLangData['image']; ?>" alt="Localized Image">
                    </div>
                    <h2 id="greeting"><?php echo $selectedLangData['greeting']; ?></h1>
                    <!-- コメント -->
                    <div class="messages">
                        <p id="message01"><?php echo $selectedLangData['message01']; ?></p>
                        <p id="message02"><?php echo $selectedLangData['message02']; ?></p>
                        <p id="message03"><?php echo $selectedLangData['message03']; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 言語選択タブ -->
         <div class="ltb">
            <div id="language-tabs">
                <a href="?lang=ja" class="lang-tab <?php echo $lang == 'ja' ? 'active' : ''; ?>">日本語</a>
                <div class="con-l">|</div>
                <a href="?lang=zh" class="lang-tab <?php echo $lang == 'zh' ? 'active' : ''; ?>">中文</a>
                <div class="con-l">|</div>
                <a href="?lang=en" class="lang-tab <?php echo $lang == 'en' ? 'active' : ''; ?>">English</a>
            </div>
        </div>
    </div>
    
    <!-- メッセージ部分➁ -->
        <div class="footer">
            <h1>【&nbsp;私のプロジェクト&nbsp;】</h1>
            <div class="homePages">
                <li><a href="official-alpha-weld.vercel.app"><i class="fa-regular fa-square-caret-up"></i>&nbsp;斑馬公式サイト--Vercel</i></a></li>
                <li><a href="taz-bones.onrendar.com"><i class="fa-solid fa-cube"></i>&nbsp;たず旅--Render</i></a></li>
                <li><a href="https://github.com/banmaJump?tab=repositories"><i class="fa-brands fa-github"></i>&nbsp;その他のプロジェクト--github</a></li>
            </div>
        </div>

    <!-- 言語切り替えのJS -->
    <script src="js/lang-select.js"></script>
</body>
</html>
