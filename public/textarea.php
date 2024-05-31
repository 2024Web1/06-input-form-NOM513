<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Text Input Result</title>
</head>
<body>
    <p>以下の1と2は、それぞれ別々にpタグでくくること</p>
    <p>入力された文章はつぎのとおりです。</p>
    <?php
    if (isset($_POST['submit'])) {
        $input_text = htmlspecialchars($_POST['input_text'], ENT_QUOTES, 'UTF-8');
        echo "<p>{$input_text}</p>";
    } else {
        echo "<p>フォームが送信されていません。</p>";
    }
    ?>
    <br>
    <button onclick="window.history.back();">戻る</button>
</body>
</html>