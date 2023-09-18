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

	if($row['id']){ // 이미 있다면 삭제
		// echo "<script>console.log('삭제함');</script>";
		$result = query("DELETE FROM bookmark WHERE
        id = '{$id}' AND
        bigBlueValue = '{$bigBlueValue}' AND
        averageSalary = '{$averageSalary}' AND
        averageBonus = '{$averageBonus}' AND
        holidayAllowanceInput = '{$holidayAllowanceInput}'");
        
		echo './img/bookmark.png';

	}else{ // 없다면 추가
		// echo "<script>console.log('추가함');</script>";
        $result = query("INSERT INTO bookmark (id, bigBlueValue, averageSalary, averageBonus, holidayAllowanceInput, host_href) VALUES ('{$id}', '{$bigBlueValue}', '{$averageSalary}', '{$averageBonus}', '{$holidayAllowanceInput}', '{$host_href}')");
		echo './img/bookmark-fill.png';
	}
?>