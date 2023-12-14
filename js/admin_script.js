// Lấy thẻ từ css 
let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');

//Thêm active vào nav và xóa active khỏi acBox khi click menu-btn
document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   accountBox.classList.remove('active');
}

//Thêm active vào acBox và xóa active khỏi nav khi click
document.querySelector('#user-btn').onclick = () =>{
   accountBox.classList.toggle('active');
   navbar.classList.remove('active');
}

//Khi cuộn trang xuống phần đầu sẽ ẩn 
window.onscroll = () =>{
   navbar.classList.remove('active');
   accountBox.classList.remove('active');
}

// Nhấn nút xóa xong sau đó chuyển hướng về trang quản lí sp
document.querySelector('#close-update').onclick = () =>{
   document.querySelector('.edit-product-form').style.display = 'none';
   window.location.href = 'admin_products.php';
}