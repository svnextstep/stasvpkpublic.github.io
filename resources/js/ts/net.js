
$(document).ready(function(){
  let oNetInitFunc = {
    data_transfer_init(oNetWrapper) {
      const wrapperOff = $(oNetWrapper).offset();

      const map = oNetWrapper.find('.map__block');
      const svgBlock = oNetWrapper.find(".cameras-transfer");
      const svgPattern = oNetWrapper.find(".transfer-svg");
      svgPattern.attr('width', map.width());
      svgPattern.attr('height', map.height());


      function transfer2Office(oCamera, index, forestryId, oOffice) {
        const cameraOffs = oCamera.offset();
        const cameraL = parseInt(cameraOffs.left - wrapperOff.left);
        const cameraT = parseInt(cameraOffs.top - wrapperOff.top);

        const officeOffs = oOffice.offset();
        const officeL = parseInt((officeOffs.left - wrapperOff.left) + oOffice.width() / 2);
        const officeT = parseInt(officeOffs.top - wrapperOff.top + oOffice.height() / 2);

        const transfer = svgPattern.clone().appendTo(svgBlock);

        const mpath = transfer.find('mpath');
        const path = transfer.find('path');
        const idPath = oNetWrapper.attr("id") + "_" + forestryId + "_" + index + " " + oOffice.attr("id");

        path.attr("id", idPath);// id="track"
        path.attr("d", "M " + cameraL + "," + cameraT + " L " + officeL + "," + officeT);
        mpath.attr("xlink:href", "#" + idPath);//xlink:href="#track"

      }

      const centralOffice = oNetWrapper.find('.central-office');

      oNetWrapper.find('.forestry').each(function() {
        const forestryId = $(this).attr("id"); //id="central-forestry_1"
        const office = $(this).find('.forestry__office');

        $(this).find(".camera__body").each(function(i) {
          transfer2Office($(this), i, forestryId, $(office));
          if ($(centralOffice).length == 1) {
            transfer2Office($(this), i, forestryId, $(centralOffice));
          }
        });  
      });
    }
  };
  
  function reload_cameras_transfer() {
    if ($(".cameras-transfer").length) {
      $(".cameras-transfer").empty();
      $('[data-init-action]').each(function() {
        let funcName = $(this).attr('data-init-action') + "_init";

        if (typeof oNetInitFunc[funcName] === 'function') {
          oNetInitFunc[funcName]($(this));
        }
      });
    }
  }
  
  $('[data-init-action]').each(function() {
    
    let funcName = $(this).attr('data-init-action') + "_init";

    if (typeof oNetInitFunc[funcName] === 'function') {
      oNetInitFunc[funcName]($(this));
    }
  });

  $( window ).on( "resize", function() {
    reload_cameras_transfer();
  });

  $('.tabs__item').on('click', function() {
    reload_cameras_transfer();
  });
  
});
