
$(document).ready(function(){
  const sGallery = "gallery__wrapper";
  const sGalleryBody = "gallery__body";
  const sGalleryLegend = "gallery__legend";
  
  const sGalleryArrow = "gallery__arrow";
  
  const sGalleryFrame = "gallery__frame";
  const sGalleryList = "gallery__list";
  const sGalleryListItem = "gallery__item";
  
  const sGalleryArrowInactive = '_arrow-inactive';
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
  
  $('.' + sGallery).each(function(){
    const oGallery = $(this);
    const oFrame = oGallery.find("." + sGalleryFrame);
    const oList = oGallery.find("." + sGalleryList);
    
    const frameW = Math.round($(oList).innerWidth());
    const realW = Math.round($(oList).prop('scrollWidth'));
    const iChildern = oList.children().length;
    
    let step = frameW;
    
    const oLegend = oGallery.find('.' + sGalleryLegend);
    let legendChildren = $(oLegend).children();
    
    let bLock = false;
  
    
    /* navigation */
    if (realW <= frameW) {
      hideNavigationTools(oGallery);
      
    } else {
      step = getStepWidth(realW, frameW, iChildern);
      
      /* legend */
      if (legendChildren.length === 1) {
        let legendCount = Math.floor(realW / step);
        
        /* append legend*/
        for (let i = 1; i < legendCount; i++) {
          $(oLegend).append($(legendChildren).prop('outerHTML'));
        }

        /* set active legend item*/
        $(oLegend).children().first().addClass(sGalleryLegendItemFilled);
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
            setArrowStatus(oGallery.find('[data-arrow-cycle-left]'), (($(oList).offset().left * -1 ) > $(oFrame).offset().left));
            setArrowStatus(oGallery.find('[data-arrow-cycle-right]'), ((realW - ($(oList).offset().left * -1) - step)  >= step));
            
            /* refresh legend */
            let currentLegendItem = $(oLegend).find("." + sGalleryLegendItemFilled);
            currentLegendItem.removeClass(sGalleryLegendItemFilled);
            if (bDirectionRight) {
              currentLegendItem.next().addClass(sGalleryLegendItemFilled);
            } else {
              currentLegendItem.prev().addClass(sGalleryLegendItemFilled);
            }

            bLock = false;
          }, 500);

        }
      });
    }
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
