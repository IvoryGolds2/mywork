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
<section>
  <header class="contentHeader">
      <a href="./home.php">
        <button>
          <img src="./img/sub-arrow.png" alt="">
        </button>
      </a>
      <div>
        <h3>퇴직연금 FAQ</h3>
      </div>
  </header>
    <?php
      $sql = query("SELECT * from faq");
      $i = 1;
      foreach($sql as $key => $val) { 
        if ($i % 3 === 0 ) { ?>
          <div class="qnaToggleBox">
            <button class="toggleButton" data-key="<?=$key?>">
              <h1 class="toggleColor"><span>Q. </span><?=$val['question']?></h1> 
              <img class="toggleIcon" src="./img/qna-down.png" alt="Show">
            </button>
            <div>
              <pre class="content" style="display: none;"><?=$val['answer']?></pre>
            </div>
          </div>
          <div class="ads_wrap ads_sub_sm">
            <ins class="adsbygoogle"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="1643431225"
              data-language="ko"
              ></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
          <?} else { ?>
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
      }?>
        

  </section>
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