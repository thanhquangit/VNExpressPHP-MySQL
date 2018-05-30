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
	function DanhSachTheLoai(){
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM category
				";

		return mysqli_query($mysqli,$qr);
	}
	function DanhSachLoaiTinTheoTheLoai($id){ 
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM type
				WHERE category_id = $id
				";

		return mysqli_query($mysqli,$qr);
	}
	function TinTheoTheLoai_MotTin($id){
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				INNER JOIN type ON news.type_id = type.id
				WHERE type.category_id = $id
				ORDER BY news.id DESC
				";

		return mysqli_query($mysqli,$qr);
	}
	function TinTheoTheLoai_BonTin($id){
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				INNER JOIN type ON news.type_id = type.id
				WHERE type.category_id = $id
				ORDER BY news.id DESC
				LIMIT 1,4
				";

		return mysqli_query($mysqli,$qr);
	}
	function DanhSachTinTheoLoaiTin($id){
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				WHERE type_id = $id
				ORDER BY news.id
				";

		return mysqli_query($mysqli,$qr);
	}
	function breadCrumb($id){
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT type.name as name_type, category.name as category_name
				FROM type, category
				WHERE type.category_id = category.id
				AND $id = type.id
				";

		return mysqli_query($mysqli,$qr);
	}
	function TinTheoLoaiTin_PhanTrang($id,$from, $soTin){
		$mysqli = mysqli_connect('localhost','root','','vnexpress');
		$mysqli->set_charset('utf8');
		$qr = "
				SELECT *
				FROM news
				WHERE type_id = $id
				ORDER BY news.id DESC
				LIMIT $from, $soTin
				";

		return mysqli_query($mysqli,$qr);
	}
?>