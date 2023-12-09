<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!--  liên kết CDN phông chữ   -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Liên kết tệp CSS tùy chỉnh  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Về Chúng Tôi</h3>
   <p> <a href="home.php">Trang chủ</a>  </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>TẠI SAO CHỌN CHÚNG TÔI?</h3>
         <p>"Chào mừng bạn đến với trang web quà lưu niệm của chúng tôi - nơi tìm thấy những kỷ niệm đáng nhớ và sự tình yêu dành cho tất cả mọi người. Chúng tôi tự hào mang đến cho bạn những sản phẩm độc đáo, sáng tạo và mang tính biểu tượng để chia sẽ niềm vui với những người thân yêu. Với sự đa dạng về quà lưu niệm từ đồng hồ kiểu, usb độc đáo, huy hiệu đến bút cao cấp và nhiều hơn nữa, chúng tôi cam kết mang đến sự hài lòng tuyệt đối cho khách hàng. Hãy khám phá trang web của chúng tôi ngay hôm nay và tạo ra những kỷ niệm trọn vẹn từ những món quà lưu niệm đặc biệt của chúng tôi!"</p>

         <a href="contact.php" class="btn">Liên hệ chúng tôi</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Những món đồ rất độc đáo.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Văn Nhân</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Quà siêu đẹp.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hồng Vy</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Nhân viên shop nhiệt tình.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lê Quang</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Giao hàng nhanh, đóng gói cẩn thận.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kim Tuyền</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Tôi mua của shop về làm quà người thân tôi rất thích.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Đức Nhiên</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Rất hài lòng.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hà Hà</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">NHÀ THIẾT KẾ TUYỆT VỜI</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Võ Văn Thịnh</h3>
      </div>

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Lê Văn Lực</h3>
      </div>

    

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Phùng Thị Tố Trinh</h3>
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- Liên kết tệp JS tùy chỉnh  -->
<script src="js/script.js"></script>

</body>
</html>