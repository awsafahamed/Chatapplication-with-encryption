<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Discuter</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/gif,image/jpeg,image/jpg,image/x-png" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Get started">
        </div>
      </form>
      <div class="link">Do you have an account already? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/jav.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
