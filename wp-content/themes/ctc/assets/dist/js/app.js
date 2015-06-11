$(function(){
  var textBefore = "Play";
  var textAfter = "Make";
  var $input = $('input.animated')
  $input.val(textBefore);
  function backspace(){
    //$input.val(textBefore);
    $input.removeClass('highlight');
    var currText = textBefore;
    //$input.focus();
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
    }, 180);
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
        setTimeout(function(){
          $input.val(textBefore);
          setTimeout(function(){  
            backspace();
          }, 1000);
        }, 1000);
      }
    }, 250);
  }
  setTimeout(backspace, 1500);
})