$(function(){
	
	var accordion = function() {

		$('.accordion .accordion-item').first().find('.accordion-head').addClass('open');
		$('.accordion .accordion-item').first().find('.accordion-body').show();

		$('.accordion-head').click(function(event) {
			if ($(this).hasClass('open')) {
				$('.accordion-body').slideUp();
				$('.accordion-head').removeClass('open');
			} else {
				$('.accordion-body').slideUp();
				$('.accordion-head').removeClass('open');
				console.log(123);
				$(this).next().slideDown();
				$(this).addClass('open');
			}
		});

	}();
	
	
 
});



//     var $r = $('input[type="range"]');
// var $ruler = $('<div class="rangeslider__ruler" />');

// // Initialize
// $r.rangeslider({
//   polyfill: false,
//   onInit: function() {
//     $ruler[0].innerHTML = getRulerRange(this.min, this.max, this.step);
//     this.$range.prepend($ruler);}
// });

// function getRulerRange(min, max, step) {
//     var range = '';
//     var i = 0;
    
//     while (i <= max) {
//       range += i + ' ';
//       i = i + 4;
//     }
//     return range;
//   }
// });

$(window).on("scroll", function() {
    if($(window).scrollTop()) {
          $('nav').addClass('nav-bg');
    }

    else {
          $('nav').removeClass('nav-bg');
    }
})

/* Type-1 */
$('#myCarousel').carousel({
    interval: 4000
  })
  
  $('.carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    var deviceWidth=screen.width;
    if(deviceWidth>767){
        for (var i=0;i<1;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
              }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    }else{
        
    }
    
  });