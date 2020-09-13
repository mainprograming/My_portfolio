<?php 
session_start();

//入力画面以外は戻る//
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //メール送信//
    $to = 'soma.h.env@gmail.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前: {$post['name']}
メールアドレス: {$post['email']}
内容: 
{$post['contact']}
EOT;
    //以下3つはサーバー借りるor、Gmailでめんどいセッティング//
    //var_dump($body);
    //exit();
    //mb_send_mail($to, $subject, $body, "From: {$from}");
    
    //セッションを消してthanks画面へ//
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}  

    
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>haruのポートフォリオ紹介</title>
  <link rel="stylesheet" type="text/css" href="https://www.jungleocean.com/demo/jquery-slick/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://www.jungleocean.com/demo/jquery-slick/css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="confirm.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>
    <h1>お問い合わせ内容</h1>
    <form class="form-contents" action="" method="post">
        <div class="form-content">
          <p>お名前</p>
          <?php echo htmlspecialchars($post['name']); ?>
        </div>
        <div class="form-content">
          <p>メールアドレス</p>
          <?php echo htmlspecialchars($post['email']); ?>
        </div>
        <div class="form-content">
          <p>お問い合わせ内容</p>
          <?php echo nl2br(htmlspecialchars($post['contact'])); ?>
        </div>
        <div class="button">
            <a href="index.php">戻る</a>
            <button type="submit">送信する</button>
        </div>
    </form>
</body>
</html>
