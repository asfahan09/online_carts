<?php
include("header.php");
?>
<?php
$nameerror="";
$lastnameerror="";
$emailerror="";
$phoneerror="";
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["phone"];

  if (empty($username)) {
    $nameerror="User Name is required";
  }
  if (empty($lastname)) {
    $lastnameerror="Last name is required";
  }
  if (empty($email)) {
    $emailerror="Email is required";
  }
  if (empty($phone)) {
    $phoneerror="number is required";
  }
}

?>
<!-- front end contact page -->
<!-- contact_us -->
<div class="container mt-5 ">
        <div class="row gx-5 gy-5">
            <div class="col-md-6 col-xxl-6 col-lg-6 col-12 ">
                <h1 class="mt-5 contact_us_heading text-primary fs-bold" >Contact <span class="text-dark">us</span></h1>
                <p class="lh-3 contact_us_paragraph">Contact Us is the primary means of communication with staff for a website visitor. Questions, comments and suggestions voluntarily submitted to the CAMPO website through electronic mail may be treated as non Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae molestias adipisci impedit cum exercitationem. Incidunt. .</p>
                <p class="lh-3 contact_us_paragraph"><b>Address:</b> Aptech North Nazimabad Center
                  Address: SD1, Block A, Near Metric Board Office, North Nazimabad, Karachi.
                  info-nn@aptech-education.com.pk
                  </p>
                  <p class="lh-3 contact_us_paragraph"><b>contact:</b> 021-36630102-3</p>
                  
            </div>
            <!-- form layout -->
            <div class="col-md-6 col-xxl-6 col-lg-6 col-12 ">
                
                  <form id="contactus" method="POST" action="">
                    <br>
                  <label ><b>First name</b></label> 
                      <input type="text" name="username" class="mt-5 form-control " placeholder="First name" aria-label="First name" >
                      <span style="color: red"><?php echo $nameerror?></span>
                      <br>
                    <label ><b>Last name</b></label>
                      <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name" >
                      <span style="color: red"><?php echo $lastnameerror?></span>

                      <br>
                    <label><b>Email</b></label>
                    <input type="email" name="email" class="form-control " placeholder="Email Address" aria-label="email">
                    <span style="color: red"><?php echo $emailerror?></span>

                    <br>
                    <label><b>phone no</b></label>
                    <input type="tel"  name="phone" class="form-control " placeholder="Enter number" aria-label="phone no" >
                    <span style="color: red"><?php echo $phoneerror?></span>

                    <!-- <button type="submit" class="btn btn-primary  mt-4">submit</button> -->
                  <br>
                  
                  <button type="submit" class="btn btn-secondary w-50" name="submit">Submit</button>
                </form>
        </div>
        </div>
    </div>
    <div id="confirmation" style="display: none;">
      <p>Thank you for contacting us. We'll get back to you soon!</p>
  </div>
<br>
<br>





<?php
include("footer.php");
?>


