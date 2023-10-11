<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/media.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain downloadBox" aria-label="main" itemscope>

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
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Downloads</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox innerPage">

        <div class="pageTitle">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">Downloads</h1>
            <div class="info wow fadeInUp" data-wow-delay="0.2s">Check back often as we will continue to add helpful content. You can always find detailed information on a variety of topics in the Okuma Knowledge Center.</div>
          </div>
        </div>

        <div class="download">
          <div class="container">

            <div class="listBox">

              <? for ($i = 0; $i < 12; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <div class="picBox">
                    <div class="pic"><img src="../images/in/download.jpg" alt=""></div>
                  </div>
                  <div class="txtBox">
                    <div class="title">EMA-500 CNC Circular Saw Blade Machine 3A</div>
                    <a href="#" class="downloadBtn">Downloads</a>
                  </div>
                </div>
              <? } ?>

            </div>

          </div>
        </div>

      </div>
    </main>
    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>