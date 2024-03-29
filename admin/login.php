
<?php

include("config.php");


if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST ['password'];

  $query = "SELECT * from users where email = '$email' AND passwordd = '$password'";

  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($result);
  if(mysqli_num_rows($result) > 0){
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['user_name'] = $data['name'];
    $_SESSION['role'] = $data['role'];

    echo "<script>location.href = 'index.php';</script>";
  }
  else{
    echo "<div class='alert alert-danger w-75 mt-5 mx-auto' role='alert'>
    Username or password is incorrect
  </div>";
  }
}
if(isset($_SESSION['user_id'])){
  echo "<script>location.href = 'index.php';</script>";
}
else{
  ?>
  <!-- ======= login Section ======= -->
  <section id="contact" class="contact mt-5">
       <div class="container" data-aos="fade-up">
 
         <div class="section-title text-center ">
        
           
          <h2 class="fw-bolder text-primary">Wellcome back to our website!</h2>
           <p class="fw-bolder">Login!</p>
         </div>
        
           <div class="col-lg-12 mt-5 mt-lg-0 ">
 
             <form  method="post" role="form" class="php-email-form1 container">
               <div class="row">
                 <div class="col-md-12 form-group">
                   <input type="email" name="email" class="form-control" id="name" placeholder="Your Email" required>
                 </div>
                 <br>
                 <br>

                 <div class="col-md-12 form-group mt-3 mt-md-0">
                   <input type="password" class="form-control" name="password" id="email" placeholder="Your Password" required>
                 </div>
               </div>

               <div class="text-center mt-4 "><button type="submit" name="submit" class="btn btn-outline-primary fw-bolder  ">Login</button></div>

              <p class="mt-5 text-center">Don't have an account? <a href="signup.php">Sign up</a></p>
              
             </form>
 
           </div><!-- End login Form -->

         </div>

       </div>
       
     </section><!-- End login Section -->

   </main>
 <?php
}

?>

</body>
</html>

       