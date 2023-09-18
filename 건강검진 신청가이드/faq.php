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
      <img src="./img/prev.png" alt="">
    </button>
  </a>
  <div>
    <h1>건강검진 FAQ</h1>
  </div>
</header>
  <div class="qnainner">
    <?php
      $sql = query("SELECT * from faq");
      foreach($sql as $key => $val) { ?>
      <div class="qnaToggleBox">
        <button class="toggleButton" data-key="<?=$key?>">
          <h1 class="toggleColor"><?=$val['question']?><span class="redtext">?</span></h1> 
          <!-- <img class="toggleIcon" src="./img/qna-down.png" alt="Show"> -->
        </button>
        <div>
          <pre class="content" style="display: none;"><?=$val['answer']?></pre>
        </div>
      </div>
    <?php  } ?>  
  </div>
  <script>
    var toggleButtons = document.querySelectorAll(".toggleButton");
    var contents = document.querySelectorAll(".content");

    toggleButtons.forEach(function(button, index) {
      button.addEventListener("click", function() {
        contents.forEach(function(content, contentIndex) {
          if (contentIndex === index) {
            content.style.display = (content.style.display === "none") ? "block" : "none";
            // button.querySelector(".toggleIcon").src = (content.style.display === "none") ? "./img/qna-down.png" : "./img/qna-up.png";
            // button.querySelector(".toggleColor").style.color = (content.style.display === "none") ? "black" : "#000";
          } else {
            content.style.display = "none";
            // toggleButtons[contentIndex].querySelector(".toggleIcon").src = "./img/qna-down.png";
            toggleButtons[contentIndex].querySelector(".toggleColor").style.color = "black";
          }
        });
      });
    });
  </script>
