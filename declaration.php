<?php 
include('db_connect.php');
 if(isset($_POST['submit']))
 {    
      $id = $_SESSION['login_id']; 
        
     $sql="SELECT *FROM declaration WHERE pdId='$id' ";
     $result=mysqli_query($conn,$sql);
     $numRows=mysqli_num_rows($result);
     if($numRows >0)
     {
          $db_error = "You have already Declared you cv";
     }

      else{
      $declare=trim(mysqli_real_escape_string($conn,$_POST['declare']));

      $sql="INSERT INTO declaration(pdId,sign,isfilled) VALUES('$id','$declare',1)";
      
      $result=mysqli_query($conn,$sql);
      

      if($result)
      {
          $db_sucess="Data Entry Successfull";
      } 
      else
      {
           $db_error="Errror!!!".mysqli_error($conn);

      
     }
}
 }
?>
<section class="jumbotron center_jumbotron">

<h2>Declaration</h2>
<?php if (isset($db_error)): ?>
          <div class="row">
               <div class="col-md-12">
                   <div class="alert alert-danger"><?php echo $db_error; ?></div>

               </div>

          </div>  
          <?php endif; ?> 
          <?php if(isset($db_sucess)):?>  
          <div class="row">
               <div class="col-md-12">
                  <div class="alert alert-success"><?php echo $db_sucess?></div>
               </div>
               <div class="row">
                   <div class="col-md1-2">
                   
                  <table class="form-control">
                  <tr class="from-control">
               <th class="form-control">Company
               <td class="form-control"> MAMbo</td>
               </th>
               <th>Contact</th>
               <th>Country</th>
                    </tr>
                    <th > 
                   
                    </th>
                  </table>
                   </div>
               </div>
          </div> 
          <?php endif;?>  
          <?php if(!isset($db_sucess)):?>   
               <form action="" method="post" class="form-group">   
                   <div class="row">
                        <div class="col-md-1">  
                              <div class="form-group">
                               <input type="checkbox" name="declare" value="Declared" class="form-control" required>
                              
                              </div>
                         </div>
                         <div class="col-md-11">
                              <div class="form-group">
                              I declare that the information provided is complete and correct to the best of my knowledge. I understand that any false information supplied could lead to my application being disqualified or my discharge if I am appointed.
                             </div>
                        </div>
                   
                   </div>
                   <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                        <b> N.B Ticking the box will be taken as being as binding as your signature</b>
                        </div>
                        
                        </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6">
                       <button type="submit" name="submit" class="form-control btn-info  ">Declare</button>
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