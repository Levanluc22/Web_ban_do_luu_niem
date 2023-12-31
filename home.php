<?php

include 'config.php';

/*Khởi động session để lưu trữ dữ liệu người dùng.*/
session_start();

//Lấy ID người dùng đang đăng nhập từ session.
$user_id = $_SESSION['user_id'];

//Kiểm tra đăng nhập, nếu chưa chuyển hướng đến trang login
if(!isset($user_id)){
   header('location:login.php');
}

//Kiểm tra xem nút thêm có hoạt động hay không. Nếu có, các thông tin sản phẩm được lấy từ POST.
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

//Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa 
   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

// Nếu sp có trong giỏ hàng, thông báo người dùng; Nếu chưa thì thực hiện thêm sp, thông báo cho người dùng.   
   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Đã được thêm vào giỏ hàng!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Sản phẩm đã được thêm vào giỏ hàng!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css"> 

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Chuyên cung cấp quà tặng quảng cáo - Khuyến mãi in logo theo yêu cầu !</h3>
      
      <a href="about.php" class="white-btn">Tìm hiểu thêm</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Sản phẩm mới nhất</h1>

   <div class="box-container">
   
      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 3") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name">
          <?php echo $fetch_products['name']; ?></div>
      <div class="price">$
          <?php echo $fetch_products['price']; ?></div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value=" 
          <?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="
          <?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="
          <?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Thêm vào giỏ hàng" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">Chưa có sản phẩm nào được thêm vào!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Tải thêm</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/home1.jpg" alt="">
      </div>

      <div class="content">
         <h3>Về chúng tôi</h3>
         <p>Với mong muốn trở thành 1 trong những công ty quà tặng Uy Tín - Chất lượng hàng đầu tại Đà Nẵng và cả nước. Chúng tôi mang đến dịch vụ ngoài mong đợi cho khách hàng, cung cấp giải pháp quà tặng chi phí thấp hiệu quả cao giúp quý khách dễ dàng quảng bá thương hiệu rộng rãi hơn.</p>
         <a href="about.php" class="btn">Đọc thêm</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Bạn có thể hỏi?</h3>
      <p>Cảm ơn bạn đã chọn chúng tôi. Chúng tôi là nguồn thông tin đáng tin cậy về trang web bán quà lưu niệm của chúng tôi. Hãy đặt câu hỏi và chúng tôi sẽ mang đến cho bạn những câu trả lời tốt nhất cho bạn.</p>
      <a href="contact.php" class="white-btn">Liên hệ chúng tôi</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>