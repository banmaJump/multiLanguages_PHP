<?php
header('Content-Type: application/json');
$lang = $_GET['lang'] ?? 'en';

function getMessages($lang) {
    switch ($lang) {
        case 'ja':
            return [
                'title' => '🌸よちとものインターネット🌸',
                'greeting' => 'ようこそ！',
                'message01' => '大学では中国で経済を学びました。現地で最先端のアプリやテクノロジーに触れ、生活の質が大きく向上した経験を通じて、ITの可能性に魅了されました。その後、夏休みに日本へ帰国した際、日本のアプリ環境に課題を感じ、日本社会の成長に貢献したいという思いからエンジニアを志しました。',
                'message02' => '以下に掲載しているのは、これまでに私が開発してきたWebサイトの一部です。さらなる成長を目指して取り組んでいますので、ご意見やご感想をいただけると幸いです。',
                'message03' => '現在はアイルランドでワーキングホリデーを経験中です。22歳という、人生の充電期間を全力で楽しみながら、自分の可能性を広げています。',
            ];
        case 'zh':
            return [
                'title' => '📚yipeng的主页📚',
                'greeting' => '您好！',
                'message01' => '我曾在中国学习经济学和国际贸易。那段时间里，我经常接触到许多先进的应用和技术，我的生活质量也得到了显著提升。这段经验让我对科技的潜力产生了浓厚兴趣。',
                'message02' => '下面的链接是我至今开发的一部分网站项目。现在，我仍在不断学习和成长，如果您有任何建议或反馈，非常欢迎您提出宝贵的意见。',
                'message03' => '目前我正在爱尔兰进行打工度假。我快就23岁了，正在全力享受这段人生的"充电"时光，不断探索和扩展自己的可能性。',
            ];
        default:
            return [
                'title' => "🔤Yipeng's portfolio🔤",
                'greeting' => 'Hello World!',
                'message01' => 'I studied economics at university in China. During my time there, I was surprised how chinese apps could dramatically improve quality of my life, which inspired me to explore the possibilities of IT.',
                'message02' => 'The following site showcases some of the websites I’ve developed so far. I’m always striving to improve, so I’d appreciate any feedback or comments you may have.',
                'message03' => 'Now, I’m on a working holiday in Ireland. At 22, I’m fully enjoying this recharging phase of life, making the most of this unique time to explore and grow.',
            ];
    }
}

$messages = getMessages($lang);
echo json_encode([
  'lang' => $lang,
  'title' => $messages['title'],
  'greeting' => $messages['greeting'],
  'message01' => $messages['message01'],
  'message02' => $messages['message02'],
  'message03' => $messages['message03'],
  'image' => "public/images/$lang.png"
]);