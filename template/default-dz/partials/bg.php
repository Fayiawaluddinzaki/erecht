<!-- Background 
============================================= -->
<div class="s-background animated fadeIn">

  <!-- Gradient Effect 
  ============================================= -->
  <div class="gradients">
    <?php if($sysconf['template']['run_gradient_animation']) : ?>
      <div class="green"></div>
      <div class="beach"></div>
      <div class="mint"></div>
      <div class="purple"></div>
      <div class="default"></div>
      <div class="pink current"></div>
    <?php endif; ?>
    <div class="<?php echo $sysconf['template']['default_gradient'] ?>"></div>
  </div>


  <?php if($sysconf['template']['background_mode'] == 'video') : ?>
    <video loop autoplay muted>
      <source src='<?php echo $sysconf['template']['dir']; ?>/default/video/bg.mp4' type='video/mp4' />
      Your browser does not support the video tag.
    </video>
  <?php elseif($sysconf['template']['background_mode'] == 'image') : ?>
      <script>
          $(document).ready(function () {
              $(function() {
                  $('body').vegas({
                      slides: [
                          { src: "<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/1.jpg" },
                          { src: "<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/2.jpg" },
                          { src: "<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/3.jpg" },
                          { src: "<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/4.jpg" }
                      ],
                      firstTransition: 'fade',
                      firstTransitionDuration: 2000,
                      transition: 'zoomOut',
                      transitionDuration: 2500,
                      shuffle: true,
                      delay: 7000,
                      overlay: "<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/overlays/04.png"
                  });
              });
          })
      </script>
  <?php else: ?>
    <div class="s-background-none"></div>
  <?php endif; ?>

</div>

<?php 

/**
 * Running this animation may need high memory
 * Please make sure your computer has high performance
 * Use with your own risk
 */
if($sysconf['template']['run_gradient_animation']) : 
?>
<script>
$(document).ready(function(){

    // Animate background color
    // ============================================
    var bg = $('.gradients');
    function fade() {
      var divs = bg.children();
      $(".current").transition({opacity: 1}, 5000, 'linear', function() {
        $('.current').removeClass('current');
        firstDiv = divs.first();
        firstDiv.addClass('current').css({opacity: 0});
        firstDiv.appendTo(bg);
        fade();
      });
    }
    fade();  
});
</script>
<?php endif; ?>