<?php 
include './db.php';
include './front_header.php';

$category = $_POST['category'];
// echo $category;
?>
<body>
  <div class="topMenu">
    <a href="javascript:void(0);" onclick="goBack()">
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


    <?php 	
      $sql2 = query("SELECT * from contents WHERE category = '$category'");
      $i = 1;
      foreach($sql2 as $key2=> $val2) { 
        if ($category === 'BA' && ($i === 1 || $i === 4)) {
          ?>
          <?php if($val2['subtitle']) { ?>
            <p><?=$val2['subtitle']?></p> 
          <?php } ?>
          <pre class="innerBox"><?php echo $val2['content']; ?></pre>
          <?php if($val2['chart']) { ?><img src="./img/<?=$val2['chart']?>.png"><?php } ?>
          <div>
            <ins class="adsbygoogle"
              style="display: block;"
              data-language="ko"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="3441944885"
              data-ad-format="autorelaxed"
              data-matched-content-ui-type="image_sidebyside,image_sidebyside"
              data-matched-content-rows-num="1,1"
              data-matched-content-columns-num="1,1"
              ></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
          </div>       
      <?php  } elseif ($category === 'CA' && $i === 3 ) {
                  ?>
                  <?php if($val2['subtitle']) { ?>
                    <p><?=$val2['subtitle']?></p> 
                  <?php } ?>
                  <pre class="innerBox"><?php echo $val2['content']; ?></pre>
                  <?php if($val2['chart']) { ?><img src="./img/<?=$val2['chart']?>.png"><?php } ?>
                  <div>
                    <ins class="adsbygoogle"
                      style="display: block;"
                      data-language="ko"
                      data-ad-client="ca-pub-2858778486116301"
                      data-ad-slot="3441944885"
                      data-ad-format="autorelaxed"
                      data-matched-content-ui-type="image_sidebyside,image_sidebyside"
                      data-matched-content-rows-num="3,1"
                      data-matched-content-columns-num="1,1"
                      ></ins>
                      <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                  </div>       
              <?php } elseif ($category === 'AA' || $category === 'EA') {
                  ?>
                  <?php if($val2['subtitle']) { ?>
                    <p><?=$val2['subtitle']?></p> 
                  <?php } ?>
                  <pre class="innerBox"><?php echo $val2['content']; ?></pre>
                  <?php if($val2['chart']) { ?><img src="./img/<?=$val2['chart']?>.png"><?php } ?>
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
              <?php } else { ?>
                <?php if($val2['subtitle']) { ?>
                  <p><?=$val2['subtitle']?></p> 
                <?php } ?>
                <pre class="innerBox"><?php echo $val2['content']; ?></pre>
                <?php if($val2['chart']) { ?><img src="./img/<?=$val2['chart']?>.png"><?php } ?>
      <?  }
      $i++;
      }
      ?>    
          
        


  </div>
</body>
</html>