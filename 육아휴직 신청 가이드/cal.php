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
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <div>
      <h1>육아휴직 급여 계산</h1>
    </div>
  </header>
  <section class="innerWrapper">
    <div class="calbox">
      <div class="textt">통상임금</div>
      <div class="inputtext1"><input type="number" id="input1" placeholder="3,000,000"><span>원</span></div>
      <div class="textt">육아휴직 기간</div>
      <div class="inputtext2"><input type="number" id="input2" placeholder="3"><span>개월</span></div>
      <pre>
        ※통상임금은 연장근로수당, 야근수당, 휴일근로수당, 상여금 등의 부수적으로 붙는 수입은 제거한 정기적이고 일률적, 고정적으로 지급되는 금액을 말합니다.
      </pre>
      <button type="button" id="calculateButton">
        계산하기
      </button>
    </div>
    <div class="ads_wrap ads_main_big">
      <ins class="adsbygoogle"
        data-ad-client="ca-pub-5441250633929933"
        data-ad-slot="2028954353"
        data-language="ko"
        ></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <div class="resultbox" style="display: none;">
      <img src="./img/arrow.png" alt="">
      <div class="calbox">
        <div class="textt">실제 수령 받는 육아휴직급여</div>
        <div class="result1"></div>
        <div class="textt">육아휴직급여 사후지급금</div>
        <div class="result2"></div>
        <pre>
          ※육아휴직 급여는 육아휴직 기간 내에 통상임금의 80%입니다. 상한액은 150만원, 하한액은 70만원으로 예를들어 통상임금이 200만원일 경우 80%는 160만원이므로 상한액 150만원에 기준점이 맞춰져 금액이 환산됩니다.
        </pre>
      </div>
    </div>
  </section>
  <script>
document.addEventListener("DOMContentLoaded", function() {
  const input1 = document.getElementById("input1");
  const input2 = document.getElementById("input2");
  const result1 = document.querySelector(".result1");
  const result2 = document.querySelector(".result2");
  const calculateButton = document.getElementById("calculateButton");
  const resultbox = document.querySelector(".resultbox");

  calculateButton.addEventListener("click", function() {
    const inputValue1 = parseFloat(input1.value);
    const inputValue2 = parseFloat(input2.value);

    // 입력값 유효성 검사
    if (isNaN(inputValue1) || isNaN(inputValue2)) {
      alert("올바른 숫자를 입력하세요.");
      return; // 함수 종료
    }

    // 80% 계산
    let calculatedValue = inputValue1 * 0.8;
    // 상한액과 하한액 적용
    calculatedValue = Math.max(700000, Math.min(1500000, calculatedValue));
    realcalculatedValue = calculatedValue * 0.75
    result1.textContent = realcalculatedValue.toLocaleString() + "원";

    // 계산식2 (예시)
    let calculatedValue2 = calculatedValue * 0.25 * inputValue2;
    result2.textContent = Math.max(0, calculatedValue2).toLocaleString() + "원";

    // resultbox를 표시
    resultbox.style.display = "block";
  });
});

  </script>
</body>
</html>