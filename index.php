<?php 
session_start();

$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = filter_input_array(INPUT_POST, $_POST);
    //フォームの送信時にエラーをチェックする//
    if ($post['name'] === '') {
      $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
      $error['email'] = 'blank';
    }
    if ($post['contact'] === '') {
      $error['contact'] = 'blank';
    }

    if (count($error) === 0) {
      $_SESSION['form'] = $post;
      header('Location: confirm.php');
      exit();
    }
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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>
  <header>
    <div class="header-contents">
      <a href="#">HARU's Portfolioへようこそ!</a>
      <ul class="header-content">
        <li><a href="#profile">自己紹介</a></li>
        <li><a href="#skill">スキル</a></li>
        <li><a href="#service">サービス</a></li>
        <li><a href="#portfolio">ポートフォリオ</a></li>
        <li><a href="#sns">SNS</a></li>
        <li><a href="#topix">トピックス</a></li>
        <li><a href="#form">フォーム</a></li>
      </ul>
    </div>
  </header>

  <main>
    <div class="main-top">
      <img src="https://reach-rh.com/wp-content/uploads/2017/08/7f707696e04dafe3359796ecc28196d3.jpg">
      <h1>Hello!<br>Welcome To<br>HARU's Portfolio!</h1>
      <a href="#form">Mail</a>
    </div>
    <div class="profile" id="profile">
      <h1 class="main-header">自己紹介</h1>
      <div class="profile-contents">
        <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/icon.png?raw=true">
        <table>
          <tr>
            <td>Name</td>
            <td>HARU</td>
          </tr>
          <tr>
            <td>From</td>
            <td>神奈川県</td>
          </tr>
          <tr>
            <td>Year</td>
            <td>23</td>
          </tr>
          <tr>
            <td>Hobby</td>
            <td>スポーツ(観戦/やる)・youtebe(実況者)<br>釣り・人とのコミュニケーション</td>
          </tr>
          <tr>
            <td>Biography</td>
            <td>神奈川県の市立高校から東京の上側の大学に行き、<br>大学院でとある研究まで行う。<br>(学科・専攻は聞いてください)</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="skill"  id="skill">
      <h1 class="main-header">スキル</h1>
      <div class="skill-contents">
        <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/html.png?raw=true">
        <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/css.png?raw=true">
        <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/js.png?raw=true">
        <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/php.png?raw=true">
      </div>
    </div>
    <div class="service" id="service">
      <h1 class="main-header">サービス</h1>
      <div class="service-contents">
        <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/%E6%AD%AF%E8%BB%8A.png?raw=true">
        <div class="service-text">主にコーディングを業務として行っています。<br>自身のスキル向上のために、LP模写コーディングを10件以上行いました。<br>HPも数件模写コーディングを行ってり、<br>腕がなまらぬように何かしらに手をつけています。</div>
      </div>
    </div>
    <div class="portfolio" id="portfolio">
      <h1 class="main-header">ポートフォリオ</h1>
      <div class="portfolio-contents">
        <div class="portfolio-content">
          <a href="https://shaveushaveu.github.io/techcamp/">
            <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/teck-camp.png?raw=true">
            <div class="portfolio-text">
              <h2>tech camp</h2>
              <p>No.1エンジニア育成プログラムサイト。<br>コーポレート型になっていてhtml,css,jqueryが多く含まれています。</p>
            </div>
          </a>
        </div>
        <div class="portfolio-content">
          <a href="https://shaveushaveu.github.io/program-isara/">
            <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/isara.png?raw=true">
            <div class="portfolio-text">
              <h2>Isara</h2>
              <p>バンコクのノマドエンジニア育成講座サイト。<br>LP型のサイトでQ&Aなどに簡単なjQueryが入っています。</p>
            </div>
          </a>
        </div>
        <div class="portfolio-content">
          <a href="https://shaveushaveu.github.io/STROK/">
            <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/stork.png?raw=true">
            <div class="portfolio-text">
              <h2>STORK</h2>
              <p>WordPressの人気サイト。<br>ブログ型になっており、カルーセルまで含まれています。</p>
            </div>
          </a>
        </div>
        <div class="portfolio-content">
          <a href="https://mainprograming.github.io/bibian/">
            <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/%E3%83%93%E3%83%93%E3%82%A2%E3%83%B3-top.png?raw=true">
            <div class="portfolio-text">
              <h2>ビビアン</h2>
              <p>横浜にある隠れた名店<br>こちらは完全オリジナルで作成しました。母の会社です。</p>
            </div>
          </a>
        </div>
        <div class="portfolio-content">
          <a href="https://mainprograming.github.io/neko/">
            <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/neko-%E3%82%AF%E3%83%AA%E3%83%8B%E3%83%83%E3%82%AF-top.png?raw=true">
            <div class="portfolio-text">
              <h2>クリニック</h2>
              <p>関西にあるクリニックの模写。<br>animationが多く含まれている物です。画像は猫にしました。</p>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="sns" id="sns">
      <h1 class="main-header">SNS</h1>
      <h3>SNSでのご連絡もお持ちしております。</h3>
      <div class="sns-contents">
        <div class="sns-content">
          <h2>Mail</h2>
          <a class="fas fa-envelope"></a>
          <h2>【shavesu.haru@icloud.com】</h2>
          <p></p>
        </div>
        <div class="sns-content">
          <h2>Twitter</h2>
          <a class="fab fa-twitter" href="https://twitter.com/haru46187893"></a>
          <h2>【@haru46187893】</h2>
        </div>
        <div class="sns-content">
          <h2>Instagram</h2>
          <a class="fab fa-instagram"></a>
          <h2>【作成中・・・】</h2>
        </div>
      </div>
    </div>
    <div class="topix" id="topix">
      <h1 class="main-header">トピックス</h1>
      <div class="topix-contents">
        <div class="topix-left">
          <div class="topix-photo">
            <a href="https://mainprograming.github.io/bibian/">
              <img src="https://github.com/mainprograming/portogolio/blob/master/%E3%83%9D%E3%83%BC%E3%83%88%E3%83%95%E3%82%A9%E3%83%AA%E3%82%AA%E7%94%BB%E5%83%8F/download.jpg?raw=true">
            </a>
          </div>
          <h2>ビューティーサロンビビアン</h2>
          <h3>TEL 045-772-7121</h3>
          <p>こちらのサイトは自営業で行っているヘアーサロンです。従業員は母がやっており、予約制となっております(飛び入りも可)。かれこれ20年以上経営しており、地元のみならず県外からもリピーターのお客様がご来店され、楽しく営業をしております。お客様の中には、お話だけの方や、ご相談だけでご来客される方も多く、多くのお客様に愛され営業を行っています。理髪のみならず着付けも行っています。ぜひ足をお運びくださいませ。</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.8075292203525!2d139.62006666581846!3d35.38522938972596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184368b81fac93%3A0xdb21c098287c697d!2z44OT44Ol44O844OG44Kj44O844K144Ot44Oz44O744OT44OT44Ki44Oz!5e0!3m2!1sja!2sjp!4v1593923566628!5m2!1sja!2sjp" width="550" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <div class="form" id="form">
      <h1 class="main-header">フォーム(メール)</h1>
      <form class="form-contents" action="" method="post" novalidate>
        <div class="form-content">
          <p>お名前</p>
          <input type="text" placeholder="氏名" name="name" value="<?php echo htmlspecialchars($post['name']); ?>">
        </div>
        <?php if ($error['name'] === 'blank'): ?>
          <p class="error_msg">※お名前をご記入ください</p>
        <?php endif; ?>
        <div class="form-content">
          <p>メールアドレス</p>
          <input type="email" placeholder="XXXXX.XXX@icloud.com" name="email" value="<?php echo htmlspecialchars($post['email']); ?>">
        </div>
        <?php if ($error['email'] === 'blank'): ?>
          <p class="error_msg">※メールアドレスをご記入ください</p>
        <?php endif; ?>
        <div class="form-content">
          <p>お問い合わせ内容</p>
          <textarea placeholder="お問い合わせ内容をお書きください。" name="contact"><?php echo htmlspecialchars($post['contact']); ?></textarea>
        </div>
        <?php if ($error['contact'] === 'blank'): ?>
          <p class="error_msg">※お問い合わせ内容をご記入ください</p>
        <?php endif; ?>
        <input type="submit" value="送信する" class="submit">
      </form>
    </div>
  </main>

  <footer>
    <h1>© Copyright - HARU's Portfolio 2020 All Rights Reserved.</h1>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>