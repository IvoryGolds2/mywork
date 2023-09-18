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
        <h1>조혈모세포 이식과 기증의 필요성</h1>
      </div>
  </header>
  <section>
    <div class="title">
      <a class="normaltitle" href="./contentd.php">
      조혈모세포
      </a>
      <a class="pointtitle" href="./contente.php" >
      조혈모세포 기증 절차
      </a>
    </div>
    <div class="contentbox">
      <pre class="content">
      1. 조혈모세포 기증희망 등록 신청
      전국 대한적십자사 소속의 헌혈장소에서 등록 신청서 작성 및 HLA[조직적합성항원]검사용 혈액 5mL를 채혈합니다.

      2. 장기조직혈액통합관리시스템(KONOS)에 등록
      등록 신청서 내용과 HLA검사결과는 국립장기조직혈액관리원의 장기조직혈액통합 관리시스템에 등록됩니다.

      3. HLA 일치자 검색
      환자의 HLA형이 기증자의 것과 일치하게 되면 조정기관에서 조혈모세포 기증에 대한
      최종의사를 확인하는 절차를 거치며, 기증자로서 최종동의를 하면 HLA형이 환자와 일치하는지 다시 한번 확인 검사를 합니다.

      4. 기능 및 이식 전 준비(기증자)
      기증 예정 한 달 전 기증자의 건강상태를 확인 하기 위해 건강검진을 실시합니다.
      말초혈조혈모세포 기증 : 뼈 속의 조혈모세포를 혈액으로 이동시키기 위해 3~4일과 과립구집락촉진인자 주사를 매일 한 차례씩 맞습니다.
      골수기능 : 기증 후 수혈을 위해 1~4주 전 자가 혈액을 채취하게 됩니다.

      5. 조혈모세포기능
      [말초혈조혈모세포 기능]
      기증방법 : 성분헌혈과 같은 방식으로 혈액 속의 조혈모세포를 채집합니다.
      3~4일간 입원을 하며, 기증은 4~5시간 소요됩니다.
      [골수 기증]
      기증방법 : 전신마취 후 엉덩이 장골뼈 위쪽 부위에서 조혈모세포를 채취하고 자가혈액을 수혈받게 됩니다.
      3~4일간 입원을 하며, 기증은 1~2시간 소요됩니다.
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