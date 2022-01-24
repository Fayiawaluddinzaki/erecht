<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-21 14:35:48
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-21 17:40:10
 */

?>

<div class="slims-card slims-card--default">
	<div class="slims-card--header"><h4><?php echo __('Collection Type'); ?></h4></div>
		<div class="slims-colectiongmd">
			<?php
				$show2page = 10;
				$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
				$startpoint = ($page - 1)*$show2page;	
				//Get GMD Data From Database for Menu
				$coll_type_q_array = $dbs->query('SELECT coll_type_name FROM mst_coll_type LIMIT '.$startpoint.','.$show2page.'');
				$row_q = $dbs->query('SELECT COUNT(coll_type_id) AS row FROM mst_coll_type');
				$row_f = $row_q->fetch_assoc();
				$i = 0;
				echo "<ul>";
				while ($coll_type_d = $coll_type_q_array->fetch_row()) {
					$coll_type_src = str_replace(' ', '+', $coll_type_d[0]);
					$link_coll_type ='./index.php?title=&search=search&author=&subject=&isbn=&colltype='.$coll_type_src.'&gmd=0&location=0';
					echo "<li><a href='".$link_coll_type."'>".$coll_type_d[0]."</a></li>";
					$i++;
				}
				echo "</ul>";
				
				if (($row_f['row'] > $show2page)) {
				  echo '<div class="biblioPaging-content">'.simbio_paging::paging($row_f['row'], $show2page, 5).'</div>';
				} else { }
			?>
		</div>
</div>
	
	
	
	
