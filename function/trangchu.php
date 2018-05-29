<?php
	require('connect/DBConnect.php');	
	function TinMoiNhat_MotTin(){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				ORDER BY id DESC
				LIMIT 0,1
				";
		return mysqli_query($mysqli,$qr);
	}
	function TinMoiNhat_TamTin(){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				ORDER BY id DESC
				LIMIT 1,8
				";
		return mysqli_query($mysqli,$qr);
	}
	function TinXemNhieu(){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				ORDER BY qtyView DESC
				LIMIT 0,5
				";
		return mysqli_query($mysqli,$qr);
	}
	function TinTheoLoaiTin_MotTin($id){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				WHERE type_id = $id
				ORDER BY id DESC
				LIMIT 0,1
				";
		return mysqli_query($mysqli,$qr);
	}
	function TinTheoLoaiTin_BonTin($id){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				WHERE type_id = $id
				ORDER BY id DESC
				LIMIT 1,4
				";
		return mysqli_query($mysqli,$qr);
	}
	function TenLoaiTin($id){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM type
				WHERE id = $id
				";
		return mysqli_query($mysqli,$qr);
	}
	function BannerQuangCao($position){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM advertisement
				WHERE position = $position
				";

		return mysqli_query($mysqli,$qr);
	}
?>