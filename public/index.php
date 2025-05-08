<?php
$defaultLang = 'en';
function getMessages($lang) {
  $messages = [
    'ja' => [...],
    'zh' => [...],
    'en' => [...],
  ];
  return $messages[$lang] ?? $messages['en'];
}
$messages = getMessages($defaultLang);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title id="page-title"><?= htmlspecialchars($messages['title']) ?></title>
  <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="introImg">
        <img id="main-image" src="public/images/en.png" alt="Localized Image">
      </div>
      <div class="comment">
        <h1 id="greeting"><?= $messages['greeting'] ?></h1>
        <div class="messages">
          <p id="msg01"><?= $messages['message01'] ?></p>
          <p id="msg02"><?= $messages['message02'] ?></p>
          <p id="msg03"><?= $messages['message03'] ?></p>
        </div>
      </div>
      <div id="language-tabs">
        <span class="lang-tab active" data-lang="ja">日本語</span>｜
        <span class="lang-tab" data-lang="zh">中文</span>｜
        <span class="lang-tab" data-lang="en">English</span>
      </div>
    </div>
  </div>
  <script src="public/js/lang-select.js"></script>
</body>
</html>