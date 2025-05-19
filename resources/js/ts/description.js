
$(document).ready(function(){
  
//  $('.how-it-works');
  
  
  
  /* legend for cards */
  $('.how-it-works__legend').children().each(function() {
    const delay = 6000;
    const legendItem = $(this);
    
    setTimeout(function(){
      
    }, (delay * legendItem.index()));

    $(this).click(function() {
      
    });
  });
});
