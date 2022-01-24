<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-12 18:46:55
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-23 20:28:39
 */

if (!(isset($_GET['p']) && ($_GET['p'] == 'login' || $_GET['p'] == 'visitor'))) {
?>

	
	<!-- FOOTER START -->
	
	<footer>
		<div class="foo foo_left">
			<div class="foo_iner_center">
					<!-- ISI INFORMASI Pertama Start-->
				<h4><b>Jurnal Elektronik</b></h4>
	
					<ul>
                    <li style="list-style-type: none;"><a target="blank" href="http://www.ncbi.nlm.nih.gov/pubmed">PubMed</a></li>
                     <li style="list-style-type: none;"><a target="blank" href="http://link.springer.com/">Springer Link</a></li>
                     <li style="list-style-type: none;"><a target="blank" href="http://www.clinicalkey.com/">ClinicalKey</a></li>
                     <li  style="list-style-type: none;"><a target="blank" href="http://mhebooklibrary.com/bookshelf">McGraw-Hill e-Book Library</a></li>
                        </ul>
           <!-- ISI INFORMASI Pertama End -->
			</div>
		</div>
	<footer>
		
		<div class="foo foo_center">
			<div class="foo_iner_center">
					<!-- ISI INFORMASI Kedua Start  -->
				<h4><b>Tentang Kami</b></h4>
            <p>Perpustakaan Kami merupakan perpustakaan...</p>
            <a href="index.php?p=libinfo">Baca selanjutnya</a>
			<!-- ISI INFORMASI Kedua End  -->
			</div>
		</div>
	</footer>
	<footer>	
		<div class="foo foo_right">
			<div class="foo_iner_center">
					<!-- ISI INFORMASI Ketiga Start -->
				<h4><b>Kontak Kami</b></h4>
            <p><strong><?php echo $sysconf['library_name']; ?></strong><br><?php echo $sysconf['library_subname']; ?></p>
            <ul class="list">
              <li style="list-style-type: none;"><i class="material-icons">call</i> Phone. (021) xxxxxx</li>
              <li style="list-style-type: none;"><i class="material-icons">language</i> Site: <a target="blank" href="http://slims.web.id/web/">http://slims.web.id/web/</a></li>
              <li style="list-style-type: none;"><i class="material-icons">email</i> Email: <a target="blank" href="gmail.com">gmail.com</a></li>
              <li style="list-style-type: none;"><i class="material-icons">group</i> Mailing List:<a target="blank" href="googlegroups.com"> @googlegroups.com</a></li>
            </ul>
			<!-- ISI INFORMASI Ketiga End -->
			</div>
		</div>
	</footer>
	<div class="row text-center text-12">
          &copy; Template by "Ido Alit" Modified by <i><a target="blank" href="https://www.facebook.com/erwan.setyobudi">Erwan Setyo Budi</i>
    </div
<!-- FOOTER End -->
<?php } ?>

</div> <!-- // wraper end -->

<script>

	<?php if(isset($_GET['search']) && ($_GET['keywords']) != '') : ?>
  	$('.biblioRecord .detail-list, .biblioRecord .title, .biblioRecord .abstract, .biblioRecord .controls').highlight(<?php echo $searched_words_js_array; ?>);
  	<?php endif; ?>

    <?php if(isset($_GET['p']) && ($_GET['p']) == 'librarian') : ?>
    var noLibrarian = $('.librarian-list p:first').text();
    if ( noLibrarian === 'No librarian data yet') {
        $('.librarian-list p:first').addClass('slims-card slims-card--warning');
    }
    <?php endif; ?>

    $(document).ready(function () {
        var eHeight = $('.slims-vertical').height();
        var docHeight = $(document).height();
        var eMarginTop = ( docHeight / 2 ) - ( eHeight / 2 );

        // vertical element
        $('.slims-vertical').css('margin-top', eMarginTop);

    });

</script>
</body>
</html>
