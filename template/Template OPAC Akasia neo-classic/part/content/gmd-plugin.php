<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-21 14:35:48
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-21 17:40:10
 */

?>

<div class="slims-card slims-card--default">
	<div class="slims-card--header">
		<h4><?php echo __('Daftar Koleksi'); ?></h4>
	</div>
	<div class="slims-colectiongmd">
	
		
			<?php
			$show2page = 10;
			$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
			$startpoint = ($page - 1)*$show2page;	
			//Get GMD Data From Database for Menu
			$gmd_q_array = $dbs->query('SELECT gmd_name FROM mst_gmd LIMIT '.$startpoint.','.$show2page.'');
			$row_q = $dbs->query('SELECT COUNT(gmd_id) AS row FROM mst_gmd');
			$row_f = $row_q->fetch_assoc();
			$i = 0;
			echo "<ul>";
			while ($gmd_d = $gmd_q_array->fetch_row()) {
				$gmd_src = str_replace(' ', '+', $gmd_d[0]);
				$link_gmd ='./index.php?title=&search=search&author=&subject=&isbn=&gmd='.$gmd_src.'&colltype=0&location=0';
				echo "<li><a href='".$link_gmd."'>".$gmd_d[0]."</a></li>";
				$i++;
			}
			echo "</ul>";
			
			if (($row_f['row'] > $show2page)) {
			  echo '<div class="biblioPaging-content">'.simbio_paging::paging($row_f['row'], $show2page, 5).'</div>';
			} else { }
			?>
			</div>
	</div>
	
	
	
	
