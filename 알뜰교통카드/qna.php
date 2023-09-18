<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
  include './db.php';
  include './front_header.php';
  $category = $_POST['category'];
  ?>
  <link rel="stylesheet" href="./css/commmon.css">
  <style>
    .contentBoxThin2 {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <h1>알뜰교통카드 자주 묻는 질문</h1>
  </header>
  <section class="innerWrapper">
    <?php
      $sql = query("SELECT * from traffic_qna");
      foreach($sql as $key => $val) { ?>
      <div class="contentBoxThin2">
        <button class="toggleButton2" data-key="<?=$key?>">
          <h1 class="orangeColor"><?=$val['title']?></h1> 
          <img class="toggleIcon" src="./img/qna-down.png" alt="Show">
        </button>
        <div>
          <pre class="content" style="display: none;"><?=$val['content']?></pre>
        </div>
      </div>
    <?php  } ?>  
  </section>
  <script>
    var toggleButtons = document.querySelectorAll(".toggleButton2");
    var contents = document.querySelectorAll(".content");

    toggleButtons.forEach(function(button, index) {
      button.addEventListener("click", function() {
        contents.forEach(function(content, contentIndex) {
          if (contentIndex === index) {
            content.style.display = (content.style.display === "none") ? "block" : "none";
            button.querySelector(".toggleIcon").src = (content.style.display === "none") ? "./img/qna-down.png" : "./img/qna-up.png";
            button.querySelector(".orangeColor").style.color = (content.style.display === "none") ? "black" : "#ec6c10";
          } else {
            content.style.display = "none";
            toggleButtons[contentIndex].querySelector(".toggleIcon").src = "./img/qna-down.png";
            toggleButtons[contentIndex].querySelector(".orangeColor").style.color = "black";
          }
        });
      });
    });
  </script>
</body>
</html>