<?php
    require_once("../db.php");
    
    $id = $_POST['id'];
    $bigBlueValue = $_POST['bigBlueValue'];
    $averageSalary = $_POST['averageSalary'];
    $averageBonus = $_POST['averageBonus'];
    $holidayAllowanceInput = $_POST['holidayAllowanceInput'];
    $host_href = $_POST['host_href'];


	$sql = query("SELECT * from bookmark 
    where id = '{$id}' 
    and bigBlueValue ='{$bigBlueValue}' 
    and averageSalary ='{$averageSalary}' 
    and averageBonus ='{$averageBonus}' 
    and holidayAllowanceInput ='{$holidayAllowanceInput}'");
	$row = $sql -> fetch_array();

	if($row['id']){ // 이미 있다면
		echo './img/bookmark-fill.png';
	}else{
        echo './img/bookmark.png';
    }
?>