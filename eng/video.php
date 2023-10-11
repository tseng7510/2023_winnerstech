<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/support.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper videoPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain videoBox wow" aria-label="main" itemscope>

      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_video.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">VIDEO</h1>
        </div>
      </div>


      <div class="mainBox innerPage wow">

        <div class="pageContent video">
          <div class="container">

            <div class="listBox">

              <? for ($i = 0; $i < 5; $i++) { ?>
                <div class="item wow fadeInUp">
                  <div class="picBox">
                    <div class="pic"><iframe src="https://www.youtube.com/embed/lJl9iNyxotw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                  </div>
                  <div class="infoBox">
                    <h2 class="title">High Quality Circular Saw Grinder Keeps Your Circular Saw Blades Precise And Sharp</h2>
                  </div>
                </div>
              <? } ?>

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
              <span itemprop="name">Support</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Videos</span>
              <meta itemprop="position" content="3">
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