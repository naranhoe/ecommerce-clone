<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Naranhoe's Boutique</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Top Nav Bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <a href="index.php" class="navbar-brand">Naranhoe's Boutique</a>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Shirts</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Shoes</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <div id="headerWrapper">
      <div id="back-flower"></div>
      <div id="logotext"></div>
      <div id="for-flower"></div>
    </div>

    <div class="container-fluid">
      <!-- Left Sidebar -->
      <div class="col-md-2">Left Side Bar</div>

      <!-- Main Content -->
      <div class="col-md-8">
        <div class="row">
          <h2 class="text-center">Featured Products</h2>
          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="/images/products/men4.png" alt="Levis Jeans" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>
        </div>
      </div>

      <!-- Right Side Bar -->
      <div class="col-md-2">Right Side Bar</div>
    </div>

    <script>
      $(function(){
        $(window).scroll(function(){
          var vScroll = $(this).scrollTop();
          var logotextPix = console.log(vScroll);
          $('#logotext').css({
            "transform" : "translate(0px, "+ vScroll/2 +"px)"
          });

          var vScroll = $(this).scrollTop();
          $('#back-flower').css({
            "transform" : "translate("+ vScroll/5 +"px, -"+vScroll/12+"px)"
          });

          var vScroll = $(this).scrollTop();
          $('#for-flower').css({
            "transform" : "translate(0px, -"+vScroll/2+"px)"
          });
        });
      });
    </script>
  </body>
</html>
