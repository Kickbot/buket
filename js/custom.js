jQuery(document).ready(function(){
  var top1 = jQuery('#top1').offset().top;
  var top2 = jQuery('#top2').offset().top;
  var top3 = jQuery('#top3').offset().top;
  var top4 = jQuery('#top4').offset().top;
  var top5 = jQuery('#top5').offset().top;

  jQuery('#top1').click(function(){
    // Scroll down to 'catTopPosition'
    jQuery('html, body').animate({scrollTop:top1 + 680}, 'slow');
    return false;
  });
  jQuery('#top2').click(function(){
    // Scroll down to 'catTopPosition'

    jQuery('html, body').animate({scrollTop:top2 + 1480}, 'slow');
    return false;
  });
  jQuery('#top3').click(function(){
    // Scroll down to 'catTopPosition'

    jQuery('html, body').animate({scrollTop:top3 + 2060}, 'slow');
    return false;
  });
  jQuery('#top4').click(function(){
    // Scroll down to 'catTopPosition'

    jQuery('html, body').animate({scrollTop:top4 + 2920}, 'slow');
    return false;
  });
  jQuery('#top5').click(function(){
    // Scroll down to 'catTopPosition'

    jQuery('html, body').animate({scrollTop:top5 + 4300}, 'slow');
    return false;
  });

  // инициализируем карусель
  $("#carousel").waterwheelCarousel({
    // option: value
  });


  // таймер обратного отсчета 1
  jQuery(function(){
    var note = jQuery('#note'),
      ts = new Date(2012, 10, 1),
      newDate = true;
    if((new Date()) > ts){
      // Задаем точку отсчета для примера. Пусть будет очередной Новый год или дата через 10 дней.
      // Обратите внимание на *1000 в конце - время должно задаваться в миллисекундах
      ts = (new Date()).getTime() + 7*24*60*60*1000;
      newYear = false;
    }

    $('#countdown').countdown({
      timestamp	: ts,
      callback	: function(days, hours, minutes, seconds){

        var message = "";

        message += "Дней: " + days +", ";
        message += "часов: " + hours + ", ";
        message += "минут: " + minutes + " и ";
        message += "секунд: " + seconds + " <br />";

        if(newDate){
          message += "осталось до окончания акции!";
        }
        else {
          message += "осталось до момента через 7 дней!";
        }

        note.html(message);
      }
    });

  });
  // таймер обратного отсчета 2
  jQuery(function(){
    var note = jQuery('#note'),
      ts = new Date(2012, 10, 1),
      newDate = true;
    if((new Date()) > ts){
      // Задаем точку отсчета для примера. Пусть будет очередной Новый год или дата через 10 дней.
      // Обратите внимание на *1000 в конце - время должно задаваться в миллисекундах
      ts = (new Date()).getTime() + 7*24*60*60*1000;
      newYear = false;
    }

    $('#countdown1').countdown({
      timestamp	: ts,
      callback	: function(days, hours, minutes, seconds){

        var message = "";

        message += "Дней: " + days +", ";
        message += "часов: " + hours + ", ";
        message += "минут: " + minutes + " и ";
        message += "секунд: " + seconds + " <br />";

        if(newDate){
          message += "осталось до окончания акции!";
        }
        else {
          message += "осталось до момента через 7 дней!";
        }

        note.html(message);
      }
    });

  });
  // таймер обратного отсчета 3
  jQuery(function(){
    var note = jQuery('#note'),
      ts = new Date(2012, 10, 1),
      newDate = true;
    if((new Date()) > ts){
      // Задаем точку отсчета для примера. Пусть будет очередной Новый год или дата через 10 дней.
      // Обратите внимание на *1000 в конце - время должно задаваться в миллисекундах
      ts = (new Date()).getTime() + 7*24*60*60*1000;
      newYear = false;
    }

    $('#countdown2').countdown({
      timestamp	: ts,
      callback	: function(days, hours, minutes, seconds){

        var message = "";

        message += "Дней: " + days +", ";
        message += "часов: " + hours + ", ";
        message += "минут: " + minutes + " и ";
        message += "секунд: " + seconds + " <br />";

        if(newDate){
          message += "осталось до окончания акции!";
        }
        else {
          message += "осталось до момента через 7 дней!";
        }

        note.html(message);
      }
    });

  });
  // таймер обратного отсчета 4
  jQuery(function(){
    var note = jQuery('#note'),
      ts = new Date(2012, 10, 1),
      newDate = true;
    if((new Date()) > ts){
      // Задаем точку отсчета для примера. Пусть будет очередной Новый год или дата через 10 дней.
      // Обратите внимание на *1000 в конце - время должно задаваться в миллисекундах
      ts = (new Date()).getTime() + 7*24*60*60*1000;
      newYear = false;
    }

    $('#countdown3').countdown({
      timestamp	: ts,
      callback	: function(days, hours, minutes, seconds){

        var message = "";

        message += "Дней: " + days +", ";
        message += "часов: " + hours + ", ";
        message += "минут: " + minutes + " и ";
        message += "секунд: " + seconds + " <br />";

        if(newDate){
          message += "осталось до окончания акции!";
        }
        else {
          message += "осталось до момента через 7 дней!";
        }

        note.html(message);
      }
    });

  });
});
