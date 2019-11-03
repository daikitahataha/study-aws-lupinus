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
              <a class="span_now" href="#"><li class="menu_normal">実績</li></a>
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

    <section id="detail-mv">
        <div class="detail-mv-tx">
          <h3>新宿御苑</h3>
          <p>東京都新宿区新宿御苑0-0-0</p>
        </div>
    </section>

    <section id="roomDetailcontent">
        <div class="roomDetailcontent-tx">
          <p>
              2019/00/00、戸建て、ADR３万円以上、LUPINUS内装
          </p>
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/patrick-perkins-18.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/jarek-ceborski-jn-1.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/patrick-perkins-18.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/jarek-ceborski-jn-1.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/patrick-perkins-18.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/jarek-ceborski-jn-1.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/patrick-perkins-18.png'); ?>">
        </div>

        <div class="roomDetailcontent-img">
          <img src="<?= base_url('static/images/jarek-ceborski-jn-1.png'); ?>">
        </div>

        <div class="detailArrows">
            <a class="detail-prev" href="#">
              <img src="<?= base_url('static/images/down-arrow-5.png'); ?>">
              <p>前へ<br><span>新宿御苑</span></p>
            </a>

            <a class="detail-next" href="#">
              <p>次へ<br><span>新宿御苑</span></p>
              <img src="<?= base_url('static/images/down-arrow-6.png'); ?>">
            </a>
        </div>
    </section>

    <section id="roomDetailinquiry">
      <div class="content02-inquiry forDetail">
          <p class="detail-inquiry-tx">
            ホテルの企画・開発・運営に関しては、<br>
            お気軽にお問い合わせください
          </p>
          <a href="#"><p class="content02-inquiry-button line">お問い合わせ</p></a>
      </div>
    </section>

    <div class="footer">
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
