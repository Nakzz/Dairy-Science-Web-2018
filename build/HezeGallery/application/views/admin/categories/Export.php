
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
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	<?php
	ob_start();
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> Categories</p>';
	$excel.='<table border="1" cellspacing="0" width="100%" style="font-family:arial; font-size:14px;" cellpadding="5">
	<tr>
      <th>Created By</th>
      <th>Category Name</th>
      <th>Category Notes</th>
      <th>Category Type</th>
      <th>Cover Image</th>
      <th>Date Created</th>
      <th>Last Updated</th>
      <th>Last Updated By</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.UserName($rows->created_by).'</td>
	<td>'.$rows->category_name.'</td>
	<td>'.$rows->category_notes.'</td>
	<td>'.$rows->category_type.'</td>
	<td>'.$rows->coverimg.'</td>
	<td>'.$rows->date_created.'</td>
	<td>'.$rows->last_updated.'</td>
	<td>'.UserName($rows->last_updated_by).'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'categories_'.date('Y-m-d').'.doc';
	$filename2= 'categories_'.date('Y-m-d').'.xls';
	$pdf_output= 'categories_'.date('Y-m-d').'.pdf';
	if ($etype == 'word') {
	header("Content-type: application/msword");
	header("Content-Disposition: attachment; filename=$filename1");
	header("Pragma: no-cache");
	header("Expires: 0");
	print $excel;
	}
	elseif ($etype == 'excel') {
	header("Content-type: application/msexcel");
	header("Content-Disposition: attachment; filename=$filename2");
	header("Pragma: no-cache");
	header("Expires: 0");
	print $excel;
	}
	elseif ($etype == 'printer') {
	print'<title>'.H_TITLE.'</title>
	<script type="text/javascript">
	window.onload = function () {
		window.print();
	}
	</script>
	';
	print $excel;
	}
	elseif ($etype == 'PDF') {
	HezecomPDF($excel, $pdf_output);
	}
	ob_end_flush();
	?>