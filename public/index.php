<?php
include 'lang-data.php';

// クエリで言語指定がある場合はそれを優先
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $langData)) {
    $lang = $_GET['lang'];
} else {
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    $lang = array_key_exists($browserLang, $langData) ? $browserLang : 'en';
}

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $selectedLangData['title']; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/favicon.ico">
    <script src="https://kit.fontawesome.com/e186698b3b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="wrapper">

        <!-- メッセージ部分➀ -->
            <div>
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
            <div class="foo-h1">
                <h1>【&nbsp;過去のプロジェクト&nbsp;】</h1>
            </div>
            <div class="homePages">
                <ul>
                    <li>
                        <a href="https://official-alpha-weld.vercel.app/" target="_blank" rel="noopener noreferrer"><i class="fa-regular fa-square-caret-up"></i>&nbsp;&nbsp;&nbsp;開発者の公式サイト</a>
                    </li>
                    <li>
                        <a href="https://taz-bones.onrender.com/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-cube"></i>&nbsp;&nbsp;&nbsp;友人のホームページ</a>
                    </li>
                    <li>
                        <a href="https://tsp-frontend-6I08.onrender.com/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;GoogleMapで最適デートプランを決める</a>
                    </li>
                    <li>
                        <a href="https://github.com/banmaJump?tab=repositories" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i>&nbsp;&nbsp;&nbsp;その他のプロジェクト</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



    <!-- 言語切り替えのJS -->
    <script src="js/lang-select.js"></script>
</body>
</html>
