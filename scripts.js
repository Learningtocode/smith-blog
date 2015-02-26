/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
 
 $("document").ready(function() {  
     //The accordion makes the h4s the headers.
     $('#superHuman').accordion({header: "h4"}); 
     //This Carrot class makes the font color blue.
     $(".Carrot").css("color", "light green"); 
     //Rabbit class also applies to css making the font color gold as stated below.
     $(".Rabbit").css("color","violet");  
     //Mouseover changes the words when you hover over the text. When you hover out, it is replaced by the original text.
     $("h1").bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe); 
     //When you click the alert button, a box pops up with a message (which is the alert).
     $('#1').bind('click', alertButtonClick); 
     //ReplaceWHtml adds text 
     $('#3').bind('click', replaceWHtml);  
     //ReplaceWHtml adds texts as well.
     $('#2').bind('click', replaceWText); 
     //addaPara like the code infers, it adds a paragraph text onto your brower.
     $('#ham').bind('click', addAPara); 
     //RemoveAPara takes away the paragrgaph that is on the web brower.
     $('#cat').bind('click', removeAPara);  
     //HidetheImage is an animation that makes the image expand and fade away.
     $('#hidelogo').bind('click', hideTheImage); 
     //This class makes the image appear when you click the button.
     $('#showlogo').bind('click', showTheImage);
     
    // $(".background").css("background-image", "url()");
 });

function mouseOverMe() { 
    //The text will be replaced with the the word "Up" once mouse hovers over it.
    $("h1").html("Jquery Page");
}
 
function mouseOutMe(){ 
    //Once you hover out of the text, the word "what" will replace the previous text.
    $("h1").html("Kiera's");
} 
 
function alertButtonClick(){ 
    //In the alert box, a message will show.
    alert("This is an example of an alert button. You might of seen this used before.");
}  
 
function replaceWHtml(){ 
    //ReplaceWHtml actually changes the words to the tag that encloses the word.
    $('#love').html('<h6>This is how I feel about this project.</h6>');
} 
 
function replaceWText(){ 
    //<h6> and </h6> will show up on the brower.
    $('#dog').text('You can call upon text to show up on your screen ');
}
 
function addAPara(){  
    //Append inserts content at the end of the selected element.
    $('#bird').append('<p>This is to add a paragraph to your web brower</p>');
} 
 
function removeAPara(){ 
    //I can remove the last paragraph by clicking this button (p:last)
    $('#bird p:last').remove();
} 
 
 function hideTheImage(){ 
     //Puff is the specific animation action preformed.
     $('#logo').hide('puff', {}, 2500);
 } 
  
  function showTheImage(){ 
      //2500 is I believe sonewhat of  timer.
     $('#logo').show('fold', {}, 2500);
  }