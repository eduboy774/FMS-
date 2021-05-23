<?php
  include('db_connect.php');
   
   if(isset($_POST['submit']))
   {   
        $id = $_SESSION['login_id']; 
           
        $language=trim(mysqli_real_escape_string($conn,$_POST['language']));
        $read1=trim(mysqli_real_escape_string($conn,$_POST['read1']));
        $speak=trim(mysqli_real_escape_string($conn,$_POST['speak']));
        $write=trim(mysqli_real_escape_string($conn,$_POST['write']));
        
        
        // $languageinput=trim(mysqli_real_escape_string($conn,$_POST['languageinput']));

       $sql="INSERT INTO language_proficiency VALUES('$id','$language','$read1','$speak','$write',1) "; 
       $result=mysqli_query($conn,$sql);

       if($result)
       {
           $db_success="Data Entry Successful ";    
       }
       else{
             $db_error="Error!!!".mysqli_error($conn);  
       }

   }


?>
<!DOCTYPE html>
<head>
 <script type="text/javascript">
          function checkvalue(val)
          {
                  if(val=="other")
                  {
                   document.getElementById('language_input').style.display='block';
                   document.getElementById('otherlanguage').style.display='block';
                   
                  }
                  else
                  {
                          document.getElementById('language_input').style.display='none';
                          document.getElementById('otherlanguage').style.display='none';
                  }
                  

                 

          }
 </script>
</head>
<body>

    
     <div class="jumbotron center_jumbotron">
        <h1>Language Proficiency</h1>
        <?php if (isset($db_error)):?>
          <div class="row">
               <div class="col-md-12">
                    <div class="alert alert-danger">
                     <?php echo $db_error;?>
                    </div>
               </div>
          
          
          </div>
          <?php endif;?>
          <?php if (isset($db_success)):?>
                  <div class="row">
                       <div class="col-md-12">
                            <div class="alert alert-success">
                            <?php echo $db_success;?>
                            </div>
                       </div>
                  
                  
                </div>
          <?php endif; ?>
         
        <?php if(!isset($db_success)):?> 
 <form action="" method="post" class="form-group"> 
        <div class="row">
                        <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                                <select name="language" class="form-control" id="language" onchange='checkvalue(this.value)'>
                                                        <option selected>---Choose Language---</option>
                                                        <option value="english">English</option>
                                                        <option value="kiswahili">Kiswahili</option>
                                                        <option value="other">Other</option>
                                                </select>                                                      
                                        </div> 
                                </div>
                                <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="otherlanguage" style="display: none;" id="otherlanguage">Other Language</label>
                                        <input class="form-control" type="text" name="languageinput" id="language_input"style="display:none;" >
                                        </div>
                                </div>
                              </div>
                        
                        </div>
                       <!-- Speak panel -->
                       <div class="col-md-6">
                         <div class="row">
                           <div class="form-group">
                            <label for="">Read</label>
                            <br>
                             <input type="radio" name="read1"  value="verygood"id="">Very Good
                             <input type="radio" name="read1"  value="good"id="">Good
                             <input type="radio" name="read1"  value="fair"id="">Fair
                           </div>
                        </div>
                        <div class="row">
                                <div class="form-group">
                                <label for="">Speak</label>
                                  <br>
                             <input type="radio" name="speak"  value="verygood"id="">Very Good
                             <input type="radio" name="speak"  value="good"id="">Good
                             <input type="radio" name="speak"  value="fair"id="">Fair
                                </div>
                        </div>
                        <div class="row">
                              <div class="form-group">
                              <label for="">Write</label>
                              <br>
                             <input type="radio" name="write"  value="verygood"id="">Very Good
                             <input type="radio" name="write"  value="good"id="">Good
                             <input type="radio" name="write"  value="fair"id="">Fair
                              </div>
                        </div>
                       </div>               
                </div>  
               
                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
                                        </div>
                                </div>
                </div>        

                                                               
        
        </div>
        </form>
        <?php endif;?>

        <?php
        include('cv_progress.php');
    ?>
</body>
</html>