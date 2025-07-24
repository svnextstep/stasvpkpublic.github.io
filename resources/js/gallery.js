
$(document).ready(function(){
  const sGallery = "gallery__wrapper";
  const sNumericLegend = "numericLegend";
  const sGalleryBody = "gallery__body";
  const sGalleryLegend = "gallery__legend";
  
  const sGalleryArrow = "gallery__arrow";
  
  const sGalleryFrame = "gallery__frame";
  const sGalleryList = "gallery__list";
  const sGalleryListItem = "gallery__item";
  
  const sGalleryArrowInactive = '_arrow-inactive';
  const sGalleryLegendItem = 'legend__item';
  const sGalleryLegendItemFilled = 'legend__item--filled';
  
  const checkStepsLeft = function(oFrame, oList) {
    return Math.round(Math.abs( $(oList).offset().left - $(oFrame).offset().left ));
  };
  
  const getStepWidth = function(realW, frameW, iChildern) {
    const itemW = realW / iChildern;
    return (frameW <= itemW) ? itemW : Math.floor(frameW / itemW) * itemW;
  };
  
  const setArrowStatus = function(oArrow, bRemoveClass) {
    if(bRemoveClass) {
      oArrow.removeClass(sGalleryArrowInactive);
    } else if (!(oArrow.hasClass(sGalleryArrowInactive))) {
      oArrow.addClass(sGalleryArrowInactive);
    }
  };
  
  const hideNavigationTools = function(oGallery){
    oGallery.find('.' + sGalleryArrow).each(function() {
      $(this).css('opacity', 0);
    });
    oGallery.find("." + sGalleryLegend).css('opacity', 0);
  };
  
  const refreshLegend = function(oList, oLegend, step) {
    const activeLegend = ($(oList).offset().left < 0 ) ? Math.round(Math.abs($(oList).offset().left) / step) : 0;
  
    if (oLegend.find(".num").length) {
      oLegend.find(".num").html(activeLegend + 1);
      
    } else {
      $(oLegend).find("." + sGalleryLegendItemFilled).removeClass(sGalleryLegendItemFilled);
      $(oLegend).children().eq(activeLegend).addClass(sGalleryLegendItemFilled);     
    }
  };
  
  const makeGallery = function(oGallery) {
    let bLock = false;
    const bNumericLegend = oGallery.hasClass(sNumericLegend);
    const oFrame = oGallery.find("." + sGalleryFrame);
    const oList = oGallery.find("." + sGalleryList);
    
    const frameW = Math.round($(oFrame).innerWidth());
    const step =  frameW;
    
    const iChildern = oList.children().length;
    const childW = $(oList).children().first().innerWidth();
    const items = Math.round(frameW / (childW + 20));
    const itemW = frameW / items;
    const realW = iChildern * itemW;
    
    /* correct list/items size*/
    oList.css("width", realW);
    
    if (frameW < childW) {
      let margin = 2;
      let w = frameW - margin * 2;
     
      oList.children().each(function() {
        $(this).css("min-width", w);
        $(this).css("width", w);
        $(this).css("margin-inline", margin);
      });
    }
    
    /* correct items position */
    if ( $(oList).offset().left < $(oFrame).offset().left ) {
      const countStepsLeftSide = (Math.abs($(oList).offset().left) + $(oFrame).offset().left) / step;
      
      if (!Number.isInteger(countStepsLeftSide)) {
        $(oList).css('transform', 'translate3d(-' + ( step * Math.floor(countStepsLeftSide) ) + 'px, 0px, 0px)');
      }
    }
    
    setTimeout(function() {
      /* navigation */
      if (realW <= frameW) {
      hideNavigationTools(oGallery);
      
    } else {
      const oLegend = oGallery.find('.' + sGalleryLegend);
      
        /* legend */
        
        const legendCount = Math.ceil(realW / step);
        $(oLegend).empty();

        if (legendCount !== 1) {
          
          if (!bNumericLegend) {
            /* append legend*/
            for (let i = 1; i <= legendCount; i++) {
              $(oLegend).append($('<div/>').addClass(sGalleryLegendItem));
            }
          } else {
            $(oLegend).append($('<div/>').addClass("num"));
            $(oLegend).append($('<div/>').html(" из "+ legendCount));
          }
          
          /* set active legend item*/
          refreshLegend(oList, oLegend, step);
        }


       
      /* arrow listen*/
      oGallery.find('.' + sGalleryArrow).click(function(){

        if (!bLock && !($(this).hasClass(sGalleryArrowInactive))) {
          const bDirectionRight = $(this).attr('data-arrow-cycle-left') === undefined;
          const existSteps = checkStepsLeft(oFrame, oList);
          let move = (bDirectionRight) ? step + existSteps : Math.abs(step - existSteps);
          bLock = true;

          /* move list */
          $(oList).css('transform', 'translate3d(-' + move + 'px, 0px, 0px)');
          
          setTimeout(function(){
            
            /* refresh arrow */
            setArrowStatus(oGallery.find('[data-arrow-cycle-left]'), (Math.abs($(oList).offset().left) > $(oFrame).offset().left));
            setArrowStatus(oGallery.find('[data-arrow-cycle-right]'), ((realW - Math.abs($(oList).offset().left) - step)  >= itemW));
            
            /* refresh legend */
            refreshLegend(oList, oLegend, step);
            bLock = false;
          }, 1000);

        }
      });
    }
    }, 500);
  };
  
  $( window ).on( "orientationchange", function() {
    
    $('.' + sGallery).each(function(){
      makeGallery($(this));
    });
  });
  
  $('.' + sGallery).each(function(){
    makeGallery($(this));
  });
  
  const legendWork = function(oItem) {
    const cardsList = oItem.closest('[data-legend-parent]').find('[data-legend-watch]').children();
    const index = oItem.index();
    const time = 2000;
    oItem.siblings().each(function() {
      $(this).css('background-color', 'transparent');
    });
    cardsList.each(function() {
      $(this).fadeOut(time);
    });
    
    oItem.css('background-color', 'white');
    cardsList.eq(index).fadeIn(time);
  };
  
  /* legend for cards */
  $('[data-legend]').children().each(function() {
    const delay = 6000;
    const legendItem = $(this);
    
    setTimeout(function(){
      legendWork(legendItem);
    }, (delay * legendItem.index()));

    $(this).click(function() {
      legendWork($(this));
    });
  });
});
