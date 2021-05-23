<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
     $id = $_SESSION['login_id'];
     $trainingname=trim(mysqli_real_escape_string($conn,$_POST['trainingname']));
     $trainingdescription=trim(mysqli_real_escape_string($conn,$_POST['trainingdescription']));
     $institution=trim(mysqli_real_escape_string($conn,$_POST['institution']));
     $startdate=trim(mysqli_real_escape_string($conn,$_POST['startdate']));
     $attachcv=trim(mysqli_real_escape_string($conn,$_POST['attachcv']));
     $enddate=trim(mysqli_real_escape_string($conn,$_POST['enddate']));

     $sql="INSERT INTO training_workshop VALUES('$id','$trainingname','$trainingdescription','$institution','$startdate','$attachcv','$enddate',1)";
     $result=mysqli_query($conn,$sql);

     if($result){
       $db_success="Data Entry Successfull";
     }
     else{
          $db_error="Error!!!".mysqli_error($conn);
     }

}

?>
<section class="jumbotron center_jumbotron">
<h1>Training&Workshop</h1>
         <?php  if(isset($db_error)): ?>
             <div class="row">
                 <div class="col-md-12">
                 <div class="alert alert-danger"><?php echo $db_error;?></div>
                 </div>
             </div>
         <?php endif;?>
         <?php if(isset($db_success)):?>
           <div class="row">
            <div class="col-md-12">
            <div class="alert alert-success"><?php echo $db_success?></div>
            </div>
           
           </div>
         <?php endif;?>
         <?php if(!isset($db_success)):?>
         <form action="" method="post">
                         <div class="row">
                              <div class="col-md-6"> 
                                    <div class="form-group">
                                       <label for="trainingname">Training Name</label>
                                      <input type="text" name="trainingname" class="form-control"id="" placeholder="Please Input training name" required>
                                    </div>
                              </div> 
                              <div class="col-md-6">
                                   <div class="form-group">
                                     <label for="trainingdescription">Training Description </label>
                                     <textarea name="trainingdescription" id="" class="form-control" required></textarea>
                                   </div>
                              </div>
                        </div> 
                        <div class="row">
                             <div class="col-md-6">
                                  <div class="form-group">
                                   <label for="institution">Institution</label>
                                   <input type="text" name="institution" class="form-control" required>
                                  
                                  </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                 <label for="">Start Date</label>
                                  <input type="date" name="startdate" class="form-control" required>
                                 
                                 </div>
                            </div>
                        </div>  
                        <div class="row">
                             <div class="col-md-6">
                                   <div class="form-group">
                                     <label for="Attachmentcv">Attachments for Certificate</label>
                                     <input type="file" name="attachcv" class="form-control" id="" required>
                                   </div>
                             </div>
                             <div class="col-md-6">
                                  <div class="form-group">
                                        <label for="">End Date</label>
                                        <input type="date" name="enddate" class="form-control"  required>
                                  
                                  </div>
                             
                             </div>
                        
                        </div>
                        <div class="row">
                             <div class="col-md-6">
                                  <button type="submit" name="submit"class="form-control btn-info" required>Save</button>
                             
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