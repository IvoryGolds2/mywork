<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
    ?>
    <link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
    <header class="contentHeader">
        <a href="./home.php">
            <button>
                <img src="./img/prev.png" alt="">
            </button>
        </a>
        <?php
        $sql = query("SELECT DISTINCT header from content WHERE category = '$category'");
        foreach($sql as $key => $val) {
        ?>
        <div>
            <h1><?= $val['header'] ?></h1>
        </div>
        <?php
        }
        ?>  
    </header>

    <div class="contentbox">
        <div class="ads_wrap ads_main_big">
            <ins class="adsbygoogle"
            data-ad-client="ca-pub-2858778486116301"
            data-ad-slot="1643431225"
            data-language="ko"
            ></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
\
        <?php
        $sql2 = query("SELECT DISTINCT title from content WHERE category = '$category'");
        $i = 1;
        foreach($sql2 as $key2 => $val2) { ?>
                <?php if($val2['title']) { ?>
                    <span class="boxtitle"><?= $val2['title'] ?></span>
                    <?php } ?>
                    <?php
                    $sql3 = query("SELECT DISTINCT * from content WHERE title = '$val2[title]' and category = '$category'");
                    foreach ($sql3 as $key3 => $val3) {
                    ?>
                    <?php if($val3['redtitle']) { ?>
                    <p class="redtitle"><?= $val3['redtitle'] ?></p>
                    <?php } ?>
                    <?php if($val3['content']) { ?>
                    <pre><?= $val3['content'] ?></pre>
                    <?php } ?>
                    <?php if($val3['chart']) { ?>
                    <img src="./img/<?= $val3['chart'] ?>.png" alt="">
                    <?php } ?>
            <?}
            }
    ?>
        <div class="ads_wrap ads_main_big">
            <ins class="adsbygoogle"
            data-ad-client="ca-pub-2858778486116301"
            data-ad-slot="1643431225"
            data-language="ko"
            ></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</body>
</html>