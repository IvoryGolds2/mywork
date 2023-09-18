function toggleContent(subtitle) {
  var contentElements = document.querySelectorAll('.contentBox3');
  
  for (var i = 0; i < contentElements.length; i++) {
    contentElements[i].style.display = 'none';
  }
  
  var contentToShow = document.querySelectorAll('[data-subtitle="' + subtitle + '"]');
  
  for (var i = 0; i < contentToShow.length; i++) {
    contentToShow[i].style.display = 'block';
  }

  var allSubtitleElements = document.querySelectorAll('.subtitle');
  for (var i = 0; i < allSubtitleElements.length; i++) {
    allSubtitleElements[i].classList.remove('subtitle-toggled');
  }

  var clickedSubtitleElement = document.getElementById('subtitle-' + subtitle);
  clickedSubtitleElement.classList.add('subtitle-toggled');
}

window.onload = function() {
  var firstSubtitleElement = document.querySelector('.subtitle');
  var firstSubtitleID = firstSubtitleElement.id.replace('subtitle-', '');
  toggleContent(firstSubtitleID);
};