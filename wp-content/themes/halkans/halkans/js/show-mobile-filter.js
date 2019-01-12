( function() {

var showFilterButton = document.getElementById('mobile-filter-button');
var aside = document.getElementById('secondary');

showFilterButton.addEventListener('click', function(){
  aside.classList.toggle('mobile-hide');

  if (showFilterButton.innerHTML === 'Filter'){
    showFilterButton.innerHTML = 'Hide';
  }
  else {
    showFilterButton.innerHTML = 'Filter';
  }
})
} )();
