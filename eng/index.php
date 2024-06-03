<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css" async>
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>
    <main class="siteMain" aria-label="main" itemscope>
      <div class="banner wow">
        <div class="listBox">
          <div class="item"><img src="../images/index/banner.jpg" alt=""></div>
          <div class="item"><img src="../images/index/banner.jpg" alt=""></div>
        </div>
      </div>

      <div class="mainBox wow">
        <section class="productsBox wow">
          <div class="container">
            <div class="listBox">
              <? for ($i = 0; $i < 3; $i++) { ?>
                <div class="item wow fadeInRight">
                  <a href="#">
                    <div class="pic"><img src="../images/index/products.png" alt=""></div>
                    <h3 class="title">Machining Centers</h3>
                    <div class="more">EXPLORE</div>
                  </a>
                </div>
              <? } ?>
            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="container">
            <div class="infoBox">
              <h1 class="title wow fadeInLeft" data-wow-delay="0s">Pride in the Taiwan Winner brand</h1>
              <div class="description wow fadeInLeft" data-wow-delay="0.2s">Taiwan Winner has introduced AP & APC series Tapping/Drilling machine to the worldwide market with the leading brand of “Winner”, are extremely popular among users since 2008.</div>
              <a href="about.php" class="more wow fadeInLeft" data-wow-delay="0.4s">VIEW MORE</a>
            </div>
            <div class="pic wow fadeInRight" data-wow-delay="0.6s"><img src="../images/index/about.jpg" alt=""></div>
          </div>
        </section>

        <section class="industriesBox wow">
          <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay="0s">INDUSTRIES</h2>
            <div class="description wow fadeInUp" data-wow-delay="0.2s">Winner Group assures to offer high quality products and sincere service to be your best choice.</div>
          </div>
          <div class="pic"><img src="../images/index/industries.jpg" alt="" class="wow fadeInUp" data-wow-delay="0.4s"></div>
          <div class="container">
            <ul>
              <li>
                <div class="item">
                  <a href="solution.php">
                    <div class="icon">
                      <img src="../images/index/industries_icon01.svg" alt="">
                    </div>
                    <div class="title">Transportation</div>
                  </a>
                </div>
              </li>
              <li>
                <div class="item">
                  <a href="solution.php">
                    <div class="icon">
                      <img src="../images/index/industries_icon02.svg" alt="">
                    </div>
                    <div class="title">background</div>
                  </a>
                </div>
              </li>
              <li>
                <div class="item">
                  <a href="solution.php">
                    <div class="icon">
                      <img src="../images/index/industries_icon03.svg" alt="">
                    </div>
                    <div class="title">Aerospace</div>
                  </a>
                </div>
              </li>
              <li>
                <div class="item">
                  <a href="solution.php">
                    <div class="icon">
                      <img src="../images/index/industries_icon04.svg" alt="">
                    </div>
                    <div class="title">Parts Processing</div>
                  </a>
                </div>
              </li>
              <li>
                <div class="item">
                  <a href="solution.php">
                    <div class="icon">
                      <img src="../images/index/industries_icon05.svg" alt="">
                    </div>
                    <div class="title">Mold Making</div>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <section class="newsBox wow">
          <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay="0s">NEWS</h2>
            <div class="listBox">
              <? for ($i = 0; $i < 3; $i++) { ?>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="news_detail.php">
                    <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                    <div class="infoBox">
                      <time class="date">12 Aug 2022</time>
                      <div class="tag">Company News</div>
                      <div class="title">HIGH RIGIDITY ACCURACY</div>
                      <div class="description">Winner Group assures to offer high quality products and sincere ...</div>
                    </div>
                  </a>
                </div>
              <? } ?>
            </div>
            <a href="about.php" class="indexMore wow fadeInLeft" data-wow-delay="0.4s">VIEW MORE</a>
          </div>
        </section>

      </div>


    </main>
    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $('.banner .listBox').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      loop: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 6000,
      // appendArrows: $('.newsBox .titleBox .controlBox'),
      // prevArrow: '<button class="slick-prev" aria-label="Previous" type="button" title="Previous"></button>',
      // nextArrow: '<button class="slick-next" aria-label="Next" type="button" title="Next"></button>',
    });
  </script>

</body>

</html>