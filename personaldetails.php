<?php
        include('db_connect.php');
        if (isset($_POST['submit']))
        {
          $id = $_SESSION['login_id'];
          //Check if inserted
             $sql="SELECT pdId FROM personal_details WHERE pdId = '$id'";
            $result = mysqli_query($conn,$sql);
            $numRows = mysqli_num_rows($result);
          if($numRows > 0){
            $db_error = "You have already entered your personal details";
          }else{
            $fname=trim(mysqli_real_escape_string($conn,$_POST['fname']));
            $sname=trim(mysqli_real_escape_string($conn,$_POST['sname']));
            $lname=trim(mysqli_real_escape_string($conn,$_POST['lname']));
            $email=trim(mysqli_real_escape_string($conn,$_POST['email']));
            $dob=trim(mysqli_real_escape_string($conn,$_POST['dob']));
            $gender=trim(mysqli_real_escape_string($conn,$_POST['gender']));
            $nations=trim(mysqli_real_escape_string($conn,$_POST['nations']));
            $maritualstatus=trim(mysqli_real_escape_string($conn,$_POST['maritual']));
            $address=trim(mysqli_real_escape_string($conn,$_POST['address']));
            $mobile=trim(mysqli_real_escape_string($conn,$_POST['mobile']));

            //insertion 
            $sql="INSERT INTO personal_details(pdId,firstname,secondname,lastname,email,dob,gender,country,maritualstatus,address,mobilenumber,isfilled) VALUE('$id','$fname','$sname','$lname','$email','$dob','$gender','$nations','$maritualstatus','$address','$mobile', 1)";
            $result = mysqli_query($conn,$sql);
            if($result){
              $db_success = "Data Entry Successful";
            }else{
              $db_error = "Error!!!: ".mysqli_error($conn);
            }
          }
        }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="jumbotron center_jumbotron">
      <div class="row">
            <div class="col-md-12">
         <h2>Personal Details</h2>

      </div>
</div>

<?php if(isset($db_error)): ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-danger"><?php echo $db_error; ?></div>
  </div>
</div>
<?php endif; ?>

<?php if(isset($db_success)): ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-success"><?php echo $db_success; ?></div>
  </div>
</div>
<?php endif; ?>

<?php if(!isset($db_success)): ?>
<form action="" method="post">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="">First name</label>
                                    <input type="text" class="form-control" name="fname" required placeholder="Edwin">
                          </div>
                      </div>
                      <div class="col-md-4">
                             <div class="form-group">
                             <label for="">Second Name</label>
                                <input type="text"  class="form-control"name="sname" required placeholder="Beatus">
                             </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                          <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lname" required placeholder="Pantaleo">
                          </div>
                          </div>
                  </div>
                  
                
                <div class="row">
                         <div class="col-md-6">
                          <div class="form-group">
                          <label for="">Email </label>
                            <input type="email" class="form-control" name="email" required placeholder="edwinbeatus69@gmail.com">
                          </div>
                         </div>

                         <div class="col-md-6">
                          <div class="form-group">
                          <label for="">Date of Birth </label>
                            <input type="date" class="form-control" name="dob" required>
                          </div>
                         </div>
                  </div>
       
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                             <select name="gender" class="form-control">
                              <option selected>--Select gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                             </select>
                            </div>
                       </div>

                     <div class="col-md-6">
                          <div class="form-group">
                              
                                                 </select>
                                                            </div>
                                                        </div>
                                                  </div>
                                                               
                
                                              
                                <div class="row">

                                     <div class="col-md-4">
                                            <div class="form-group">
                                                  <select class="form-control"name="maritual"  id="">
                                                  <option selected>--Select Maritual Status--</option>
                                                  <option value="single">Single</option>
                                                  <option value="married">Married</option>
                                                  </select> 
                                                     
                                                                 
                                             </div>
                                     </div>
                                     <div class="col-md-4">
                                                 <div class="form-group">
                                                  <!-- <label for="address">Physical Address</label> -->
                                                  <input type="text" name="address" placeholder="Address" class="form-control"> 
                                                 </div>
                                           
                                      </div>
                                     <div class="col-md-4">
                                                    <input type="tel" class="form-control" name="mobile" required placeholder="Mobile Number">  
                                                                                            
                                     </div>
                                 </div> 
                                                      
                                                         
                                                    
                                                                                               
 
                                                       
                                                   <div class="row">
                                                        <div class="col-md-6">
                                                        <button type="submit" name="submit" class="btn btn-info btn-block" >Save</button>
                                                          <!-- <input type="submit"class="form-control btn btn-info btn-sm" name="submit"> -->             
                                                          </div>
                                                    </div>
                
    </form>
    <!-- Sending data to database -->
    <?php endif; ?>
     
    <?php
        include('cv_progress.php');
    ?>
</body>
</html>