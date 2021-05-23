<?php
include('db_connect.php');
if(isset($_POST['submit']))
{    $id = $_SESSION['login_id'];
     // $sql="SELECT *FROM computer_literacy WHERE pdId='$id'";
     // $result=mysqli_query($conn,$sql);
     // $numRows=mysqli_num_rows($result);

     // if($numRows>0)
     // {
     //   $db_error="You Have already entered Computer skills ";
     // }
     // else{

          $computerskill=trim(mysqli_real_escape_string($conn,$_POST['computerskill']));
          $otherattachment=trim(mysqli_real_escape_string($conn,$_POST['otherattachment']));
          $computerstatus=trim(mysqli_real_escape_string($conn,$_POST['computerstatus']));
          $sql="INSERT INTO computer_literacy VALUES('$id','$computerskill','$computerstatus','$otherattachment',1)";

          $result=mysqli_query($conn,$sql);
          if($result)
          {
               $db_success="Data Entry Successfull";
          }
          else
          {
               $db_error="Error!!!".mysqli_error($conn);
          }
           


     }


// }
?>
<section class="jumbotron center_jumbotron">

<h1>Computer Literacy</h1>
                    <?php if (isset($db_error)):?>
                     <div class="row">
                          <div class="col-md-12">
                             <div class="alert alert-danger"><?php echo $db_error;?></div>
                          </div>
                     
                     </div>
                    <?php endif;?>
                    <?php if (isset($db_success)):?>
                            <div class="row">
                               <div class="col-md-12">
                                <div class="alert alert-success"><?php echo $db_success;?></div>
                               </div>
                            </div>
                    <?php endif;?>
                    <?php if(!isset($db_success)):?>
                    <form action="" method="post" class="form-group">
                         <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="computerskills">Computer Skills</label>
                                     <select name="computerskill" class="form-control" id="">
                                     <option selected>--Select Skills--</option>
                                     <option value="msexcel" required>MS Excel</option>
                                     <option value="mspowerpoint" required>MS Powerpoint</option>
                                     <option value="msword" required>Ms Word</option>
                                     </select>
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-6">
                                          <div class="form-group">
                                          <label for="otherattachment">Attach Certificate</label>
                                          <input type="file" class="form-control" name="otherattachment" id="" required>
                                          </div>
                                </div>
                               
                        </div>
                         </div>
                               <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                        <input type="radio" name="computerstatus" value="VeryGood" required>Very Good
                                        <input type="radio" name="computerstatus" value="Good" required>Good
                                        <input type="radio" name="computerstatus" value="Fair"required>Fair
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                     <div class="col-md-6">
                                      <button type="submit" name="submit"class="form-control btn-info btn-smbtn-block" required>Save</button>
                                     </div>
                         
                                </div>

</form>
<?php endif;?>
<aside>

<?php
 include('cv_progress.php');
                
?>

</aside>

</section>