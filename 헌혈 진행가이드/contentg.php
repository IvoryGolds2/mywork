<!DOCTYPE html>
<html lang="ko">
<head>
  <?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
    $categorycode = $_POST['categorycode'];
  ?>
</head>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <button>
        <img src="./img/prev.png" alt="">
      </button>
    </a>
      <div>
        <h1>일반 건강 검진</h1>
      </div>
  </header>
  <section>
    <div class="title">
      <a class="normaltitle" href="./contentf.php">
      전혈헌혈
      </a>
      <a class="pointtitle" href="./contentb.php" >
      성분헌혈
      </a>
    </div>
    <div class="contentbox">
      <span class="boxtitle">성분헌혈이란?</span>
      <div class="redtitle">혈소판 성분헌혈</div>
      <pre class="content">
      성분채혈기를 이용하여 혈소판만을 채혈하고, 나머지 성분은 헌혈자에게 되돌려주는 헌혈
      (250mL 정도 채혈)
      </pre>
      <div class="redtitle">혈장 성분헌혈</div>
      <pre class="content">
      성분채혈기를 이용하여 혈장만을 채혈하고, 나머지 성분은 헌혈자에게 되돌려 주는 헌혈
      (500mL 정도 채혈)
      </pre>
      <div class="redtitle">혈소판 혈장 성분헌혈</div>
      <pre class="content">
      성분채혈기를 이용하여 혈소판과 혈장 성분을 채혈하고, 나머지 성분은 헌혈자에게 되돌려 주는 헌혈
      (혈소판은 250mL 정도 채혈, 혈장은 300mL 정도 채혈)    
      </pre>
      <span class="boxtitle">성분헌혈 제한</span>
      <div class="redtitle">나이</div>
      <pre class="content">
      혈소판성분헌혈, 혈소판혈장성분헌혈 - 만17세~59세 / 혈장성분헌혈 - 만17세~69세
      65세 이상인 자의 헌혈은 60세부터 64세까지 헌혈한 경험이 있는 자에 한함
      </pre>
      <div class="redtitle">몸무게</div>
      <pre class="content">
      남자 50kg이상 ,여자 45kg이상
      </pre>
      <div class="redtitle">혈색소</div>
      <pre class="content">
      12.0 g/dL 이상      
      </pre>
      <div class="redtitle">혈압</div>
      <pre class="content">
      수축기혈압 : 90mmHg 초과, 180mmHg미만 / 이완기 혈압 : 100mmHg 미만      
      </pre>
      <div class="redtitle">총단백 수치</div>
      <pre class="content">
      6.0g/dL 이상(혈장성분헌혈, 혈소판혈장성분헌혈에 한함)    
      </pre>
      <div class="redtitle">혈소판수치</div>
      <pre class="content">
      150,000개/μL 이상(혈소판성분헌혈, 혈소판혈장성분헌혈에 한함)   
      </pre>
      <div class="redtitle">소요시간</div>
      <pre class="content">
      혈장 - 약30~40분/ 혈소판, 혈소판혈장 - 약1시간 ~ 1시간30분
      </pre>
      <div class="redtitle">다음 헌혈 가능 일자</div>
      <pre class="content">
      헌혈일로부터 2주 후 같은 요일
      성분헌혈(혈장, 혈소판, 혈소판혈장)이 연 24회인 경우 혈소판성분헌혈, 혈소판혈장성분헌혈 참여 불가
      </pre>
    </div>  
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
  </section>
</body>
</html>