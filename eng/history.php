<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain historyBox" aria-label="main" itemscope>

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
              <span itemprop="name">Company</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">History</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox innerPage">

        <div class="pageTitle">
          <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0s">History</h1>
            <div class="sub wow fadeInUp" data-wow-delay="0.2s">Our History is Your Future</div>
            <div class="info">By introducing newest products designed to solve our customers’ manufacturing problems, we’ve grown from the small saw blade sharpening machine company. Till now we are the global leader in CNC saw blade sharpening machine we are today.</div>
          </div>
        </div>

        <div class="history">
          <div class="container">
            <div class="listBox">
              <div class="item wow fadeInRight" data-wow-delay="0s">
                <time class="year">1996</time>
                <div class="txt">Founded and began manufacturing saw blade sharpening machine.<br /><img src="../images/in/news.jpg" alt=""></div>
              </div>
              <div class="item wow fadeInLeft" data-wow-delay="0.2s">
                <time class="year">2002</time>
                <div class="txt">Expanded our products line to circular knives grinder, End Mill Sharpener.<br /><img src="../images/in/news.jpg" alt=""></div>
              </div>
              <div class="item wow fadeInRight" data-wow-delay="0.4s">
                <time class="year">2010</time>
                <div class="txt">Moved to new factory.<br /><img src="../images/in/news.jpg" alt=""></div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>