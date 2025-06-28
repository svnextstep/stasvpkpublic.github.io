
$(document).ready(function(){
  
  function mapDesc(index, descrItems) {
    const actionDelay = 5000 * index;
    
    setTimeout(function(){
      const item = descrItems.eq(index);
     
      descrItems.each(function() {
        $(this).css({
          'opacity': '0.4',
          'height': '60px',
          'overflow': 'hidden'});
      });
      item.css({'opacity': '1', 'height': 'auto'});
      
    }, actionDelay);
    return actionDelay;
  }

  // INTERACTIVE MAP
  
  function ts_net(oMap) {//'.map__block, .forest-map'
    oMap.find('.camera-watch__area').addClass('_active');
  }
  // resize
  function demo_map_size(oMap, iTurnCycle) {
    const actionDelay = iTurnCycle / 3;
    
    setTimeout(function(){
      oMap.removeClass('_before_expansion').addClass('_reduce');//0.8s
      
      setTimeout(function(){ 
        oMap.removeClass('_reduce').addClass('_expansion');
        
        setTimeout(function(){
          oMap.addClass('_move-left');
        }, actionDelay);
      }, actionDelay);
    }, actionDelay);
  }
  // handle control 
  function demo_handle_cameras(reviewForest, sIdCamera, iTurnCycle) {
    const oCamera = $('#' + sIdCamera);
    oCamera.removeClass('_active').addClass('_highlight handle_camera_slowly');//13000
      
    setTimeout(function(){
      reviewForest.addClass('_visible');
    }, (iTurnCycle * 0.3));//4000
    
    setTimeout(function(){
      reviewForest.addClass('_move-left');//5s ease 0.5s
    }, (iTurnCycle * 0.3 + 100));//4100
    
    setTimeout(function(){
      reviewForest.removeClass('_move-left');
      reviewForest.addClass('_left--fixed');
    }, (iTurnCycle * 0.6));//10000
    
    setTimeout(function(){
      reviewForest.addClass('_expansion');//0.8s
    }, (iTurnCycle * 0.6 + 200));//10200
    
    setTimeout(function(){
      reviewForest.addClass('_move-top');//1.5s
    }, (iTurnCycle * 0.7));//11250
    
    setTimeout(function(){
      reviewForest.removeClass('_visible _expansion _move-top');
    }, iTurnCycle);
  }
  // fix fire
  function demo_fix_fire(oMap, iTurnCycle) {
    const oFire = oMap.find('.fire-art');
    if (oFire.length){
      const parent = oFire.parent();
      
      // show FIRE
      setTimeout(function(){
        parent.find(".fire-art").addClass('_active');
      }, 3000);
      
      // show LINE
      setTimeout(function(){
        parent.find('.fire-point-y').addClass('_active');//5s
        parent.find('.fire-point-x').addClass('_active');
      }, iTurnCycle);

    }
  }
  // reboot tv map
  function clear_interactive_map(oMap) {
    oMap.removeClass('_move-right_down').addClass('_before_expansion').find('._active').removeClass('_active');
  }
  
  // start map
  function start_interactive_map(oMap) {
    const iTurnCycle = 15000;
    const descrItems = $('.map-descr').children();
    const reviewForest = $('.review-forest');
    
    clear_interactive_map(oMap);
    setTimeout(function(){
      ts_net(oMap, '.forest-map');
    }, 500);
    
    //SIZE
    mapDesc(0, descrItems);
    
    setTimeout(function(){
      demo_map_size(oMap, ( iTurnCycle * 0.6) ); // 9000  3 times
    }, ( iTurnCycle * 0.1) );//1500 
    
    // HANDLE CAMERA
    setTimeout(function(){
      mapDesc(1, descrItems);
    }, ( iTurnCycle * 0.5));//11250
    
    setTimeout(function(){
      demo_handle_cameras(reviewForest, "handle_camera", iTurnCycle);//15000
    }, iTurnCycle);//15000
    
    // FIX FIRE
    setTimeout(function(){
      mapDesc(2, descrItems);
    }, ( iTurnCycle * 1.2));//33750
    
    setTimeout(function(){
      oMap.removeClass('_move-left').addClass('_move-right_down');//0.8s
    }, ( iTurnCycle * 2));//33750
    
    setTimeout(function(){
      reviewForest.removeClass('_left--fixed');
      reviewForest.addClass('_move-to-smoke _visible');
    }, (iTurnCycle * 2.2));//10200
    
    setTimeout(function(){
      //reviewForest.addClass('_expansion');//1.5s
      reviewForest.find('.review-forest__accent').addClass('_active');
    }, (iTurnCycle * 2.4));//10200
    
    setTimeout(function(){
      reviewForest.removeClass('_move-to-smoke  _visible ');
      reviewForest.addClass('_left--fixed');
      reviewForest.find('.review-forest__accent').removeClass('_active');
    }, (iTurnCycle * 3.2));//34 500
    
    setTimeout(function(){
      demo_fix_fire(oMap, (iTurnCycle * 0.6 ));
    }, (iTurnCycle * 2.6));//34 500

    // show BOTTOM
    setTimeout(function(){
      descrItems.each(function() {
        $(this).css({
          'opacity': '1',
          'height': 'auto',
          'overflow': 'visible'});
      });
      $('#demo_fix_fire').removeClass('_header-increase-bg');
      $('#ts_map_show_again').removeClass('_hide').show();
    }, (iTurnCycle * 3.5));
  }
  
  // INIT
  $("#ts_map_show").click(function(){
    $(this).hide();
    start_interactive_map($('.forest-map'));
  });
  // play again
  $('#ts_map_show_again').click(function(){
    $(this).hide();
    start_interactive_map($('.forest-map'));
  });
  
  // end INTERACTIVE MAP


});
