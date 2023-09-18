<?php
require_once("../db.php");
$id = $_POST['id']; // 기기값
$bigBlueValue = $_POST['bigBlueValue'];
$averageSalary = $_POST['averageSalary'];
$averageBonus = $_POST['averageBonus'];
$holidayAllowanceInput = $_POST['holidayAllowanceInput'];
$host_href = $_POST['host_href'];

// 모든 POST 변수 값이 일치하는 레코드를 찾습니다.
$sql = query("SELECT * from bookmark where 
    id = '{$id}' and 
    bigBlueValue = '{$bigBlueValue}' and 
    averageSalary = '{$averageSalary}' and 
    averageBonus = '{$averageBonus}' and 
    holidayAllowanceInput = '{$holidayAllowanceInput}' and 
    host_href = '{$host_href}'");

$row = $sql->fetch_array();

if ($row) { // 일치하는 레코드가 있으면 삭제
    $result = query("DELETE from bookmark where 
        id = '{$id}' and 
        bigBlueValue = '{$bigBlueValue}' and 
        averageSalary = '{$averageSalary}' and 
        averageBonus = '{$averageBonus}' and 
        holidayAllowanceInput = '{$holidayAllowanceInput}'");

    if ($result) {
        echo "즐겨찾기에서 삭제했습니다.";
    } else {
        echo "삭제 실패";
    }
} else { // 일치하는 레코드가 없으면 추가
    echo "즐겨찾기에 추가합니다.";
    $result = query("INSERT INTO bookmark (id, bigBlueValue, averageSalary, averageBonus, holidayAllowanceInput, host_href) VALUES 
    ('{$id}', '{$bigBlueValue}', '{$averageSalary}', '{$averageBonus}', '{$holidayAllowanceInput}', '{$host_href}')");

    if ($result) {
        echo "추가 성공";
    } else {
        echo "추가 실패";
    }
}
?>
