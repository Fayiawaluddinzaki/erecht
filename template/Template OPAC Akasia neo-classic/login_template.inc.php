<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-12 18:45:37
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-19 14:15:29
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

// visitor page
if ($_GET['p'] == 'visitor') {
    echo $main_content;
} else {

// login page
?>

<!-- <div class="slims-container">
    <div class="slims-row"> -->

        <div class="slims-4"></div>
        <div class="slims-4">
            <div class="slims-card slims-card--default slims-vertical">
                <div class="slims-card--header loginadmin">
				
      <a>
        <img src="<?php echo CURRENT_TEMPLATE_DIR; ?>img/head_libname.png">
      </a>
    </div>
    <div>
  </div>
</header>

<div class="main-content content-result"><div class="container"><div class="row">
  <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-login">
      <div class="panel-heading">

            
                <div class="slims-card--header">
        
        <?php echo __('Librarian LOGIN') ?>
      </div>
      <div class="panel-body">
        <div id="loginForm">
    <noscript>
        <div style="font-weight: bold; color: #FF0000;">Peramban Anda tidak mendukung <i>Javascript</i> atau <i>Javascript</i> tidak diaktifkan. Aplikasi tidak dapat dijalankan tanpa <i>Javascript</i>!<div>
    </noscript>
    <!-- Captcha preloaded javascript - start -->
            <!-- Captcha preloaded javascript - end -->
            
    <form action="index.php?p=login" method="post">
        <div class="slims-card slims-card--header">
          <label class="control-label" for="userName">Username</label>
          <input type="text" name="userName" autofocus id="userName" class="login_input form-control" />
          <p class="help-block">Masukan usesername yang sesuai</p>
        </div>
        <div class="slims-card--header">
        <div class="form-group label-floating">
          <label class="control-label" for="passWord">Password</label>
          <input type="password" name="passWord" class="login_input form-control" />
          <p class="help-block">Perhatikan apakah CAPS LOCK aktif</p>
        </div>
    <!-- Captcha in form - start -->
        <!-- Captcha in form - end -->

    <div class="marginTop">
    <input type="submit" name="logMeIn" value="Masuk" class="loginButton btn btn-raised btn-primary" />
    <input type="button" value="Home" class="homeButton btn btn-raised btn-default" onclick="javascript: location.href = 'index.php';" />
    </div>
    </form>
    </div>
<script type="text/javascript">jQuery('#userName').focus();</script>

      </div>
    </div>
  </div>
</div></div></div>

<?php

}
// include 'part/content/footer.php';

/* 
=========================
Load footer
- close body tag
- close html tag
=========================
*/
include 'part/footer.php';