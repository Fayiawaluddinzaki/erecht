<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-24 10:40:47
 * Modified by:   Erwan Setyo Budi (erwans818@gmail.com)
  
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

<div class="slims-container slims-visitor slims">
  <div class="slims-row">
    <div class="slims-2"></div>
    <div class="slims-13">
	<!--
	<img class="slider" src='<?php echo $sysconf['template']['dir']; ?>/neo-classic/img/4.jpg'/>
    <img class="slider" src='<?php echo $sysconf['template']['dir']; ?>/neo-classic/img/3.jpg'/>
    <img class="slider" src='<?php echo $sysconf['template']['dir']; ?>/neo-classic/img/2.jpg'/>
    <img class="slider" src='<?php echo $sysconf['template']['dir']; ?>/neo-classic/img/1.jpg'/>
	-->
    <div class="slims-card slims-card--default slims-card--expand">
		<div class="slims-card--header neo">
			<img src="<?php echo CURRENT_TEMPLATE_DIR; ?>img/head_libname.png">
		<div  class="libname">
          <h1><a class="brand" href="index.php"><?php echo $sysconf['library_name']; ?></h1>
		  <h5><?php echo $sysconf['library_subname']; ?></h5></div>
		  
			<!-- icon kiri start-->
			<div class="facebook"><a class="news--photomap"   title="Facebook" target="blank" href="https://www.facebook.com/groups/senayan.slims/"><img  src="./template/neo-classic/img/fb.png"/></a></div>
			<div class="twitter"><a class="news--photomap"   title="Twitter" target="blank" href="https://twitter.com/slims_official"><img  src="./template/neo-classic/img/twitter.png"/></a></div>
			<div class="home"><a class="news--photomap"   title="Home" href="index.php"><i class="material-icons  md-36 orange600">home</i></a></div>
			<!-- icon kiri end-->
		  
			<!-- icon kanan start-->
			<div class="visitoricon"><a class="news--photomap"   target="blank" title="Visitor Counter"  href="index.php?p=visitor"><i class="material-icons  md-36 orange600">assignment_ind</i></a></div>
			<div class="pustakawan"><a class="news--photomap"   title="Librarian"  href="index.php?p=librarian"><i class="material-icons  md-36 orange600">local_library</i></a></div>
			<div class="searchhelp"><a class="news--photomap"   title="Help on Search"  href="index.php?p=help"><i class="material-icons  md-36 orange600">help</i></a></div>
			<div class="loginlibrarian"><a class="news--photomap"   title="Librarian LOGIN"  href="index.php?p=login"><i class="material-icons  md-36 orange600">lock_open</i></a></div>
			<!-- icon kanan End-->
		  
			<!-- icon bahasa start-->
			<div class="idlanguage"><a class="news--photomap"   title="Indonesian"  href="index.php?select_lang=id_ID"><img  src="./template/neo-classic/img/id.png"/></a></div>
			<div class="enlanguage"><a class="news--photomap"   title="English"  href="index.php?select_lang=en_US"><img  src="./template/neo-classic/img/en.png"/></a></div>
			<!-- icon bahasa end-->
			  
			<div class="slims-visitor--photolibname"><a class="brand" href="index.php?p=libinfo"><img title="Library Information" id="visitorCounterPhoto" src="./template/neo-classic/img/logo.png"/></div>
			<div class="maper"><a class="maper--photomap" target="blank"  title="Library Location" href="index.php?p=peta"><img  src="./template/neo-classic/img/map.png"/></a></div>
			<div class="news"><a class="news--photomap"   title="Library News" href="index.php?p=news"><img  src="./template/neo-classic/img/news.png"/></a></div>
			<div class="slims-visitor--photobtn"><a class="slims-visitor--photmemberarea" title="Member Area" href="index.php?p=member"><img  src="./template/neo-classic/img/memberarea.png"/></a></div>
		</div>
		<div class="slims-card--body">
			<div   class="info">
				<?php 
		 
					$content = $dbs->query('SELECT content_id,content_title,content_path FROM content WHERE
						is_news IS NOT NULL ORDER BY last_update LIMIT 0,5');
					$a = '<ul id="listticker">';
					  foreach ($content as $key) {
						$a .= '<li>
						<a>NEWS :</a>&nbsp&nbsp
						<a class="berita" href="index.php?p='.$key['content_path'].'">'.$key['content_title'].'</a>
						</li>';
					}
					$a .= '</ul>';
					echo $a;
				?>
			</div>
		</div>
</footer>

    </div>
  </div>
</div>
</div>

<style type="text/css">
.berita{
  color:white !important;
}
.berita:hover{
  text-decoration: underline !important;
}
#listticker{
  background-color: rgba(176, 209, 225, 0.65);
  height:50px;
  overflow:hidden;
  padding-bottom: 13px;
}
#listticker li{
  padding:15px;
  list-style:none;
}
#listticker .news-text{
  display:block;
  font-size:11px;
  margin-top:2px;
}
ul{
  margin-bottom: 0px; 
}
</style>

<script type="text/javascript">
$(document).ready(function(){ 
  var first = 0;
  var speed = 500;
  var pause = 6000;
  
    function removeFirst(){
      first = $('ul#listticker li:first').html();
      $('ul#listticker li:first')
      .animate({opacity: 0}, speed)
      .fadeOut('slow', function() {$(this).remove();});
      addLast(first);
    }
    
    function addLast(first){
      last = '<li style="display:none">'+first+'</li>';
      $('ul#listticker').append(last)
      $('ul#listticker li:last')
      .animate({opacity: 1}, speed)
      .fadeIn('slow')
    }
  
  interval = setInterval(removeFirst, pause);
});</script>
