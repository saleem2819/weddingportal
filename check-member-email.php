<?php 
require_once("includes/dbsmain.inc.php");

$sql="SELECT reg_member_verified_email FROM  tbl_registration WHERE reg_id='$_SESSION[regID]'";
$MemMobile=db_scalar($sql);
if(!empty($MemMobile)){
echo "1";	
}else{
echo "0";		
}
?>

