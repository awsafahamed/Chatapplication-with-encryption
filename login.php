<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Discuter</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email"  required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password"  required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      <div class="link">Dont you have an account? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/jav.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
