const swiper = new Swiper('.swiper', {
  slidesPerView: 1,  
  direction: 'horizontal',
//   loop: true,
//   autoplay:{
//     delay:5000,
//   },
  pagination: {
    el: '.swiper-pagination',
    dinamicBullet:true,
    bulletClass:'swiper-pagination-bullet',
    clickable:true,
  },
});