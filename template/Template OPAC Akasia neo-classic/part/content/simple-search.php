<?php
/**
 * @Author: ido_alit
 * @Date:   2015-11-15 16:12:37
 * @Last Modified by:   ido_alit
 * @Last Modified time: 2015-11-21 15:37:37
 */

?>

<div class="slims-15">
<div class="slims-card slims-card-- simple-search">
  <div class="slims-card slims-card--header">

      <h5><?php echo __('SEARCH'); ?></h5>
  
  <div>
	<form action="index.php" method="get" autocomplete="off">
    <div class="marquee down">
      <p class="s-search-info">
      <!--<?php echo __('start it by typing one or more keywords for title, author or subject'); ?>
      
      <?php echo __('use logical search "title=library AND author=robert"'); ?>
      <?php echo __('just click on the Search button to see all collections'); ?>
      -->
      </p>
    </div>
            <div id="simply-search">
              <div class="simply" >
                <form name="advSearchForm" id="simplySearchForm" action="index.php" method="get" class="form-search">
                  <div class="input-append">
                  <input type="hidden" name="search" value="search" />
                  <input type="text" name="keywords" id="keyword" placeholder="<?php echo __('start it by typing one or more keywords for title, author or subject'); ?>" lang="<?php echo $sysconf['default_lang']; ?>" x-webkit-speech="x-webkit-speech" class="input-xxlarge search-query" />
                               </div>
                                          <div class="row">
                            
                            <div class="pull-right">
                                <button type="reset" name="search" value="search" id="btn-search" class="slims-button slims-button--blue"><i class="material-icons md-18">cancel</i></button>
                            <button type="submit" name="search" value="search" id="btn-search" class="slims-button slims-button--blue"><i class="material-icons md-18"><i class="material-icons">search</i></i></button>
                            </div>
                  </div>
                </form>
              </div>
            </div>
			<!--modified by Erwan Setyo Budi (erwansetyobudi.librarian@gmail.com)-->
            <div id="advance-search" style="display:none;" >
              <form name="advSearchForm" id="advSearchForm" action="index.php" method="get" class="form-horizontal form-search">
                <div class="simply" >
                  <div class="input-append">
                  <input type="text" name="title" id="title" placeholder="<?php echo __('Title'); ?>" class="input-xxlarge search-query" />
                </div>
                <div class="advance">
                  <div class="row-fluid">
                    <div class="span5">
                      <div class="control-group">
                        <label class="control-label"><?php echo __('Author(s)'); ?></label>
                        <div class="controls">
                          <?php echo $advsearch_author; ?>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('Subject(s)'); ?></label>
                        <div class="controls">
                          <?php echo $advsearch_topic; ?>
                        </div>
                      </div>
					 
                  </div>
                  <div class="span6">

                      <div class="control-group">
                        <label class="control-label"><?php echo __('ISBN/ISSN'); ?></label>
                        <div class="controls">
                          <input type="text" name="isbn" />
                        </div>
                      </div>
                    </div>
                    <div class="span6">

                      <div class="control-group">
                      <label class="control-label"><?php echo __('GMD'); ?></label>
                      <div class="controls">
                        <select name="gmd"><?php echo $gmd_list; ?></select>
                      </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('Collection Type'); ?></label>
                        <div class="controls">
                          <select name="colltype"><?php echo $colltype_list; ?></select>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('Location'); ?></label>
                        <div class="controls">
                          <select name="location"> <?php echo $location_list; ?></select>
                        </div>
						<div class="slims-button-blue" id="btn-search">
						<button title="cancel" type="reset" name="search" value="search" id="btn-search" class="slims-button slims-button--blue"><i class="material-icons md-18">cancel</i></button>
                        <button title="search" type="submit" name="search" value="search" id="btn-search" class="slims-button slims-button--blue"><i class="material-icons md-18"><i class="material-icons">search</i></i></button>
                            </div>
						</div>
                      </div>

                    </div>
                  </div>
                <div class="clearfix"></div>
                </div>
              </form>
            </div>
       
        <div class="slims-button-blue" id="show_advance">
          <a title="Advanced Search" class="slims-button slims-button--blue" href="#"><i class="material-icons md-18">settings</i></a>
        </div>
		
        <!-- End Default Frontpage-->
<div id="fkbx-spch" tabindex="0" aria-label="Telusuri dengan suara" style="display: block;"></div>
</div>
 </form>
</div>
</div>