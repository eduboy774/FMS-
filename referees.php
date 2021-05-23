<?php 
include('db_connect.php');
if(isset($_POST['submit']))
{   
    $id = $_SESSION['login_id'];
    $fullname=trim(mysqli_real_escape_string($conn,$_POST['fullname']));
    $organization=trim(mysqli_real_escape_string($conn,$_POST['organization']));
    $telphone=trim(mysqli_real_escape_string($conn,$_POST['telphone']));
    $trainingtitle=trim(mysqli_real_escape_string($conn,$_POST['trainingtitle']));
    $email=trim(mysqli_real_escape_string($conn,$_POST['email']));
    $addrestraining=trim(mysqli_real_escape_string($conn,$_POST['addrestraining']));
    
    
     $sql="INSERT INTO referee(pdId,fullname,organization,telphone,trainingtitle,email,addrestraining,isfilled)  VALUES('$id','$fullname','$organization','$telphone','$trainingtitle','$email','$addrestraining',1)";
     $result=mysqli_query($conn,$sql);

     if($result)
     {
         $db_success="Data Entry Successfull";
     }
     else
     {
         $db_error="Error!!! :".mysqli_error($conn);
     }
    
}



?>
<section class="jumbotron center_jumbotron">
    <h2>Referees</h2>
    <?php if(isset($db_error)): ?>
     <div class="row">
          <div class="col-md-12">
           <div class="alert alert-danger"><?php echo $db_error;?></div>
          </div>

     </div>
     <?php endif;?>
     <?php if (isset($db_success)): ?>
            <div class="row">
                 <div class="col-md-12">
                <div class="alert alert-success"><?php echo $db_success;?></div>
                 </div>

            </div>
     <?php endif;?>
     <?php if(!isset($db_success)) :?>
    <form action="" method="post">
        <div class="row">
            <!-- Left column -->
            <div class="col-md-6">
                <label for="names">
                    Full Names
                </label>
                <input required="required" name="fullname"type="text" class="form-control" placeholder="Please input two/three names."/>

                <br/>
                <label for="institution">
                    Institution/Organization
                </label>
                <input required="required"  name="organization"type="text" class="form-control" placeholder="Please input institution/organization name."/>

                <br/>
                <label for="mobile">
                    Telephone/Mobile
                </label>
                <input required="required" name="telphone" type="tel" class="form-control" placeholder="Please input telephone/mobile number."/>
            </div>

            <!-- Right column -->
            <div class="col-md-6">
                <label for="title">
                    Title
                </label>
                <input required="required" name="trainingtitle"type="text" class="form-control" placeholder="Please input title."/>

                <br/>
                <label for="email">
                    E-mail
                </label>
                <input required="required" name="email"type="email" class="form-control" placeholder="Please input email."/>

                <br/>
                <label for="address">
                    Address
                </label>
                <input required="required" type="tetx" name="addrestraining" class="form-control" placeholder="Please input address."/>
            </div>
        </div>

        <!-- <div class="row">
             Left column
            <div class="col-md-6">
                <label for="names">
                    Full Names
                </label>
                <input required="required" type="text" class="form-control" placeholder="Please input two/three names."/>

                <br/>
                <label for="institution">
                    Institution/Organization
                </label>
                <input required="required" type="text" class="form-control" placeholder="Please input institution/organization name."/>

                <br/>
                <label for="mobile">
                    Telephone/Mobile
                </label>
                <input required="required" type="tel" class="form-control" placeholder="Please input telephone/mobile number."/>
            </div>

             Right column 
            <div class="col-md-6">
                <label for="title">
                    Title
                </label>
                <input required="required" type="text" class="form-control" placeholder="Please input title."/>

                <br/>
                <label for="email">
                    E-mail
                </label>
                <input required="required" type="email" class="form-control" placeholder="Please input email."/>

                <br/>
                <label for="address">
                    Address
                </label>
                <input required="required" type="email" class="form-control" placeholder="Please input address."/>
            </div>
        </div>

        <div class="row">
             Left column 
            <div class="col-md-6">
                <label for="names">
                    Full Names
                </label>
                <input required="required" type="text" class="form-control" placeholder="Please input two/three names."/>

                <br/>
                <label for="institution">
                    Institution/Organization
                </label>
                <input required="required" type="text" class="form-control" placeholder="Please input institution/organization name."/>

                <br/>
                <label for="mobile">
                    Telephone/Mobile
                </label>
                <input required="required" type="tel" class="form-control" placeholder="Please input telephone/mobile number."/>
            </div>

             Right column 
            <div class="col-md-6">
                <label for="title">
                    Title
                </label>
                <input required="required" type="text" class="form-control" placeholder="Please input title."/>

                <br/>
                <label for="email">
                    E-mail
                </label>
                <input required="required" type="email" class="form-control" placeholder="Please input email."/>

                <br/>
                <label for="address">
                    Address
                </label>
                <input required="required" type="email" class="form-control" placeholder="Please input address."/>
            </div>
        </div> -->
        
        <br/>

        <div class="row col-md-3">
            <button type="submit" name="submit" class="form-control btn btn-info btn-sm">Save</button>
        </div>
    </form>
  <?php endif;?>
    <aside>
        <?php
            include('cv_progress.php');
        ?>
    </aside>
</section>