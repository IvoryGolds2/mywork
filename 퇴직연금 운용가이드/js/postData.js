function postDataContentA(category) {

  const formA = document.createElement('form');
  formA.classList.add('off');
  formA.action = './contenta.php';
  formA.method = 'POST';

  const inputA = document.createElement('input');
  inputA.name = 'category';
  inputA.value = category;

  formA.appendChild(inputA);
  document.body.appendChild(formA);
  formA.submit();
}

function postDataContentB(category) {
  
  const formB = document.createElement('form');
  formB.classList.add('off');
  formB.action = './contentb.php';
  formB.method = 'POST';
  
  const inputB = document.createElement('input');
  inputB.name = 'category';
  inputB.value = category;
  
  formB.appendChild(inputB);
  document.body.appendChild(formB);
  formB.submit();
}

function postDataContentC(category) {
  
  const formC = document.createElement('form');
  formC.classList.add('off');
  formC.action = './contentc.php';
  formC.method = 'POST';
  
  const inputC = document.createElement('input');
  inputC.name = 'category';
  inputC.value = category;
  
  formC.appendChild(inputC);
  document.body.appendChild(formC);
  formC.submit();
}
