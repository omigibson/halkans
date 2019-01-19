( function() {

var showFilterButton = document.getElementById('mobile-filter-button');
var aside = document.getElementById('secondary');

if(showFilterButton){
  showFilterButton.addEventListener('click', function(){
    aside.classList.toggle('mobile-hide');

    if (showFilterButton.innerHTML === 'Filter'){
      showFilterButton.innerHTML = 'Hide';
    }
    else {
      showFilterButton.innerHTML = 'Filter';
    }
  })
}

// document.addEventListener('click', function(event) {
//   if (showFilterButton.innerHTML === 'Filter'){
//     if (!event.target.matches('#filter') || !event.target.matches('.filter') || !event.target.matches('#filter .filter input') ){
//       aside.classList.add('mobile-hide');
//     }
//   }
// })
} )();
