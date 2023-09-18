<!DOCTYPE html>
<html lang="ko">
<head>
<?php
include './front_header.php';
include './db.php';
include './front_header.php';
$book_sql = query("SELECT * FROM bookmark WHERE id = '$id'");
?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
    <div class="backgroundcolorwrapper">
        <header class="homeHeader">
            <a href="./home.php"><img src="./img/mainpage-logo.png" alt=""></a>
        </header>
        <section>
            <div class="homeinnerWrapper">
                <?php 
                    foreach ($book_sql as $key => $val) {
                        // 변수에서 숫자 값을 읽어옵니다.
                        $bigBlueValue = $val['bigBlueValue'];
                        $averageSalary = $val['averageSalary'];
                        $averageBonus = $val['averageBonus'];
                        $holidayAllowanceInput = $val['holidayAllowanceInput'];
                        
                        // 숫자 값을 원화 형식으로 포맷팅합니다.
                        $formattedBigBlueValue = $bigBlueValue . '원';
                        $formattedAverageSalary = $averageSalary . '원';
                        $formattedAverageBonus = $averageBonus . '원';
                        $formattedHolidayAllowanceInput = $holidayAllowanceInput . '원';
                        ?>
                        <div class="bookmarkbox">
                            <img class="book bookmarkIcon1" src="./img/bookmark-fill.png" alt="" >
                            <div class="bookmarkcontent">
                                <h4>내 예상 퇴직금</h4>
                                <h3><span class="bigblue_span"><?=number_format($bigBlueValue)?></span>원</h3>
                                <h4>평균임금</h4> 
                                <h3><span class="average_span"><?=number_format($formattedAverageSalary)?></span>원</h3>
                                <h4>퇴직금에 포함될 상여금</h4> 
                                <h3><span class="bonus_span"><?=number_format($formattedAverageBonus)?></span>원</h3>
                                <h4>퇴직금에 포함될 연차수당</h4> 
                                <h3><span class="holiday_span"><?=number_format($formattedHolidayAllowanceInput)?></span>원</h3>
                            </div>
                        </div>
                <?php } ?>
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
                    <div class="calculatorbox">
                            <img class="calculatorboxTopimg" src="./img/calculator.png" alt="">
                            <a href="./calculation1.php"><img src="./img/2.png" alt=""></a>
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
                    <a class="homeBotBtn" href="./how.php"><img src="./img/btn.png" alt=""></a>
            </div>
        </section>
    </div>
</body>
<script src="./js/postData.js"></script>
<script>
    const book = document.querySelectorAll('.book');
    book.forEach(el => {
        el.addEventListener('click',function(e){
            // ** 처음부터 북마크되어있는 데이터만 들고오기 때문에 isBookmarked를 활용한 판정이 불필요

            // 데이터
            var host_href = window.location.href;
            console.log($(this).next().children('h3').children('.bigblue_span').text().replace(/[^0-9]/g, ''));
            var bigBlueValue = $(this).next().children('h3').children('.bigblue_span').text().replace(/[^0-9]/g, '');
            var averageSalary = $(this).next().children('h3').children('.average_span').text().replace(/[^0-9]/g, '');
            var averageBonus = $(this).next().children('h3').children('.bonus_span').text().replace(/[^0-9]/g, '');
            var holidayAllowanceInput = $(this).next().children('h3').children('.holiday_span').text().replace(/[^0-9]/g, '');

            // ajax로 전송할 데이터
            var info = {
                "id": id,
                "bigBlueValue": bigBlueValue,
                "holidayAllowanceInput": holidayAllowanceInput,
                "averageSalary": averageSalary,
                "averageBonus": averageBonus,
                "host_href": host_href,
            };

            // ajax 전송
            $.ajax({
                type: "POST",
                url: "./ajax/book_delete.php",
                data: info,
                success: function(response) { // delete하고
                    alert('즐겨찾기가 해제되었습니다');
                    e.target.parentNode.outerHTML = ''; // 화면에서도 삭제해주소
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })
    });
</script>
</html>