<?php
 include('db_connect.php');
   if(isset($_POST['submit']))
   {    
        $id = $_SESSION['login_id'];
        $organization=trim(mysqli_real_escape_string($conn,$_POST['organization']));
        $organizationaddress=trim(mysqli_real_escape_string($conn,$_POST['organizationaddress']));
        $jobtitle=trim(mysqli_real_escape_string($conn,$_POST['jobtitle']));
        $supervisorduties=trim(mysqli_real_escape_string($conn,$_POST['supervisorduties']));
        $supervisorname=trim(mysqli_real_escape_string($conn,$_POST['supervisorname']));
        $supervisortel=trim(mysqli_real_escape_string($conn,$_POST['supervisortel']));
        $startdate=trim(mysqli_real_escape_string($conn,$_POST['startdate']));
        $supervisoraddress=trim(mysqli_real_escape_string($conn,$_POST['supervisoraddress']));
        $enddate=trim(mysqli_real_escape_string($conn,$_POST['enddate']));
     
        $sql="INSERT INTO working_experience value('$id','$organization','$organizationaddress','$jobtitle','$supervisorduties','$supervisorname','$supervisortel','$startdate','$supervisoraddress','$enddate',1)";
         $result=mysqli_query($conn,$sql);
         
         if($result)
         {
          $db_success = "Data Entry Successful";
         }
         else
         {
           $db_error="Errror!!!".mysqli_error($conn);
         }

   }

   

?>


<section class="jumbotron center_jumbotron"> 
<h1>Working Experience</h1>
                <?php if (isset($db_error)): ?>
                 <div class="row">
                       <div class="col-md-12">
                            <div class="alert alert-danger">
                            <?php echo $db_error;?>
                            </div>
                       
                       </div>
                 </div>
                 <?php endif;?> 
                   
                <?php if (isset($db_success)): ?>
                <div class="row">
                   <div class="col-md-12">
                     <div class="alert alert-success">
                     <?php echo $db_success;?>
                     </div>
                     </div>
                     </div>
                     <?php endif;?>
                
                
          <?php if (!isset($db_success)):?>
         <form action="" method="post" class="form-group">
               <div class="row">
                   <div class="col-md-6">
                         <div class="form-group">
                            <label for="organization">Institution/Organization</label>
                            <input type="name" name="organization"  class="form-control"id=""  placeholder="MFAEC" required>
                         </div>
                   
                   
                   </div>
                <div class="col-md-6">
                        <div class="form-group">
                         <label for="organiztionaddress">Institution Address</label>    
                         <input type="text" name="organizationaddress" class="form-control" id="" placeholder="P.O  Box 5113 " required>
                        </div>
                   
                 </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                    <label for="jobtitle">Job Title </label>
                    <input type="text" name="jobtitle" class="form-control"id="" placeholder="IT" required>
                     </div>
                 
                 </div>
                 <div class="col-md-6">
                      <div class="form-group">
                      <label for="duties">Duties Responsibilities</label>
                      <textarea name="supervisorduties" class="form-control" required></textarea>
                      </div>
                 
                 </div>
            
            
            </div>   
            <div class="row">
                 <div class="col-md-6">
                      <div class="form-group">
                      <label for="supervisor">Supervisor Name</label>       
                       <input type="text" name="supervisorname" class="form-control" id="" placeholder="Mr Salum" required>
                      </div>
                
                 </div>
            </div> 

            <div class="row">
                 <div class="col-md-6">
                       <div class="form-group">
                             <label for="supervisortel">Supervisor Telephone Number</label>
                             <input type="tel" name="supervisortel" class="form-control" id="" required>
                       </div>
                </div>
                 <div class="col-md-6">
                       <div class="form-group">
                       <label for="startdate">Start Date</label>
                             <input type="date" name="startdate" class="form-control" id="" required>
                       </div>
                </div>        
           </div>
           <div class="row">
                 <div class="col-md-6">
                       <div class="form-group">
                        <label for="supervisoraddress">Supervisor Address</label>
                         <textarea name="supervisoraddress"  class="form-control" required></textarea>
                        </div>
                 
                 </div>
                 <div class="col-md-6">
                      <div class="form-group">
                           <label for="enddate">End Date</label>
                           <input type="date" name="enddate" class="form-control" id="" required>
                      </div>
                 
                 
                 </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                      <div class="form-group">
                      <button type="submit" name="submit" class="form-control btn btn-info btn-block">Save</button>
                      </div>
                 
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