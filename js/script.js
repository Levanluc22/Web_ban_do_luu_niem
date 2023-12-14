// tạo userBox và gán vào user-box đã tìm đến.
let userBox = document.querySelector('.header .header-2 .user-box');

//Thêm active vào uBox và xóa active khỏi nav khi click vào hình người trên header
document.querySelector('#user-btn').onclick = () =>{
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

//Tạo nav và gán vào navbar đã tìm đến.
let navbar = document.querySelector('.header .header-2 .navbar');

//Thêm active vào nav và xóa active khỏi uBox khi click vào dấu 3 gạch
document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

// Cuộn xuống dưới phần header sẽ ẩn.
window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');
//Nếu cuộn xuống quá 60px header-2 sẽ hoạt động và vẫn hiện hiện 
   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
//Khi cuộn lên header sẽ về trạng thái ban đầu.
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}