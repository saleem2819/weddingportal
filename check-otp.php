<?php
require_once("includes/dbsmain.inc.php");
////////////////////////   FOR MEMBER MOBILE VERIFICATION /////////////////////////////
$otp=$_GET['otp'];
$regID=$_GET['regID'];
$vMobile=$_GET['vMobile'];

if($otp!="" && $regID!=""){
	
$rID=db_scalar("SELECT reg_id FROM tbl_registration WHERE 1 AND reg_id='$regID'");	

if($rID){
	
$regRealOTP=db_scalar("SELECT otp_code FROM tbl_otp WHERE 1 AND otp_reg_id='$rID' ORDER BY otp_id DESC");		

if($otp==$regRealOTP){
$sql="UPDATE tbl_registration SET  reg_member_verified_mobile='$vMobile',reg_mobile_no='$vMobile',reg_member_mobile='$vMobile' WHERE  reg_id='$regID'";	 
db_query($sql);		
echo 1;	
}else{
echo 0;		
}

	
}

}
?>