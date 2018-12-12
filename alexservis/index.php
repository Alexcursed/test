 <div class="content">
  <div class="grid">
  <div class="title"><?php include 'includes/title.php'; ?></div>
   <div class="heder"><?php include 'includes/heder.php'; ?></div>
    <div class="content"><?php
       if(isset($_GET['about'])){
        include 'includes/about.php';
         }else if(isset($_GET['product'])){
        include 'includes/product.php';
          }else if(isset($_GET['blog'])){
        include 'includes/blog.php';
          }else if(isset($_GET['contact'])){
        include 'includes/contact.php';
         }else {
        include 'includes/home.php';
       }
        ?>
        </div>
     
      <div class="sidebar">4</div>
      <div class="footer"><?php include 'includes/footer.php'; ?></div>
    </div>
  </div>