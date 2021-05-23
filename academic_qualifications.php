<?php
include('db_connect.php');
   
    if(isset($_POST['submit']))
    { 
        $id = $_SESSION['login_id'];

        $primary_name=trim(mysqli_real_escape_string($conn,$_POST['primary_name']));
        $primary_start_year=trim(mysqli_real_escape_string($conn,$_POST['primary_start_year']));
        $primary_final_year=trim(mysqli_real_escape_string($conn,$_POST['primary_final_year']));
        $Olevel_name=trim(mysqli_real_escape_string($conn,$_POST['Olevel_name']));
        $Olevel_start_year=trim(mysqli_real_escape_string($conn,$_POST['Olevel_start_year']));
        $Olevel_final_year=trim(mysqli_real_escape_string($conn,$_POST['Olevel_final_year']));
        $Alevel_name=trim(mysqli_real_escape_string($conn,$_POST['Alevel_name']));
        $Alevel_start_year=trim(mysqli_real_escape_string($conn,$_POST['Alevel_start_year']));
        $Alevel_final_year=trim(mysqli_real_escape_string($conn,$_POST['Alevel_final_year']));
        $certificatename=trim(mysqli_real_escape_string($conn,$_POST['certificatename']));
        $diplomaname=trim(mysqli_real_escape_string($conn,$_POST['diplomaname']));
        $bachelorname=trim(mysqli_real_escape_string($conn,$_POST['bachelorname']));
        $mastername=trim(mysqli_real_escape_string($conn,$_POST['mastername']));
        $phdname=trim(mysqli_real_escape_string($conn,$_POST['phdname']));
        $professorname=trim(mysqli_real_escape_string($conn,$_POST['professorname']));

        $sql="INSERT INTO academic_qualifications VALUES('','','')";

    }
