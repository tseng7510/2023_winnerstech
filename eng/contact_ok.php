<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain contactBox wow" aria-label="main" itemscope>

      <div class="innerBanner wow">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="pageTitleBox">
          <h1 class="title">FIND US</h1>
        </div>
      </div>


      <div class="mainBox innerPage wow">

        <div class="pageContent">
          <div class="container">
              
          
        <div class="contactOk">
          <div class="container">
            <div class="txt">
              <h2 class="title">THANK YOU<br />
                FOR YOUR MESSAGE</h2>
              <div class="info">Once we receive your message, we will contact you as soon as possible.
              </div>
            </div>
          </div>
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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">FIND US</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.formControl').focus(function() {
        $(this).addClass('focus')
      });
      $('.formControl').blur(function() {
        $(this).removeClass('focus')
      });
    });
  </script>
</body>

</html>
          