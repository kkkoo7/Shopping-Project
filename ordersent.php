<?php
session_start();
$id=$_SESSION['eid'];
include("config.php");
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($id=="")
{
header("location:index.php");
}
?>

<html>
<div>
<div>
<br><h2 align="right"><a href="?log=out"><font color="#0099FF">LogOut</font></a></h2><br><br><br><br>
<!--<img src="usepics/7.jpg">-->
</div>
<br><br>
<center><div>
<div><br/><center><h2><font face="Elephant" size="+2" color="#00CCFF">Thank You for Shopping With Us</font></h2></center>
</div>
<br><br><br>
<fieldset style="background:#0e88af;width:50%">
<br><br>
<font color="#660033" size="+1" face="Comic Sans MS"><b>Your order is sent successfully!!! </b></font><br/><br/>
<font size="+1" face="Comic Sans MS" color="#660033" ><b>Your order no. is:</b><font color="#FF3366"><?php echo $_REQUEST['order'];?></font><br/><br/></font>


</fieldset>
</div>
</center>

</div>
</html>