<!DOCTYPE html>
<html lang="ko">
<head>
<?php include './front_header.php';
include "./db.php";
?>
<?php
$bigBlueValue;
$holidayAllowanceInput;
$averageSalary;
$averageBonus;
?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
    <div class="backgroundcolorwrapper">
        <header class="contentHeader">
            <button id="goBackButton">
                <img class="goback" src="./img/sub-arrow.png" alt="">
            </button>
            <a class="logoimg" href="./home.php">
                <img src="./img/subpage-logo.png" alt="">
            </a>
        </header>
        <section class="innerWrapper">
        <div class="contentBox">
            <div class="resulttopimg">
                <img src="./img/sub-deco-1.png" alt="">
            </div>
            <div class="ads_wrap ads_main_sm">
                <ins class="adsbygoogle"
                    data-ad-client="ca-pub-2858778486116301"
                    data-ad-slot="1949985773"
                    data-language="ko"
                    ></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="bookmark">
                <h1>내 예상 퇴직금</h1>
                <img class="bookmarkIcon book" src="./img/bookmark.png" alt="">
            </div>
            <div class="bigblue"></div>
            <div class="resulttextbox">
            <h3>입사일</h3>
            <h4 id="startDate"></h4>
            <h3>퇴사일</h3>
            <h4 id="endDate"></h4> 
            </div>
            <h2>평균임금</h2>
            <div id="averageSalary" class="likeinput average">

            </div>
            <h2>퇴직금에 포함될 상여금</h2>
            <div id="averageBonus" class="likeinput plus">

            </div>
            <a class="nextbtn" href="./calculation1.php"><img src="./img/4.png" alt=""></a>
        </div>
        <div class="ads_wrap ads_main_big">
            <ins class="adsbygoogle"
                data-ad-client="ca-pub-2858778486116301"
                data-ad-slot="1949985773"
                data-language="ko"
                ></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </section>
</body>
<script>
    // 세션 스토리지에서 값을 가져와서 출력
    var start = sessionStorage.getItem('start');
    var end = sessionStorage.getItem('end');
    var recentSalary = parseFloat(sessionStorage.getItem('recentSalary'));
    var bonusInput = parseFloat(sessionStorage.getItem('bonusInput'));
    var holidayAllowanceInput = parseFloat(sessionStorage.getItem('holidayAllowanceInput'));
    var bigBlueValue;
    var averageSalary;
    var averageBonus;

    function formatDate(dateString) {
        const date = new Date(dateString);
        const year = date.getFullYear();
        const month = (date.getMonth() + 1).toString().padStart(2, '0'); // 월을 2자리로 표기
        const day = date.getDate().toString().padStart(2, '0'); // 일을 2자리로 표기
        return `${year}년 ${month}월 ${day}일`;
    }

    // averageSalary * 30 * daysDiff / 365 계산

    // 날짜 문자열을 Date 객체로 변환
    var startDate = new Date(start);
    var endDate = new Date(end);

    // 두 날짜 간의 차이를 밀리초 단위로 계산
    var timeDiff = endDate - startDate;

    // 일수로 변환
    var daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

    // 가져온 값을 '0000년 00월 00일' 형식으로 변환하여 HTML 요소에 출력
    document.getElementById('startDate').textContent = formatDate(start);
    document.getElementById('endDate').textContent = formatDate(end);

    // 계산 후 값을 HTML 요소에 출력
    if (!isNaN(recentSalary)) {
        averageSalary = Math.floor((recentSalary * 3) / 90); // 소수점 이하를 버린 평균 임금 계산
        var formattedSalary = averageSalary.toLocaleString('ko-KR', { style: 'currency', currency: 'KRW' }); // 원화로 표시
        document.getElementById('averageSalary').textContent = formattedSalary;
    }
    if (!isNaN(bonusInput)) {
        averageBonus = Math.floor((bonusInput * 3) / 12);
        
        bigBlueValue = Math.floor(averageSalary * 30 * daysDiff / 365 + holidayAllowanceInput);
        var formattedBigBlueValue = bigBlueValue.toLocaleString('ko-KR', { style: 'currency', currency: 'KRW' });

        // 원(₩)을 추가하여 텍스트 연결
        var formattedBigBlueValueWithCurrency = formattedBigBlueValue + '원';

        document.querySelector('.bigblue').textContent = formattedBigBlueValueWithCurrency;
        // 원화로 형식화
        var formattedAverageBonus = averageBonus.toLocaleString('ko-KR', {
            style: 'currency',
            currency: 'KRW'
        });

        document.getElementById('averageBonus').textContent = formattedAverageBonus;
    }





    // 뒤로 가기 버튼 이벤트 처리
    document.getElementById('goBackButton').addEventListener('click', function() {
        window.history.back();
    });
    console.log(id+'/'+bigBlueValue+'/'+holidayAllowanceInput+'/'+averageSalary+'/'+averageBonus);




    // bookmarking, bookmarking_load에 모두 사용될 데이터
    var info = { 
        "id": id,
        "bigBlueValue": bigBlueValue,
        "holidayAllowanceInput": holidayAllowanceInput,
        "averageSalary": averageSalary,
        "averageBonus": averageBonus,
        "host_href": window.location.href
    };

    // 북마크 저장 및 삭제
    $('.bookmarkIcon').click(function(){
        $.ajax({
            type: "POST",
            url: "./ajax/bookmarking.php",
            data: info,
            success: function(response) {
                console.log(response);
                $('.bookmarkIcon').attr('src',response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // 다시 계산하러 가기에서 이전페이지로 돌아왔을 경우의 대비용 (사이트 로딩되자마자 북마크 체크)
    $.ajax({
        type: "POST",
        url: "./ajax/bookmarking_load.php",
        data: info,
        success: function(response) {
            console.log(response);
            $('.bookmarkIcon').attr('src',response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
</script>
</html>