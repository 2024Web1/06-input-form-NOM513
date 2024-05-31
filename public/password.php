<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力結果</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = htmlspecialchars($_POST['user']);
        $pass = htmlspecialchars($_POST['pass']);
        echo "<p>入力されたユーザーIDは、$user です。</p>";
        echo "<p>入力されたパスワードは、$pass です。</p>";
    }
    ?>
</body>
</html>