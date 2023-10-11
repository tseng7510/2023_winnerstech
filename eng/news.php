<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain newsBox wow" aria-label="main" itemscope>

      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">NEWS</h1>
        </div>
      </div>

      <div class="mainBox innerPage">

        <div class="navList">
          <div class="container">
            <div class="item active"><a href="#">Company News</a></div>
            <div class="item"><a href="#">Exhibition</a></div>
            <div class="item"><a href="#">blog</a></div>
          </div>
        </div>

        <div class="pageContent news">
          <div class="container">

            <div class="listBox">

              <? for ($i = 0; $i < 9; $i++) { ?>
                <div class="item wow fadeInUp">
                  <a href="news_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="title">EMA-500 CNC Circular Saw Blade Machine 3A</div>
                      <time class="date">12 Aug 2022</time>
                      <div class="description">EYAN MACHINERY IN Taipei Manufacturing Technology Show 2012 will launch the new CNC saw blade sharpening machine EMC-500 4A, saw blade sharpening machine SU-850...</div>
                    </div>
                  </a>
                </div>
              <? } ?>

            </div>

            <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
              <ul class="pagination">
                <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                <li><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li class="active"><a href="#">03</a></li>
                <li><a href="#">04</a></li>
                <li><a href="#">05</a></li>
                <li class="controls"><a class="next" href="#" title="Next"></a></li>
              </ul>
            </div>

          </div>
        </div>

      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">News</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>