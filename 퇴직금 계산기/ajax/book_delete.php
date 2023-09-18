<?php
require_once("../db.php");

$id = $_POST['id']; // 기기값
$bigBlueValue = $_POST['bigBlueValue'];
$averageSalary = $_POST['averageSalary'];
$averageBonus = $_POST['averageBonus'];
$holidayAllowanceInput = $_POST['holidayAllowanceInput'];

// 모든 POST 변수 값이 일치하는 레코드를 삭제합니다.
$sql = query("DELETE FROM bookmark WHERE
    id = '{$id}' AND
    bigBlueValue = '{$bigBlueValue}' AND
    averageSalary = '{$averageSalary}' AND
    averageBonus = '{$averageBonus}' AND
    holidayAllowanceInput = '{$holidayAllowanceInput}'");
?>