var offset=80;
$("#myScrollspy ul li a[href^='#']").on('click', function(e) {

    e.preventDefault();

    // $($(this).attr('href'))[0].scrollIntoView();
    // ;
    var hash = this.hash;
   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top - 100
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       // scrollBy(0, -offset);
     });
});