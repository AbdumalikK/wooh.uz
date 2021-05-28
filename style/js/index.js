const burger = document.querySelector('.burger');
const mainNav = document.querySelector('.main-nav');
const logo = document.querySelector('#logo');
const line1 = document.querySelector('.line1');
const line2 = document.querySelector('.line2');
const line3 = document.querySelector('.line3');
const menuShadow = document.querySelector('#menu-shadow');

 burger.addEventListener('click', () => {
   line1.classList.toggle('ln1');
   line2.classList.toggle('ln2');
   line3.classList.toggle('ln3');
   menuShadow.classList.toggle('shadow-menu');
   mainNav.classList.toggle('main-nav-active');
   logo.classList.toggle('d-none');
   $('li, .logo').toggleClass('menu-links');
 });

 function validateemail()  
 {  
 var x=document.contact.email.value;  
 var atposition=x.indexOf("@");  
 var dotposition=x.lastIndexOf(".");  
 if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
   alert("Please enter a valid e-mail address!");  
   return false;  
   }  
 }  