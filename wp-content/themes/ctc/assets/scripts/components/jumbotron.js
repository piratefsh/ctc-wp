$(function(){
  var $inputs = $('input.animated');
  
  function backspace($input){
    $input.removeClass('highlight');
    var currText = $input.attr('data-text-before');
    var textAfter = $input.attr('data-text-after');
    $input.val(currText);

    setTimeout(function(){
      var interval = setInterval(function(){
        if(currText){
          currText = currText.substring(0, currText.length - 1);
          $input.val(currText);
        }
        else{
          clearInterval(interval);
          setTimeout(function(){
            typeIn($input, textAfter);
          }, 800);
          
        }
      }, 200);
    },1500)
  }
  
  function typeIn($input, message){
    $input.addClass('highlight');
    var currMessage = '';
    var interval = setInterval(function(){
      if(currMessage !==  message){
        currMessage = message.substring(0, currMessage.length + 1);
        $input.val(currMessage);
      } 
      else{
        clearInterval(interval);
        $('.tagline').removeClass('hide');
        setTimeout(function(){    
          $input.blur();   
        }, 3000);
      }
    }, 250);
  }

  $inputs.each(function(index){
    console.log(index)
    var elem = this
    backspace($(elem));
    setInterval(function(){
      backspace($(elem));
    }, 6000)
  });

})