<div class="heze-table">
	<div class="col-lg-12">
	<ul class="nav nav-tabs pull-right">
    
  
	<a href="<?php echo H_ADMIN;?>&view=hgallery&do=viewall&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>

	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i><?php echo LANG_CREATE_NEW;?> Gallery</h3></div>
  <div class="panel-body pformmargin">
  
	<div id="uploader">
		<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
	</div>
   
    <a href="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>" class="btn btn-primary">Refresh to start new upload</a>


<script type="text/javascript">
$(function() {
	
	// Setup html5 version
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : 'libraries/uploader/upload.php?catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>',
		max_file_count: <?php echo MAX_FILE_COUNT;?>,
		chunk_size: '1mb',
		dragdrop: true,
		
		filters : {
			// Maximum file size
			max_file_size : '<?php echo MAX_FILE_SIZE;?>',
			// Specify what files to browse for
			mime_types: [
				{title : "Supported Extensions", extensions : "<?php echo UPLOAD_SUPPORT_EXT;?>"},
			]
		},

		flash_swf_url : '<?php echo H_THEME;?>/uploader/Moxie.swf',
		silverlight_xap_url : '<?php echo H_THEME;?>/uploader/js/Moxie.xap'
	});

});
</script>

	
	</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->
	