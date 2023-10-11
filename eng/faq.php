<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/faq.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain faqBox wow" aria-label="main" itemscope>

      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_faq.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">FAQ</h1>
        </div>
      </div>


      <div class="mainBox innerPage wow">

        <div class="pageContent faq">
          <div class="container">

            <div class="listBox">

              <? for ($i = 0; $i < 6; $i++) { ?>
                <div class="item">
                  <button class="title qBox" role="button">What is the main industry that use circular saw blade grinding machine?</button>
                  <div class="txtBox aBox">
                    <div class="txt">Circular saw grinding machine can be applied on many filed, such as auto car, sports equipment, bicycle, tube manufacture, tube and other processing plant, grinding shop or others who want to increase production capacity.</div>
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
              <span itemprop="name">FAQ</span>
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
  <script>
    qa('.qBox', '.aBox')
  </script>
</body>

</html>