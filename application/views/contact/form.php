<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>lupinus</title>

    <link rel="stylesheet" href="<?= base_url('static/css/base.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/media.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('static/css/slick-theme.css'); ?>">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

</head>

<body>
  <div class="wrapper">
    <section id="header">
          <a class="logo">
            <img src="<?= base_url('static/images/component.png'); ?>">
          </a>

        <div class="header_menu">
            <ul>
              <a href="#"><li class="menu_normal">会社情報</li></a>
              <a href="#"><li class="menu_normal">実績</li></a>
              <a href="#"><li class="menu_normal">料金例</li></a>
              <a href="#"><li class="menu_normal">フロー</li></a>
            </ul>
            <div class="menu_inquiry">
              <a href="#">
                お問い合わせ
              </a>
            </div>
        </div>

        <div class="sp_header_menu">
          <div class="menu menu2" id="MenuBtn">
            <span class="menu-line menu-line2 menu-top-line"></span>
            <span class="menu-line menu-line2 menu-middle-line"></span>
            <span class="menu-line menu-line2 menu-bottom-line"></span>
          </div>
        </div>

        <div class="menu-nav">
      <p class="nav-item">
        <a href="#" class="nav-link">会社情報</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">実績</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">料金例</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">フロー</a>
      </p>
      <p class="nav-item">
        <a href="#" class="nav-link">お問い合わせ</a>
      </p>
    </div>
    </section>

    <div class="about-title">
       <p>CONTACT</p>
       <h2>お問い合わせ</h2>
    </div>

    <section id="contact">
      <?= form_open('contact/confirm'); ?>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> お名前</p>
        </div>
        <br>
        <input type="text" name="name" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">会社名</p>
        </div>
        <br>
        <input type="text" name="company" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> メールアドレス</p>
        </div>
        <br>
        <input type="text" name="email" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item"><span>※</span> 電話番号</p>
        </div>
        <br>
        <input type="text" name="tel" value="必ずご記入ください" class="input">
        <br>

        <div class="contact_item_wrap">
            <p class="contact_item">物件の許認可状況</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="authorization" value="1"><p class="choice">特になし</p><br>
          <input type="radio" name="authorization" value="2"><p class="choice">旅館・ホテル（旅館業法）</p><br>
          <input type="radio" name="authorization" value="3"><p class="choice">簡易宿所（旅館業法</p><br>
          <input type="radio" name="authorization" value="4"><input type="text" name="other" value="その他" class="disable input_other">
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">物件の権利状況</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="authorization" value="1"><p class="choice">特になし</p><br>
          <input type="radio" name="authorization" value="2"><p class="choice">旅館・ホテル（旅館業法）</p><br>
          <input type="radio" name="authorization" value="3"><p class="choice">簡易宿所（旅館業法</p><br>
          <input type="radio" name="authorization" value="4"><input type="text" name="other" value="その他" class="disable input_other">
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">物件住所</p>
        </div>
        <br>
        <input type="text" name="address" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">検討中の物件戸数</p>
        </div>
        <br>
        <input type="text" name="number" class="input3">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">専用面積（ｍ2） ※複数個の場合は平均をご記載ください</p>
        </div>
        <br>
        <div class="contact_flex">
          <input type="text" name="" class="input"><p class="M2">m2</p>
        </div>
        <br>

        <div class="contact_item_wrap">
            <p class="contact_item">物件の情報URLページ（AirbnbやSUUMO、建築士サイトなど）</p>
        </div>
        <br>
        <input type="text" name="URL" class="input">
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">築年</p>
        </div>
        <br>
        <div class="contact_flex">
          <input type="text" name="" class="input" value="例： 2001年"><p class="M2">年</p>
        </div>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">ご相談したいこと、弊社に期待されているところがありましたらご記入くださいませ</p>
        </div>
        <br>
        <textarea name="consultation"></textarea>
        <br>
        <div class="contact_item_wrap">
            <p class="contact_item">LUPINUSをお知りになったきっかけを教えてください</p>
        </div>
        <br>
        <div class="radio_wrap">
          <input type="radio" name="authorization" value="1"><p class="choice">Yahoo!やGoogleなど検索ホームページ</p><br>
          <input type="radio" name="authorization" value="2"><p class="choice">SNSやブログ</p><br>
          <input type="radio" name="authorization" value="3"><p class="choice">知人/他社の紹介</p><br>
          <input type="radio" name="authorization" value="4"><p class="choice">他サイト、ブログ、掲示板の口コミ</p><br>
          <input type="radio" name="authorization" value="5"><p class="choice">本・雑誌・新聞</p><br>
          <input type="radio" name="authorization" value="6"><input type="text" name="other" value="その他" class="disable input_other">
        </div>
      <?= form_close(); ?>
    </section>

    <div class="footer-roomIndex">
      <a href="#">
        <div class="footer-logo">
           <img src="<?= base_url('static/images/component-02.png'); ?>">
        </div>
      </a>

      <div class="footer-menu">
          <ul>
              <li><a href="#">会社情報</a></li>
              <li><a href="#">実績</a></li>
              <li><a href="#">料金例</a></li>
              <li><a href="#">フロー</a></li>
              <li><a href="#">お問い合わせ</a></li>
          </ul>
      </div>

      <div class="footer-copyright">
        <p>©LUPINUS 2019 ALL RIGHT RESERVED</p>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="<?= base_url('static/js/common.js'); ?>"></script>
</body>
