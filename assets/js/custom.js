$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});$(document).ready(function(){$(function(){$('.slider .content a, .awards a').lightbox();});});$(document).ready(function(){$('[data-toggle="slide-collapse"]').on('click',function(){$navMenuCont=$($(this).data('target'));$navMenuCont.animate({'width':'toggle'},350);$(".menu-overlay").fadeIn(500);});$(".menu-overlay").click(function(event){$(".navbar-toggle").trigger("click");$(".menu-overlay").fadeOut(500);});});$(document).ready(function(){$('.b-slider').owlCarousel({loop:true,margin:0,autoplay:false,autoplayTimeout:4500,autoplayHoverPause:false,responsiveClass:true,navText:["<i class='la la-arrow-left'></i>","<i class='la la-arrow-right'>"],responsive:{0:{items:1,nav:false,loop:true,autoplay:true,},600:{items:1,nav:true,loop:true,autoplay:true,},1000:{items:1,nav:true,loop:true,autoplay:true,}}})
$('.trinding-slider').owlCarousel({loop:true,margin:25,autoplay:false,autoplayTimeout:5500,autoplayHoverPause:false,responsiveClass:true,navText:["<i class='la la-angle-left'></i>","<i class='la la-angle-right'></i>"],responsive:{0:{items:1,nav:false,loop:true,autoplay:true,},600:{items:1,nav:true,loop:true,autoplay:true,},1000:{items:2,nav:true,loop:true,autoplay:true,}}})
$('.gallery-view').owlCarousel({loop:true,margin:30,autoplay:false,autoplayTimeout:4500,autoplayHoverPause:false,responsiveClass:true,navText:["<i class='la la-angle-left'></i>","<i class='la la-angle-right'></i>"],responsive:{0:{items:2,nav:false,loop:true,autoplay:true,},600:{items:3,nav:true,loop:true,autoplay:true,},1000:{items:4,nav:true,loop:true,autoplay:true,}}})});$(document).ready(function(){$(".dropdown-toggle").hover(function(){$(this).removeAttr('data-toggle');$(this).parent().addClass('show');$(this).next().addClass('show');},function(){var isDropdownHovered=$(this).next().filter(":hover").length;var isThisHovered=$(this).filter(":hover").length;if(isDropdownHovered||isThisHovered){}else{$(this).attr('data-toggle','dropdown');$(this).parent().removeClass('show');$(this).next().removeClass('show');}});$(".dropdown-menu").hover(function(){},function(){var isDropdownHovered=$(this).prev().filter(":hover").length;var isThisHovered=$(this).filter(":hover").length;if(isDropdownHovered||isThisHovered){}else{$(this).parent().removeClass('show');$(this).removeClass('show');}});});$(document).ready(function(){var slider=$('#slider');var thumbnailSlider=$('#thumbnailSlider');var duration=500;slider.owlCarousel({loop:false,nav:false,items:1}).on('changed.owl.carousel',function(e){thumbnailSlider.trigger('to.owl.carousel',[e.item.index,duration,true]);});thumbnailSlider.owlCarousel({loop:false,center:true,nav:false,responsive:{0:{items:3},600:{items:4},1000:{items:4}}}).on('click','.owl-item',function(){slider.trigger('to.owl.carousel',[$(this).index(),duration,true]);}).on('changed.owl.carousel',function(e){slider.trigger('to.owl.carousel',[e.item.index,duration,true]);});$('.slider-right').click(function(){slider.trigger('next.owl.carousel');});$('.slider-left').click(function(){slider.trigger('prev.owl.carousel');});});$(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('#top').fadeIn();}else{$('#top').fadeOut();}});$('#top').click(function(){$("html, body").animate({scrollTop:0},600);return false;});});