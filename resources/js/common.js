/* expand panel */
const blockArrowName = 'data-point-arrow';
const blockBodyName = 'data-point-hide-panel';

const blockWrapper = '[data-point-parent]';
const blockLink = '[data-point-link]';
const blockArrow = '[' + blockArrowName + ']';
const blockBody = '[' + blockBodyName + ']';

function changeArrowDirection (arrow, from, to) {
  const arrowClass = $(arrow).attr(blockArrowName);
  const sFrom = arrowClass + "-" + from;
  const sTo = arrowClass + "-" + to;
  if (arrow.hasClass(sFrom)) {
    arrow.removeClass(sFrom).addClass(sTo);
  }
}

function arrowUp (obj) {
  changeArrowDirection (obj, 'down', "up");
}

function arrowDown (obj) {
  changeArrowDirection (obj, "up", 'down');
}

function changePanelStatus (obj, state) {
  const panelClass = $(obj).attr(blockBodyName);
  const remove = ("hidden" == state) ? "visible" : "hidden";
  
  obj.removeClass(panelClass + "-" + remove).addClass(panelClass + "-" + state);
}

function showPanel(obj) {
  changePanelStatus(obj, "visible");
}
function hidePanel(obj) {
  changePanelStatus(obj, "hidden");
}

/* END expand panel */


/* button scroll top */
(function() {
  let button = $('.arrow-cycle--top');
  
  /* show button only page Hight > screen */
  $(window).on('scroll', () => {
    ($(window).scrollTop() >= 50) ? button.fadeIn() : button.fadeOut();
  });
  
  button.on('click', (e) => {
    e.preventDefault();
    $('html').animate({scrollTop: 0}, 1000);
  });
})();

// VISIBLE ELM
function checkAnimElmVisible($oObj) {

  const animItemHeight = $oObj.outerHeight();
  const offset = $oObj.offset();
  const animItemOffset = offset.top;
  const pageYOffset = $(window).scrollTop();

  const animStart = 4;
  const windowInnerHeight = $(window).innerHeight();

  let currentHeight = (animItemHeight > windowInnerHeight) ? windowInnerHeight : animItemHeight;
  let animItemPoint = windowInnerHeight - currentHeight / animStart;

  return (pageYOffset > (animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight));
}
function setElmAnimOnce ($oObj) {
  if (!$oObj.hasClass('_anim-no-hide')) {
    $oObj.removeClass("_active");
    $oObj.find('._anim-show').removeClass("_anim-active");
  }
}
function setElmAnim ($oObj) {
  $oObj.addClass("_active");
  $oObj.find('._anim-show').addClass("_anim-active");
}
function animMonitoring($className = "_anim-items") {
  $('.' + $className).each(function(index) {
    var bVisible = checkAnimElmVisible($(this));
    if(bVisible){
      setElmAnim($(this));
    } else {
      setElmAnimOnce($(this));
    }
  });
}

// AUTOLOAD BY SCROLL
$( window ).on( "scroll", function() {
 animMonitoring();
});

/* expand panel */
$(blockLink).click(function() {
  const parent = $(this).closest(blockWrapper);
  const arrow = parent.find(blockArrow);
  const panel = parent.find(blockBody);
  
  if ($(panel).css("visibility") == "visible") {
    arrowDown (arrow);
    hidePanel(panel);
  } else {
    parent.siblings(blockWrapper).each(function(){
      arrowDown ($(this).find(blockArrow));
      hidePanel($(this).find(blockBody));
    });
    arrowUp (arrow);
    showPanel(panel);
  }
});


/* burger */
$('#burger-menu').click(function() {
  $('.header__menu').addClass('header__menu-modal--visible');
});

$('#burger-menu-close').click(function() {
  $('.header__menu').removeClass('header__menu-modal--visible');
});
/* END burger */


/* popup  */
$('.popup-close-button').on('click', function() {
  $(this).closest('.popup').fadeOut();
});

$('.popup_click').on('click', function() {
  $('#' + $(this).attr('id') + '_popup').fadeIn();
});
/* END popup  */


$('.tabs__item').click(function() {
  const className = '_active';
  
  const iIndex = $(this).index();
  const sTabPref = $(this).attr('data-item');
  const sItem = sTabPref + '__item';
  const sContentItem = sTabPref + '__content-item';
  
  const parent = $(this).closest('.' + sTabPref);
  const tabContentList = parent.find('.' + sContentItem)[iIndex];

  /* reset data */
  parent.find('.' + sItem).removeClass(className);
  parent.find('.' + sContentItem).removeClass(className);
  
  /* set active */
  $(this).addClass(className);
  $(tabContentList).addClass(className);
});

function appearPanel(sPref, sDirection) {
  $('.' + sPref + '__link').click(function() {
    const move = sPref + '__move-' + sDirection;

    $(this).parent('div').find('.' + sPref + '__content').removeClass(move);
    $('#' + $(this).attr('id') + '_descr').addClass(move);
  });
}

appearPanel('appear-panel', 'left');



