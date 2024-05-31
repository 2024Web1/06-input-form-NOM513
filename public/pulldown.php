<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Fruit Selection Result</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        $fruit = htmlspecialchars($_POST['fruit'], ENT_QUOTES, 'UTF-8');
        echo "<p>あなたの好きなフルーツは、{$fruit}ですね。</p>";
        echo '<p><a href="pulldown.html">戻る</a></p>'; // フォームページへのリンク
    } else {
        echo "<p>フォームが送信されていません。</p>";
    }
    ?>
</body>
</html>