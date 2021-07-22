function call() {
  var msg = $(`#form_box`).serialize();
  //alert(msg);
  $.ajax({
    type: 'POST',
    url: '/mail.php',
    data: msg,
    success: function(data) {
        console.log("excellent!")
    },
    error:  function(xhr, str){
        console.log(choice);
        console.log(msg);
        //alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}

if($('#gallery_1').children(".gallery_item_1").css("flex") == "0 0 100%") {
  $(".gallery_item_2").hide();
  $(".gallery_item_3").hide();
}
else {
  let z = `<video id="video" muted autoplay="autoplay" loop="loop" preload="auto" poster="./img/preview.png">
  <source src="./img/video.mp4" type="video/mp4"></source>
  <source src="./img/video.webm" type="video/webm"></source>
  </video>`;
  $("#video-bg").html(z);
}

const time_out = 400;

function g_toggle(scroll, direction) {

  if (($(scroll).children(".gallery_item_1").css("flex") == "0 0 100%") && (direction == 'forward')) {

      let x = $(scroll).children(".mobile_visible");

      if ($(scroll).children(".mobile_visible").next().length == 0) {
        $(scroll).children(".gallery_item_1").addClass("mobile_visible").show();
      }
      else {
        $(scroll).children(".mobile_visible").next().addClass("mobile_visible").show();
      }

      x.removeClass("mobile_visible").hide();

  }
  else if (($(scroll).children(".gallery_item_1").css("flex") == "0 0 100%") && (direction == 'backward')) {

    let y = $(scroll).children(".mobile_visible");

    if (y.hasClass("gallery_item_1")) {
      $(scroll).children().last(".mobile_visible").addClass("mobile_visible").show();
    }
    else {
      $(scroll).children(".mobile_visible").prev().addClass("mobile_visible").show();
    }

    y.removeClass("mobile_visible").hide();

  }
  else {
    $(scroll).children(".gallery_item").fadeToggle(time_out);
  }
}

function dimension_changed() {
  let dimension = $( "input[type=text][name=form_p]" ).val();
  dimension = dimension.replaceAll('x', '*').replaceAll(',', '.');
  $( "input[type=text][name=form_v]" ).val((eval(dimension).toFixed(3)));
}
