<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain productsBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">Products Category</h1>
          <div class="subTitle">Pursuing Excellence - Winning Respect</div>
          <div class="description">Taiwan Winner has introduced AP & APC series Tapping/Drilling machine to the worldwide market with the leading brand of “Winner”, are extremely popular among users since 2008.</div>
        </div>
      </div>
      <div class="mainBox innerPage wow">

        <div class="pageContent products">
          <div class="container">

            <div class="listBox">
              <? for ($i = 0; $i < 4; $i++) { ?>
                <div class="item wow fadeInUp">
                  <a href="products_list.php">
                    <div class="pic"><img src="../images/in/products_list.jpg" alt=""></div>
                    <div class="infoBox">
                      <h2 class="title">EMA-500 CNC Circular Saw Blade Machine 3A</h2>
                      <div class="description">Taiwan Winner has introduced AP & APC series Tapping/Drilling machine to the worldwide market with the leading brand of “Winner”, are extremely popular among users since 2008.</div>
                      <div class="more">EXPLORE</div>
                    </div>
                  </a>
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
              <span itemprop="name">Products</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>