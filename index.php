<?php
  include 'includes/head.php';
  include 'includes/navigation.php';
?>

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
            <img src="/images/products/men4.png" alt="Levis Jeans" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
            <p class="price">Our Price: $34.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Hollister Shirt</h4>
            <img src="/images/products/men1.png" alt="Hollister Shirt" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$24.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3" id="boys-hoodie">
            <h4>Boys Hoodie</h4>
            <img src="/images/products/boys1.png" alt="Boys Hoodie" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$34.99</s></p>
            <p class="price">Our Price: $24.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Fancy Shoes</h4>
            <img src="/images/products/women6.png" alt="Fancy Shoes" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$69.99</s></p>
            <p class="price">Our Price: $49.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Girls Dress</h4>
            <img src="/images/products/women4.png" alt="Girls Dress" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$34.99</s></p>
            <p class="price">Our Price: $22.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Womans Shirt</h4>
            <img src="/images/products/women7.png" alt="Womans Shirt" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$34.99</s></p>
            <p class="price">Our Price: $24.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Womans Skirt</h4>
            <img src="/images/products/women3.png" alt="Womans Skirt" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$29.99</s></p>
            <p class="price">Our Price: $19.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>

          <div class="col-md-3">
            <h4>Purse</h4>
            <img src="/images/products/women5.png" alt="Purse" class="img-thumb" />
            <p class="list-price text-danger">List Price: <s>$89.99</s></p>
            <p class="price">Our Price: $59.99</p>
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
          </div>
        </div>
      </div>

      <!-- Right Side Bar -->
      <div class="col-md-2">Right Side Bar</div>
    </div>

    <footer class="text-center" id="footer">&copy; Copyright 2015-2016 Naranhoe's Boutique</footer>

    <!-- Details Modal-->
    <div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> &times;</span>
            </button>
            <h4 class="modal-title text-center">Levis Jeans</h4>
          </div>

          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <div class="center-block">
                    <img src="/images/products/men4.png" alt="Levis Jeans" class="details img-responsive"/>
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4>Details</h4>
                  <p>These jeans are amazing, they are straight leg, fit great! Get a pair while they last!</p>
                  <hr>
                  <p>Price: $34.99</p>
                  <p>Brand: Levis</p>
                  <form action="add_cart.php" method="post">
                    <div class="form-group">
                      <div class="col-xs-3">
                        <label for="quantity">Quantity:</label>
                        <input type="text" class="form-control" id="quantity" name="quantity">
                      </div>
                      <p>Aviailable: 3</p>
                      <br>
                    </div>
                    <div class="form-group">
                      <label for="size">Size:</label>
                      <select class="form-control" name="size" id="size">
                        <option value=""></option>
                        <option value="28">28</option>
                        <option value="32">32</option>
                        <option value="34">34</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-warning" type="sumbit"><span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>
        </div>
      </div>
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
