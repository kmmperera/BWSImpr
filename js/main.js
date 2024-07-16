document.addEventListener('DOMContentLoaded', function () {

    //swiper slider 1

    const swiperPosts = new Swiper(".post-swiper", {
        grabCursor: true,
        slidesPerView: "auto",
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        autoplay: {
            delay: 7500,
            disableOnInteraction: true,
            reverseDirection:true,
          },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
           1400: {
                slidesPerView: 4,
            },
        },
    });
    
    // swiperPosts.on('slideChange', function() {
    //     let realIndex = swiperPosts.realIndex;
    //     if (realIndex == 0) {
         
    //         document.querySelector(".swiper-button-prev").style.display = "none";
    //     } else {
         
    //       document.querySelector(" .swiper-button-prev").style.display = "block";
    //     }
    //   });



//     var button = document.getElementById('buynowbtn');

//     button.addEventListener('click', function () {
//         showTooltip(this, 'Call/Whatsup : 39888888888');
//     });

//     function showTooltip(element, message) {
//         // Remove existing tooltip if any
//         var existingTooltip = document.querySelector('.ceymulticall-tooltip');
//         if (existingTooltip) {
//             existingTooltip.remove();
//         }

//         // Create a new tooltip element
//         var tooltip = document.createElement('div');
//         tooltip.className = 'ceymulticall-tooltip';
//         tooltip.textContent = message;

//         // Append tooltip to the button
//         element.parentElement.appendChild(tooltip);

//         // Position the tooltip
//         var rect = element.getBoundingClientRect();
//         tooltip.style.left = rect.left + (element.offsetWidth / 2) - (tooltip.offsetWidth / 2) + 'px';
//         tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';

//         // Automatically remove the tooltip after 3 seconds
//         setTimeout(function () {
//             tooltip.remove();
//         }, 5000);
//     }
 });



// menu 

let hamburgericon= document.querySelector(".bi-list");
let closebtn= document.querySelector(".bi-x-square");
let overlay= document.querySelector(".overlay-div");
let navlinks= document.querySelectorAll(".nav-li");
let hamburgerclose= document.querySelector(".bi-x-square");

let mobilemune= document.querySelector("#nav-menus");

 function Funcremovemobilenav(){

   mobilemune.classList.remove("active");
   closebtn.classList.remove("active");
   overlay.classList.remove("active");
   hamburgerclose.classList.remove("active");

}

hamburgericon.addEventListener("click",()=>{
   mobilemune.classList.add("active");
  // hamburgericon.classList.remove("active");
   closebtn.classList.add("active");
   overlay.classList.add("active");


});
navlinks.forEach((nlink)=>{
    nlink.addEventListener("click",()=>{
       Funcremovemobilenav();
    });
});
hamburgerclose.addEventListener("click",()=>{
   Funcremovemobilenav();

});
overlay.addEventListener("click",()=>{
   Funcremovemobilenav();

});



// form submition member page 

jQuery(document).ready(function($){
    console.log("jq works");
    $('#memeber-page-service-submit-btn').click(function(e){
        e.preventDefault();
        console.log('Form Submitted');
  
        let formSelected = e.currentTarget.parentElement;
  
         let name   = document.getElementById('name-text').value;
         let email   = document.getElementById('email-text').value;
         let message   = document.getElementById('message-text').value;
         let telnum   = document.getElementById('telnum-text').value;
        
            $.ajax({
                // Pass the admin-ajax.php into url.
                url: ajax_object.ajax_url,
                data: {
                    'action': 'bms_quations_add',
                    'name': name,
                    'email': email,
                    'message': message, 
                    'telnum': telnum
                },
                type: 'post',
                success: function(res){
                    document.getElementById("member-modal").innerHTML = res;

                    formSelected.reset();
                },
                error: function(err){
                    document.getElementById("member-modal").innerHTML = err;

                    formSelected.reset();
                },
            });
        
  
        
    });


   

  });


  /**
 * header sticky functionality
 */

const header = document.getElementById("main-nav");

window.addEventListener("scroll", function () {
    

  window.scrollY >= 20 ? header.classList.add("active") : header.classList.remove("active");

});