const swiper = new Swiper('.swiper', {
  slidesPerView: 1,
  direction: 'horizontal',
  //   loop: true,
  //   autoplay:{
  //     delay:5000,
  //   },
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


//FORM POST METHOD
let postingForm=async ()=>{
  console.log("ciao form");
  const {data} = await axios.post('http://127.0.0.1:5500/save_form.php', document.querySelector('#my-form'), {
    headers: {
      'Content-Type': 'application/json',
    }
  })
  .then(response=>{
    console.log(response);
  })


}

