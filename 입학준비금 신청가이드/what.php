<?php 
include './db.php';
include './front_header.php';

$category = $_POST['category'];
// echo $category;
?>
<body>
  <div class="topMenu">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <span>
      <?php
        $sql = query("SELECT DISTINCT title from contents WHERE category = '$category'");
        foreach($sql as $key => $val) {
          echo $val['title'];
        }
      ?>
    </span>
  </div>
  <div class="innerWrapper">
    <div class="innerBox">
    입학준비금은 초•중•고등학교의 1학년 신입생들이 입학하기 전에 지불해야 하는 비용을 말합니다. 입학 준비금은 수도권일 경우 50만원, 광역시일 경우 30만원, 그 외 지역일 경우 20만원 정도로 여러 요소에 따라 상이합니다. 입학 준비금은 교육비의 일환으로 지불하게 되며, 교복, 교재, 학용품 등에 소요되는 비용을 포함합니다. 하지만 단순히 입학 준비물로서 끝나는 것이 아니라, 학생들의 경제적 부담을 감소시키기 위한 다양한 지원사업이 운영되고 있습니다. 이를 통해 입학준비금이 부담이 되지 않도록 도움을 주고, 학생들의 교육 기회를 확대하는 데 기여하고 있습니다.
    </div>
  </div>
</body>
</html>