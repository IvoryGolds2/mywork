function postDataContent(category) {
  const form = document.createElement('form');
  form.classList.add('off');
  form.action = './content.php';
  form.method = 'POST';

  const input = document.createElement('input');
  input.name = 'category';
  input.value = category;

  form.appendChild(input);
  document.body.appendChild(form);
  form.submit();
}
function postDataContentSub(category) {
  const formSub = document.createElement('form');
  formSub.classList.add('off');
  formSub.action = './sub.php';
  formSub.method = 'POST';

  const inputSub = document.createElement('input');
  inputSub.name = 'category';
  inputSub.value = category;

  formSub.appendChild(inputSub);
  document.body.appendChild(formSub);
  formSub.submit();
}