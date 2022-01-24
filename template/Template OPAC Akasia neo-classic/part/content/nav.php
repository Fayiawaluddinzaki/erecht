<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-12 19:55:37
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-24 10:40:47
 */

//set default index page
$p = 'home';

if (isset($_GET['p']))
{
 if ($_GET['p'] == 'libinfo') {
  $p = 'libinfo';
} elseif ($_GET['p'] == 'help') {
  $p = 'help';
} elseif ($_GET['p'] == 'member') {
  $p = 'member';
} elseif ($_GET['p'] == 'login') {
  $p = 'login';
} else {
  $p = strtolower(trim($_GET['p']));
}
}
?>

 	<div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12"></div>
    </div>
	<div class="slims-13">
  <div class="s-footer-content container"> 
    <div class="row">
      <div class="slims-row">
	  <div class="s-footer-tagline">

	</div>
		</div>
	  </div>
	  <div class="slims-row">
      <ul class="s-footer-menu">
        <li><a href="index.php?title=&author=&subject=&gmd=0&colltype=Textbook&location=0&search=search">Textbook</a></li>
        <li><a href="index.php?title=&author=&subject=&gmd=0&colltype=Reference&location=0&search=search">Reference</a></li>
        <li><a href="index.php?title=&author=&subject=&gmd=0&colltype=Fiction&location=0&search=search">Fiction</a></li>
        <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>
		<li><a href="index.php"><?php echo __('Home'); ?></a></li>
		<li><a target="_blank" href="https://www.facebook.com/groups/senayan.slims/">Facebook</a></li>
        <li><a target="_blank" href="https://twitter.com/slims_official">Twitter</a></li>
		<li class="page-wrapper">
		<li>
          <a href="index.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">more_vert</i></a>
          <ul class="dropdown-menu">
      <li><a href="index.php?p=visitor"><?php echo __('Visitor'); ?></a></li>
	<li><a href="index.php?p=news"><?php echo __('Library News'); ?></a></li>
    <li><a href="index.php?p=libinfo"><?php echo __('Library Information'); ?></a></li>
    <li><a target="_blank" href="index.php?p=peta" ><?php echo __('Library Location'); ?></a></li>
    <li><a href="index.php?p=member"><?php echo __('Member Area'); ?></a></li>
	<li><a href="index.php?p=librarian"><?php echo __('Librarian'); ?></a></li>
    <li><a href="index.php?p=help"><?php echo __('Help on Search'); ?></a></li>
    <li><a href="index.php?p=login"><?php echo __('Librarian LOGIN'); ?></a></li>
    <!-- <li><a href="index.php?p=slimsinfo"><?php echo __('About SLiMS'); ?></a></li> -->
	</ul>
	<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>
	<li>
	<li><?php echo __('Select Language'); ?>&nbsp&nbsp&nbsp
    <form class="navbar-form pull-right language" name="langSelect" action="index.php" method="get">
      <select name="select_lang" id="select_lang"  onchange="document.langSelect.submit();" class="form-search">
            <?php echo $language_select; ?>
      </select>
	</li>
		<!-- <form class="navbar-form pull-right language" name="langSelect" action="index.php" method="get">
          <span class="language-info"><?php echo __('Select Language'); ?></span>
          <select name="select_lang" id="select_lang"  onchange="document.langSelect.submit();" class="input-medium">
            <?php echo $language_select; ?> -->
          </select>
	  </div>
	  </li>
	  </nav>
	</div>
  </div>
</footer>