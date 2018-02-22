<style>
input.result {
    margin-bottom: 10px;
    padding: 7px 7px 9px 9px;
    margin-left: 10px;
}
input.qstn {
    margin-left: 30px;
    padding: 8px 10px 7px 8px;
    background: #efd4ea;
}
.button {
	background-color: #100a82;
    border: none;
    color: white;
    padding: 8px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
}
</style>
<html>
<body>

<form method="post" action="" />

   <input type="text" autocomplete="off" name="price" placeholder="Enter Price..." class="qstn" value="<?php echo (isset($_POST['price'])) ? $_POST['price'] :''; ?>">
   <input type="submit" class="button" name="text" value="submit" />



</form>
</body>
</html>
<div class="res">
<?php


if( isset( $_POST['price'] ) && $_POST['price'] !=""  ){

    $t15 = $_POST['price'] - (($_POST['price']*15)/100);
    $t20 = $_POST['price'] - (($_POST['price']*20)/100);
	$t25 = $_POST['price'] - (($_POST['price']*25)/100);
	$t30 = $_POST['price'] - (($_POST['price']*30)/100);
	$t35 = $_POST['price'] - (($_POST['price']*35)/100);
    $t40 = $_POST['price'] - (($_POST['price']*40)/100);
	$t45 = $_POST['price'] - (($_POST['price']*45)/100);
    $t50 = $_POST['price']  - (($_POST['price']*50)/100);

	
	//echo '15:-&nbsp;'.round($t15,2)."<br />";
	//echo '25:-&nbsp;'.round($t25,2)."<br />";
	//echo '30:-&nbsp;'.round($t30,2)."<br />";
	//echo '35:-&nbsp;'.round($t35,2)."<br />";
	//echo '40:-&nbsp;'.round($t40,2)."<br />";
	//echo '45:-&nbsp;'.round($t45,2)."<br />";
  //  echo '50:-&nbsp;'.round($t50,2)."<br />";
	//echo '20:-&nbsp;'.round($t20,2)."<br />";
	
	echo '15 <input type="text" class="result" onClick="this.select();"  value="'.round($t15,2).'"><br />';
	echo '25 <input type="text" class="result" onClick="this.select();"  value="'.round($t25,2).'"><br />';
	echo '30 <input type="text" class="result" onClick="this.select();"  value="'.round($t30,2).'"><br />';
	echo '35 <input type="text" class="result" onClick="this.select();"  value="'.round($t35,2).'"><br />';
	echo '40 <input type="text" class="result" onClick="this.select();"  value="'.round($t40,2).'"><br />';
	echo '45 <input type="text" class="result" onClick="this.select();"  value="'.round($t45,2).'"><br />';
	echo '50 <input type="text" class="result" onClick="this.select();"  value="'.round($t50,2).'"><br />';
	echo '20 <input type="text" class="result" onClick="this.select();"  value="'.round($t20,2).'"><br />';
	
}
?>
</div>

