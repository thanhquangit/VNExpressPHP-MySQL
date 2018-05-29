<?php 
	$quangcao = BannerQuangCao(1);
	while($row_quangcao  = mysqli_fetch_array($quangcao))
	{
?>
	<img width="280" src="upload/quangcao/<?php echo $row_quangcao['urlImage'] ?>" />
	<div style="height:10px"></div>
<?php		
	}

?>

