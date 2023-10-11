<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsListPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain productsListBox wow" aria-label="main" itemscope>

      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_productslist.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">Promotion</h1>
        </div>
      </div>
      <div class="mainBox innerPage wow">


        <div class="pageContent productsList">
          <div class="container">
            <div class="listBox">

              <? for ($i = 0; $i < 12; $i++) { ?>
                <div class="item wow fadeInUp">
                  <a href="products_detail.php">
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/products.jpg" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="title">EMA-500 CNC Circular Saw Blade Machine 3A</div>
                      <div class="more">VIEW MORE</div>
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
              <span itemprop="name">Promotion</span>
              <meta itemprop="position" content="3">
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