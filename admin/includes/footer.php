</div>
<footer class="col-md-12 text-center" id="footer">&copy; Copyright 2015-2016 Naranhoe's Boutique</footer>

<script>
function updateSizes() {
  var sizeString = '';
  for (var i = 0; i <= 12; i++) {
    if (jQuery('#size'+i).val() != '') {
      sizeString += jQuery('#size'+i).val()+':'+jQuery('#qty'+i).val()+',';
    }
  }
  jQuery('#sizes').val(sizeString);
}

function get_child_options(){
  var parentID = $('#parent').val();
  jQuery.ajax({
    url: '/admin/parsers/child_categories.php',
    type: 'POST',
    data: {parentID : parentID},
    success: function(data){
      jQuery('#child').html(data);
    },
    error: function(){alert("Something went wrong with the child options.")},
  });
}
  $(function(){
    $('select[name="parent"]').change(get_child_options);
  });
</script>

</body>
</html>
