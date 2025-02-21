window.onload = function() {
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has('success')) {
      alert('Form inviato con successo!');
  }
}
const swiper = new Swiper('.swiper', {
  slidesPerView: 1,
  direction: 'horizontal',
  loop: true,
  autoplay:{
    delay:5000,
  },
  pagination: {
    el: '.swiper-pagination',
    dinamicBullet: true,
    bulletClass: 'swiper-pagination-bullet',
    clickable: true,
  },
});

let btnModal=document.getElementById("my-btn");
let closeModal=document.getElementById("close");
btnModal.onclick=()=>{
  console.log("ciao");
  document.querySelector(".my-modal").classList.toggle("open");
  document.querySelector(".modal-card").classList.toggle("open");
  window.scroll({
    top: 100,
    left: 100,
    behavior: "smooth",
  });
};

closeModal.onclick=()=>{
  console.log("Close");
  document.querySelector(".my-modal").classList.remove("open");
  document.querySelector(".modal-card").classList.remove("open");

}