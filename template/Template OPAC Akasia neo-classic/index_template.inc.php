<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-12 18:45:37
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-22 19:23:00
 * Rebuild by Erwan Setyo Budi (erwansetyobudi.librarian@gmail.com)
 */

/*
=========================
Be sure that this file not accessed directly
=========================
*/
if (!defined('INDEX_AUTH')) {
  die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
  die("can not access this file directly");
} 


/* 
=========================
Define current public template directory
=========================
*/
define('CURRENT_TEMPLATE_DIR', $sysconf['template']['dir'].'/'.$sysconf['template']['theme'].'/');

/* 
=========================
Load config template
=========================
*/
include 'tinfo.inc.php';

/* 
=========================
Load custome function
=========================
*/
include 'function.php';

/* 
=========================
Load header
- open html tag
- head tag
- open body tag
=========================
*/

include 'part/header.php';
/* 
=========================
Load content
=========================
| You can change the layout of template part
| by change/move/remove structure of load content part
*/
/*include 'part/content/slide.php';*/
include 'part/content/library-name.php';
/*include 'part/content/nav.php';*/

// open row for grouping
include 'part/content/row_open.php';

include 'part/main-content.php';
include 'part/sidebar.php';
// close row
include 'part/content/row_close.php';

//include 'part/content/footer.php';

/* 
=========================
Load footer
- close body tag
- close html tag
=========================
*/

include 'part/footer.php';

?>

	
<script>
$(document).ready(function()
{
  $('#keyword').keyup(function(){
    $('#title').val();
    $('#title').val($('#keyword').val());
  });

  $('#title').keyup(function(){
    $('#keyword').val();
    $('#keyword').val($('#title').val());
  });

  $('#advSearchForm input').attr('autocomplete','off');
  $('#title').attr('style','');

  $('#show_advance').click(function(){
    if ($("#advance-search").is(":hidden"))
    {
      $("#advance-search").slideDown('normal');
      $('#simply-search').slideUp('normal');
    } else {
      $("#advance-search").slideUp('normal');
      $('#simply-search').slideDown('normal');
    }
  });

  $('#title').keypress(function(e){
    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
      this.form.submit();
    }
  });

  $(window).load(function () {
    $('#keyword').focus();
  });

  function mycarousel_initCallback(carousel)
  {
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
      carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
      carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
      carousel.stopAuto();
    }, function() {
      carousel.startAuto();
    });
  };

  jQuery('#topbook').jcarousel({
      auto: 5,
      wrap: 'last',
      initCallback: mycarousel_initCallback
  });

  jQuery('.container .item .detail-list, .coll-detail .title, .abstract, .coll-detail .controls').highlight(<?php echo $searched_words_js_array; ?>);

});
</script>

