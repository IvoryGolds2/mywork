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
    <a href="#" onclick="goBack()">
      <img src="./img/prev.png" alt="">
    </a>
    <h1>
    <?php
        $sql2 = query("SELECT DISTINCT header from aws89656 WHERE category = '$category'");
        foreach($sql2 as $key2 => $val2) {
          echo $val2['header'];
        }
      ?>
    </h1>
	</header>
  <section class="innerWrapper">
    <?php
      $sql = query("SELECT * from aws89656 WHERE category = '$category'");
      $i = 1;
      foreach($sql as $key=> $val) {
        if (($category === "A" || $category === "B" || $category === "D") && $i % 3 === 0) {
          echo '<div class="contentBox">';
          if ($val['title']) {
            echo '<h1>' . $val['title'] . '</h1>';
          }
          if ($val['subtitle']) {
            echo '<p>' . $val['subtitle'] . '</p>';
          }
          if ($val['content']) {
            echo '<pre>' . $val['content'] . '</pre>';
          }
          if ($val['chart']) {
            echo '<img src="./img/' . $val['chart'] . '.png">';
          }
          echo '</div>';
          echo'
          <div class="ads_wrap ads_main_big">
            <ins class="adsbygoogle"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="2985402594"
              data-language="ko"
              ></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
          ';
        } else { 
          echo '<div class="contentBox">';
          if ($val['title']) {
            echo '<h1>' . $val['title'] . '</h1>';
          }
          if ($val['subtitle']) {
            echo '<p>' . $val['subtitle'] . '</p>';
          }
          if ($val['content']) {
            echo '<pre>' . $val['content'] . '</pre>';
          }
          if ($val['chart']) {
            echo '<img src="./img/' . $val['chart'] . '.png">';
          }
          echo '</div>';
        }
        $i++;
      }
    ?>
  </section>

</body>
<script src="./js/postData.js"></script>
</html>