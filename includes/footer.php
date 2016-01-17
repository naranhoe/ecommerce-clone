</div>
<footer class="col-md-12 text-center" id="footer">&copy; Copyright 2015-2016 Naranhoe's Boutique</footer>

<script>
  function updateSizes(){
    alert("Update sizes.");
  }

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

  function detailsmodal(id){
    var data = {"id" : id};
    jQuery.ajax({
      url : 'includes/detailsmodal.php',
      method : "post",
      data : data,
      success: function(data){
        jQuery('body').append(data);
        jQuery('#details-modal').modal('toggle');
      },
      error: function(){
        alert("Something went wrong!");
      }
    });
  }

</script>
</body>
</html>
