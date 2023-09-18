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
<header class="contentHeader">
  <a href="./home.php">
    <button>
      <img src="./img/sub-arrow.png" alt="">
    </button>
  </a>
  <div>
    <h1>온누리 상품권 QnA</h1>
  </div>
</header>
  <div class="qnainner">
    <?php
      $sql = query("SELECT * from qna");
      $i = 1;
      foreach($sql as $key => $val) { 
        if ($i % 3 === 0) {?>
          <div class="qnaToggleBox">
            <button class="toggleButton" data-key="<?=$key?>">
              <h1 class="toggleColor"><span>Q. </span><?=$val['question']?></h1> 
              <img class="toggleIcon" src="./img/qna-down.png" alt="Show">
            </button>
            <div>
              <pre class="content" style="display: none;"><?=$val['answer']?></pre>
            </div>
          </div>
          <div>
            <ins class="adsbygoogle"
              style="display: block;"
              data-language="ko"
              data-ad-client="ca-pub-6499164332093487"
              data-ad-slot="9150146729"
              data-ad-format="autorelaxed"
              data-matched-content-ui-type="image_sidebyside,image_sidebyside"
              data-matched-content-rows-num="1,1"
              data-matched-content-columns-num="1,1"
              ></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>

        <?php  } else { ?>
          <div class="qnaToggleBox">
            <button class="toggleButton" data-key="<?=$key?>">
              <h1 class="toggleColor"><span>Q. </span><?=$val['question']?></h1> 
              <img class="toggleIcon" src="./img/qna-down.png" alt="Show">
            </button>
            <div>
              <pre class="content" style="display: none;"><?=$val['answer']?></pre>
            </div>
          </div>
        <?}
        $i++;
        }
      ?>
  </div>
  <script>
    var toggleButtons = document.querySelectorAll(".toggleButton");
    var contents = document.querySelectorAll(".content");

    toggleButtons.forEach(function(button, index) {
      button.addEventListener("click", function() {
        contents.forEach(function(content, contentIndex) {
          if (contentIndex === index) {
            content.style.display = (content.style.display === "none") ? "block" : "none";
            button.querySelector(".toggleIcon").src = (content.style.display === "none") ? "./img/qna-down.png" : "./img/qna-up.png";
            button.querySelector(".toggleColor").style.color = (content.style.display === "none") ? "black" : "#000";
          } else {
            content.style.display = "none";
            toggleButtons[contentIndex].querySelector(".toggleIcon").src = "./img/qna-down.png";
            toggleButtons[contentIndex].querySelector(".toggleColor").style.color = "black";
          }
        });
      });
    });
  </script>
