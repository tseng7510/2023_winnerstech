<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/solution.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper solutionPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain solutionBox wow" aria-label="main" itemscope>
      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_solution.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">SOLUTIONS</h1>
        </div>
      </div>
      <div class="mainBox innerPage wow">


        <div class="pageContent solution">
          <div class="container">

            <div class="solutionTop">
              <div class="item">
                <div class="icon">
                  <img src="../images/index/industries_icon03.svg" alt="">
                </div>
              </div>
              <div class="infoBox">
                <h2 class="title">Aerospace</h2>
                <div class="description">Taiwan Winner designs the most appropriate machines to meet the customers’ request. For full range of VMC-A/D/E/Lseries vertical machining centers have been completed by sizing from 650mm up to 2100mm for X-axis travel. The machines has already remarkably enhanced production efficiency and shall be particularly designed for high accuracy & superior performance work pieces, and widely applying for job-shop, die molding, as well as the industries of auto parts, 3C components, Medical equipment, aeroparts …& etc</div>
              </div>
            </div>


            <div class="subTitle wow fadeInUp">FEATURED PRODUCTS</div>

            <div class="listBox">
              <? for ($i = 0; $i < 3; $i++) { ?>
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
              <span itemprop="name">Solutions</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Aerospace</span>
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