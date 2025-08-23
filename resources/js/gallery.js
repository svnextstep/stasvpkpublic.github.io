
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
  const sGalleryCurrentStep = "gallery__current-step";
  const sGalleryCurrentItem = "gallery__current-item";
  let originalStyles = {};
  
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
  
  const refreshLegend = function (oLegend, currentStep) {
    if (oLegend.find(".num").length) {
      oLegend.find(".num").html(currentStep);
      
    } else {
      $(oLegend).find("." + sGalleryLegendItemFilled).removeClass(sGalleryLegendItemFilled);
      $(oLegend).children().eq(currentStep - 1).addClass(sGalleryLegendItemFilled);     
    }
  };
  const refreshArrows = function(oGallery, currentStep, iSteps) {
    setArrowStatus(oGallery.find('[data-arrow-cycle-left]'), currentStep !== 1);
    setArrowStatus(oGallery.find('[data-arrow-cycle-right]'), currentStep  < iSteps);
  };
 
  const getControlData = function(oDiv) {
    return parseInt(oDiv.text());
  };
  
  const setControlData = function (oDiv, value) {
    $(oDiv).empty();
    $(oDiv).append(value);
  };
  
  const makeGallery = function(oGallery) {
    let margin = 20;
    const bNumericLegend = oGallery.hasClass(sNumericLegend);
    
    const oCurrentStep = oGallery.find('.' + sGalleryCurrentStep);
    const oCurrentItem = oGallery.find('.' + sGalleryCurrentItem);
    
    const oFrame = oGallery.find("." + sGalleryFrame);
    const frameW = oFrame.width();
    const step = frameW;
    
    const oList = oGallery.find("." + sGalleryList);
    const iChildern = oList.children().length;
    let childW = oList.children().first().width();
    
    if (frameW < childW) {
      margin = 2;
      childW = frameW - margin;
      oList.children().each(function() {
        $(this).css("min-width", childW);
        $(this).css("width", childW);
      });
    }
    
    let iVisibleItems = Math.floor(frameW / (childW + margin));
    iVisibleItems = (iVisibleItems !== 0 ? iVisibleItems : 1);
    const itemW = frameW / iVisibleItems;
    
    const listW = iChildern * itemW;
    const iSteps = Math.ceil(listW / step);
    
    /* correct list/items size*/
    oList.css("width", listW);
     
    /* CORRECT */
    
    /* items position for resize */
    let passedtStep = 0; 
    if (getControlData(oCurrentStep) !== 0 && getControlData(oCurrentItem) !== 1) {
      passedtStep = getControlData(oCurrentItem) / iVisibleItems;
      passedtStep = (Number.isInteger(passedtStep)) ? passedtStep - 1 : Math.floor(passedtStep);
    }
    
    $(oList).css('transform', 'translate(-' + (passedtStep * step)  + 'px, 0px)');
    setControlData(oCurrentStep, passedtStep + 1);
    
    /* END correct */
    
    /* navigation */
    if (listW <= frameW) {
      hideNavigationTools(oGallery);
      
    } else {
      /* legend */
      const oLegend = oGallery.find('.' + sGalleryLegend);

      $(oLegend).empty();

      if (iSteps !== 1) {

        if (!bNumericLegend) {
          /* append legend*/
          for (let i = 1; i <= iSteps; i++) {
            $(oLegend).append($('<div/>').addClass(sGalleryLegendItem));
          }
        } else {
          $(oLegend).append($('<div/>').addClass("num"));
          $(oLegend).append($('<div/>').html(" из "+ iSteps));
        }

        /* refresh navigation */
        refreshLegend(oLegend, getControlData(oCurrentStep));
        refreshArrows(oGallery, getControlData(oCurrentStep), iSteps);
      }
      
      /* LISTEN arrows*/
      oGallery.find('.' + sGalleryArrow).off("click").on("click", function(){
        
        if (!($(this).hasClass(sGalleryArrowInactive) ) ) {
          const bDirectionRight = $(this).attr('data-arrow-cycle-left') === undefined;

          let fixedCurrentStep = getControlData(oCurrentStep);
          let newCurrentStep = ( Math.abs((bDirectionRight) ? (fixedCurrentStep + 1) : (fixedCurrentStep - 1)) );
          let passingSteps = newCurrentStep - 1;
          
          /* move list */
          $(oList).css('transform', 'translate(-' + (itemW * passingSteps * iVisibleItems) + 'px, 0px)');
          
          /* correct navigation */
          refreshLegend(oLegend, newCurrentStep);
          refreshArrows(oGallery, newCurrentStep, iSteps);
          setControlData(oCurrentStep, newCurrentStep);
          setControlData(oCurrentItem, (passingSteps * iVisibleItems + 1));
        }
      });
    }
  };
  
  $( window ).on( "resize", function() {
    
    $('.' + sGallery).each(function(){
      makeGallery($(this));
    });
  });
  
  $('.' + sGallery).each(function(){
    makeGallery($(this));
  });
  
  $(window).on('beforeprint', function() {
    $('.gallery__list').each(function() {
      originalStyles[$(this)] = {
        width: $(this).css("width"),
        "flex-wrap": "wrap"
      };
      
      $(this).css("width", "100%");
    });
  });
  
  $(window).on('afterprint', function() {
    $('.gallery__list').each(function() {
      $(this).css("width", originalStyles[$(this)].width);
      originalStyles[$(this)] = {};
    });
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
