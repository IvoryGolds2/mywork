
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="">
    <meta property="og:title" content="퇴직금 계산기">
    <meta property="og:description" content="퇴직금 계산기">
    <meta name="google-site-verification" content="ITv8sR8dFSPDkmFNYT_-HPGLJ4EaThfVg73TqaBKNiw" />    
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/commmon.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/> -->
    <!-- SWIPER -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
    <!-- <script defer src="./js/main.js"></script> -->
    <!-- <script src="./js/postData.js"></script> -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <title>퇴직금 계산기</title>
    <?php
        # post값 유지코드
        session_start();
        if(basename($_SERVER['PHP_SELF']) != 'index.php'){ // index 아니면
            $id = $_SESSION['id'];
            $code = $_POST['code'];
        }else{ // index 이면
            $id = $_GET['id'] ?: ($_POST['id'] ?: '테스트값');
            $_SESSION['id'] = $id;
        }

        // # 값확인용(테스트시 사용)
        // echo '<p class="php">기기값 : '.$id;
        // if($code){echo '<br>code : '.$code;}
        // echo '</p>';
    ?>
    <script>
        var id = '<?=$id?>';
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2858778486116301" crossorigin="anonymous"></script>
    <script>
        if ( window.location.href == "http://severance.jseol0043.co.kr/"
            || window.location.href == "https://severance.jseol0043.co.kr/") {
            window.location.href = "https://severance.naganpear.co.kr/";
        }
        if ( window.location.href == "http://severance.jseol0043.co.kr/home.php"
            || window.location.href == "https://severance.jseol0043.co.kr/home.php") {
            window.location.href = "https://severance.naganpear.co.kr/home.php";
        }
    </script>

    <!-- severance.jseol0043.co.kr -->