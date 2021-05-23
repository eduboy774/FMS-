<?php
          include('db_connect.php');
        
          // $sql="SELECT *FROM other_attachment WHERE pdId='$id'";
          // $result=mysqli_query($conn,$sql);
          // $numRows=mysqli_num_rows($result);

          // if($numRows >0)
          // {
          //      $db_error="You have already entered your other attachments";
          // }
          // else
          // {
               if (isset($_POST['submit']))
               {
                    $id = $_SESSION['login_id'];
              $otherattachment=trim(mysqli_real_escape_string($conn,$_POST['otherattachment']));
              $attachementlast=trim(mysqli_real_escape_string($conn,$_POST['attachementlast']));
              $sql="INSERT INTO other_attachment VALUES('$id','$otherattachment','$attachementlast',1)";

              $result=mysqli_query($conn,$sql);
              
              if($result)
              {
                $db_success="Data entry Successfull";
              }
              else
              {
                $db_error="Error".mysqli_error($conn);
              }


          // }
          }

?>
<section class="jumbotron center_jumbotron"> 

<h2>Other Attachments</h2> 
                        <?php if (isset($db_error)):?>
                        <div class="row">
                             <div class="col-md-12">
                             <div class="alert alert-danger"><?php echo $db_error;?></div>
                             </div>
                        </div>

                       <?php endif;?>
                       <?php if(isset($db_success)): ?>
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
                                     <label for="otherAttachments">Other Attachments</label>
                                     <select name="otherattachment" class="form-control">
                                      <option selected>--Select Attachments--</option>
                                      <option value="BirthCertificate">Birth Certificate</option>
                                      <option value="CurriculumVitae">Curriculum Vitae</option>
                                      <option value="RecommendatationLetter">Recommendatation Letter</option>
                                     </select>
                                     
                                     </div>
                                
                                </div>
                          
                          </div>
                          <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="attachment">Attachments</label>
                                    <input type="file" name="attachementlast" class="form-control" required>
                                    </div>
                               
                               </div>
                          </div>
                          <div class="row">
                               <div class="col-md-6">
                                <button type="submit" name="submit"class="form-control btn btn-info btn-sm">Save</button>
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