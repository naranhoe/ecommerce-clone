</div>
<footer class="col-md-12 text-center" id="footer">&copy; Copyright 2015-2016 Naranhoe's Boutique</footer>

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
