<?php
/*
	Hezecom Responsive Gallery, Portfolio and Slider Manager
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014 ALL RIGHTS RESERVED
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
	*/
?>

<div class="heze-table">
	<div class="col-lg-12">
   
	<div class="panel panel-default">
  <div class="panel-heading">
  <h3 class="panel-title"><i class="fa fa-reorder"></i> <strong>General Settings</strong></h3></div>
  <div class="panel-body pformmargin">
 <?php if(get('view')){?>
 <form action="libraries/settings.php?view=yes" method="post"  name="form2" id="msgSend" role="form">
 <?php }else{?>
 <form action="libraries/settings.php" method="post"  name="form2" id="msgSend" role="form">
 <?php }?>
      <fieldset>
	
	<div id="output"></div>
    <div class="row">
    
    <div class="col-md-6">
	<h3>Database Settings</h3>      
	 <div class="form-group">
          <label class="control-label sr-only" for="host">HOST</label>
          <div class="input-group">
          <div class="input-group-addon left">HOST</div>
          <input id="host" name="host" class="form-control" type="text" value="<?php echo LOCALHOST;?>" required />
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label sr-only" for="dbname">DATABASE NAME</label>
          <div class="input-group">
          <div class="input-group-addon left">DATABASE NAME</div>
          <input id="dbname" name="dbname" class="form-control" type="text" value="<?php echo DB_NAME;?>" />
        </div>
        </div>

        <div class="form-group">
        <label class="control-label sr-only" for="username">USERNAME</label>
        <div class="input-group">
        <div class="input-group-addon left">USERNAME</div>
        <input id="username" class="form-control" name="username" placeholder="username" type="text" value="<?php echo DB_USERNAME;?>" />
        </div>
        </div>
        
        <div class="form-group">
          <label class="control-label sr-only" for="password">PASSWORD</label>
          <div class="input-group">
          <div class="input-group-addon left">PASSWORD</div>
          <input id="password" name="password" class="form-control" type="text" value="<?php echo DB_PASSWORD;?>" />
          </div>
          </div>
          
        <div class="form-group">
        <label class="control-label sr-only" for="dbtype">DATABASE TYPE</label>
        <div class="input-group">
        <div class="input-group-addon left">DATABASE TYPE</div>
        <input id="dbtype" class="form-control" name="dbtype" type="text" value="<?php echo DB_TYPE;?>" readonly="readonly" />
        </div>
        </div>

       <input type="hidden" value="Normal" name="pgtype">
          
         
   
 </div><!--/col-md-6-->    
    
    <div class="col-md-6">
    <h3>Display Settings</h3> 
    
    <div class="form-group">
          <label class="control-label sr-only" for="ptitle">PROJECT TITLE</label>
          <div class="input-group">
          <div class="input-group-addon left">PROJECT TITLE</div>
          <input id="ptitle" name="ptitle" class="form-control" type="text" value="<?php echo H_TITLE;?>" />
          </div>
          </div>
          
     <div class="form-group">
          <label class="control-label sr-only" for="recordsp">RECORDS TO DISPLAY PER PAGE</label>
          <div class="input-group">
          <div class="input-group-addon left">RECORDS TO DISPLAY PER PAGE</div>
          <input id="recordsp" name="recordsp" class="form-control" type="text" value="<?php echo RECORD_PER_PAGE;?>" />
          </div>
          </div>
             
   <div class="form-group">
          <label class="control-label sr-only" for="slidersize">SLIDER IMAGE SIZE </label>
           <div class="input-group">
          <div class="input-group-addon left">SLIDER IMAGE WIDTH SIZE</div> 
         
   <input id="slidersize" name="slidersize" class="form-control" type="text" value="<?php echo SLIDER_IMAGE_WIDTH;?>" />
   </div>
   </div>
   
  
   <input id="thumbsize" name="thumbsize" type="hidden" value="100" />
         
   		 <div class="form-group">
          <label class="control-label sr-only" for="adminuser">IMAGE SIZE </label>
         
          <div class="input-group-addon left">IMAGE SIZE</div> 
          <div class="row">
  <div class="col-lg-4">
  <div class="input-group">
        <div class="input-group-addon left">BIG</div>
   <input id="bigsize" name="bigsize" class="form-control input-sm" type="text" value="<?php echo BIG_IMAGE_WIDTH;?>" />
   </div>
   </div>
   
   <div class="col-lg-4">
   <div class="input-group">
   <div class="input-group-addon left">THUMB</div>
   <input id="thumbsize" name="thumbsize" class="form-control  input-sm" type="text" value="<?php echo THUMB_IMAGE_WIDTH;?>" />
          </div>
          </div>
          </div>
   </div> 
  
   
   <div class="form-group">
    <label class="control-label sr-only" for="frename">UPLOAD FILE RENAME </label>
           <div class="input-group">
          <div class="input-group-addon left">UPLOAD FILE RENAME</div> 
	<select name="frename" id="frename" class=" form-control styler choz">
	<option value="<?php if(FILE_RENAME==true)echo 'true'; else echo 'false' ;?>"><?php if(FILE_RENAME==true)echo 'Enabled'; else echo 'Disabled' ;?></option>
    <option value="true">Enabled</option>
    <option value="false">Disabled</option>
	</select>
	</div>
    </div>  
 
    </div><!--/com-md-6-->
 
	</div><!--/row-->
     
     <div class="row"> 
     <div class="col-md-12">        
    <div class="control-group"><br />
    <?php if(get('view')){?>
    <button type="submit" name="button" class="btn btn-lg btn-primary signup-btn" id="msgButton">Update Settings</button>
    <?php }else{?>
    <button type="submit" name="button" class="btn btn-lg btn-primary signup-btn" id="msgButton">Install</button>
    <?php }?>
    </div>
    </div>
    </div>
    </fieldset>
    </form>

</div>
</div>
</div>
</div>