$("nav li>ul").hide();
$("nav li").mouseleave(function (){
  $(this).children("ul").hide();});
$("nav li").mouseenter(function (){
      $(this).children().show();});