?>
<section class="jumbotron center_jumbotron">

    <h2 id="academic_qualifications">Academic Qualifications</h2>

    <noscript><h1>Please enable javascript to fill this form.</h1></noscript>

    <form action="" method="post">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <label for="primary">    
                            Did you attend primary school? 
                        </label> 

                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-control" onchange="togglePrimaryField(this)">
                                    <option>
                                        Yes
                                    </option>

                                    <option selected>
                                        No
                                    </option>    
                                </select>
                                <br/>
                            </div>
                        </div> 

                        <div class="row" style="display:none;" id="primary-name-field">
                            <label for="primary">    
                                Please provide name. 
                            </label>

                            <input id="primary-input" name="primary_name" oninput="toggleOlevel(this)" type="text" class="form-control" required="required" placeholder="Blue Sky Primary School">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start-year">    
                                        From
                                    </label>
                                    <input class="form-control" type="number" name="primary_start_year" placeholder="Start year" min="1900" required="required"/>
                                </div>

                                <div class="col-md-6">
                                    <label for="start-year">    
                                        To
                                    </label>
                                    <input class="form-control" type="number" name="primary_final_year" placeholder="Final year" min="1900" required="required"/>
                                </div>                                
                            </div>
                        </div>   
                    </div>
                </div>

                <div class="row" style="display:none;" id="O-level">
                    <div class="col-md-12">
                        <label for="primary">    
                            <br/><br/>Did you attend Secondary School? 
                        </label> 

                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-control" onchange="toggleOlevelField(this)">
                                    <option>
                                        Yes
                                    </option>

                                    <option selected>
                                        No
                                    </option>    
                                </select>
                                <br/>
                            </div>
                        </div> 

                        <div style="display:none;"  class="row" id="O-level-name-field">
                            <label for="name">    
                                Please provide name.
                            </label>

                            <input id="O-level-input" name="Olevel_name" oninput="toggleOthers(this)" type="text" class="form-control" required="required" placeholder="Rocken Hill Secondary School">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start-year">    
                                        From
                                    </label>
                                    <input class="form-control" type="number" name="Olevel_start_year" placeholder="Start year" min="1900" required="required"/>
                                </div>

                                <div class="col-md-6">
                                    <label for="start-year">    
                                        To
                                    </label>
                                    <input class="form-control" type="number" name="Olevel_final_year" placeholder="Final year" min="1900" required="required"/>
                                </div>                                
                            </div>
                        </div>   
                    </div>
                </div>

                <div class="row other-levels" style="display:none;">
                    <div class="col-md-12">

                        <label for="name">    
                            <br/><br/>Did you attend High School? 
                        </label> 

                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-control" onchange="toggleAlevelField(this)">
                                    <option>
                                        Yes
                                    </option>
                                    
                                    <option selected>
                                        No
                                    </option>    
                                </select>
                                <br/>
                            </div>
                        </div> 

                        <div class="row" id="A-level-name-field" style="display:none;">
                            <label for="name">    
                                Please provide name. 
                            </label>

                            <input id="A-level-input" name="Alevel_name" type="text" class="form-control" required="required" placeholder="Loyola High School" />
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start-year">    
                                        From
                                    </label>
                                    <input class="form-control" type="number" name="Alevel_start_year" placeholder="Start year" min="1900" required="required"/>
                                </div>

                                <div class="col-md-6">
                                    <label for="start-year">    
                                        To
                                    </label>
                                    <input class="form-control" type="number" name="Alevel_final_year" placeholder="Final year" min="1900" required="required"/>
                                </div>                                
                            </div>
                        </div>  
                    </div>
                </div>

                <div class="row other-levels" style="display:none;">
                    <div class="col-md-12">
                        <div class="row">
                            <label for="higher_education">    
                                <br/><br/>What is your college or university hold? 
                            </label>
                        </div>
                         
                        <div class="row">
                            <label for="programscheck">   
                                Check all that apply.     
                            </label>        
                        </div>   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1">
                                        <input onchange="toggleCertificate(this)" type="checkbox" value="Certificate" name="certificate" />
                                    </div>
                                            
                                    <div class="col-md-6">
                                        <label for="certificate">
                                            Certificate
                                        </label>
                                    </div>
                                </div>

                                <div  class="row">
                                    <div class="col-md-12">
                                        <input id="certificate-name-field" name="certificatename" style="display:none;" type="text" class="form-control" required="required" placeholder="What certificate do you hold?"/>
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div class="col-md-1">
                                        <input onchange="toggleDiploma(this)" type="checkbox" value="Diploma" name="diploma"/>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <label for="diploma">
                                            Diploma
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="diploma-name-field" name="diplomaname" style="display:none;" type="text" class="form-control" required="required" placeholder="What diploma do you hold?"/>
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div class="col-md-1">
                                        <input onchange="toggleBachelor(this)" type="checkbox" value="Bachelor" name="bachelor"/>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <label for="bachelor">
                                            Bachelor
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="bachelor-name-field" name="bachelorname" style="display:none;" type="text" class="form-control" required="required" placeholder="What bachelor do you hold?"/>
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div class="col-md-1">
                                        <input onchange="toggleMasters(this)" type="checkbox" value="Masters" name="masters"/>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <label for="masters">
                                            Masters
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="masters-name-field" name="mastername" style="display:none;" type="text" class="form-control" required="required" placeholder="What masters do you hold?"/>
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div class="col-md-1">
                                        <input onchange="togglePhd(this)" type="checkbox" value="PhD" name="phd"/>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <label for="phd">
                                            PhD
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="phd-name-field" name="phdname" style="display:none;" type="text" class="form-control" required="required" placeholder="What phd do you hold?"/>
                                    </div>
                                </div>

                                <br/>

                                <div class="row">
                                    <div class="col-md-1">
                                        <input onchange="toggleProfessor(this)" type="checkbox" value="Professor" name="professor"/>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <label for="professor">
                                            Professor
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input id="professor-name-field" name="professorname" style="display:none;" type="text" class="form-control" required="required" placeholder="What professor do you hold?"/>
                                    </div>
                                </div>

                                <br/>
                            </div>
                        </div> 
                    </div>
                </div>
                
                <br/>
                <div class="row">
                    <input id="save-button" type="submit" style="display:none;" value="Save" class="form-control btn btn-info btn-sm"/>
                </div>
            </div>   
        </form>

        <aside>
            <?php
                include('cv_progress.php');
            ?>
        </aside>
</section>