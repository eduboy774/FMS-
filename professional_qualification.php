<?php
  include('db_connect.php');
   
  if(isset($_POST['submit']))
  {  
     $id = $_SESSION['login_id']; 
//      $sql="SELECT *FROM professional_qualification WHERE pdId='$id'";
//      $result=mysqli_query($conn,$sql);
//      $numRows=mysqli_num_rows($result);
//      if($numRows>0)  
//      {
//             $db_error="You Have already Entered Professional Qualification";
//      }
//      else{
     $country=trim(mysqli_real_escape_string($conn,$_POST['country']));
     $institution=trim(mysqli_real_escape_string($conn,$_POST['institution']));
     $course_name=trim(mysqli_real_escape_string($conn,$_POST['course_name']));
     $filepro=trim(mysqli_real_escape_string($conn,$_POST['filepro']));
     $startdate=trim(mysqli_real_escape_string($conn,$_POST['startdate']));
     $enddate=trim(mysqli_real_escape_string($conn,$_POST['enddate']));

     $sql="INSERT INTO professional_qualification(pdId,countrypro,institutionpro,filepro,course_namepro,startdatepro,enddatepro) VALUES('$id','$country','$institution','$course_name','$filepro','$startdate','$enddate',1)";
     $result=mysqli_query($conn,$sql);

     if($result)
     {
        $db_success= "Data Entry Successful";
     }
     else
     {
       $db_error= "Error!!!".mysqli_error($conn);
     }
//      }
  }

?>

<!DOCTYPE html>

<body>  
      
        <div class="jumbotron center_jumbotron">
              <h1>Professional Qualification</h1>


                <?php if (isset($db_error)):  ?>                    
                                   <div class="row">
                                        <div class="col-md-12">
                                          <div class="alert alert-danger">
                                          <?php echo $db_error; ?>
                                          </div>

                                        
                                        </div>
                                   
                                   </div>  
                                   <?php  endif; ?>

              <?php if (isset($db_success)): ?>
                     <div class="row">
                       <div class="col-md-12">
                            <div class="alert alert-success">
                             <?php echo $db_success; ?>
                            </div>
                      </div>
                     </div>  
               <?php  endif; ?>
                  
                    
                  

                   



                            
               <?php if(!isset($db_success)): ?>            
                            <form action="" method="post" name="professional_qualification">                   
<div class="row">
       <div class="col-md-12">
       <label for="country">Country</label><span style="color: red !important; display: inline; float: none;">*</span>      
        
            <select id="country" name="country" class="form-control" required>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Åland Islands">Åland Islands</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guernsey">Guernsey</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jersey">Jersey</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
            <option value="Moldova, Republic of">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>

                                              </div>                                                                     
                                           </div>
                                           
                                           
        <div class="row">
                        <div class="col-md-12">
                               <label for="institution">
                               Institution Name
                               </label>
                               <div class="row">
                                              <div class="col-md-12">
                               <select class="form-control" name="institution" id="institution" required>
                               <option selected>--Select --</option>
                               <option value="erb">Engineers Registration Board of Tanzania</option> 
                               <option value="catc">Civil Aviation Training Center </option> 
                               <option value="hlpc">Health Laboratory Practitioners Council </option>     
                               <option value="mrtipc">Medical Radiology and Imaging Professionals Council</option>
                               <option value="mct">Medical Council of Tanganyika</option>
                               <option value="nbaa">National  Board of Accountants & Auditors</option>
                               <option value="nit">National  Institute of Transport</option>       
                               <option value="pc">Pharmacy Council of Tanzania </option>
                               <option value="tcaa">Tanzania Civil Aviation Authority</option>
                               <option value="tirtec">Tanzania Institute of Rail Technology</option>
                               <option value="tlsb">Tanzania Library Services Board</option>     
                               <option value="tnmc">Tanzania Nursing and  Mildwifery Council</option>     
                               <option value="tra">Tanzania Revenue Authority</option>     
                               <option value="acca">The Association of Chartered Certified Accountants</option>
                               <option value="vct">Veterinary Council of Tanzania</option>
                               <option value="tiob">The Tanzania Institute of Bankers</option>
                               <option value="veta">Vocational Education and Training Authority</option>
                               <option value="veta">Vocational Education and Training Authority</option>    
                               <option value="tasac">TANZANIA SHIPPING AGENCIES CORPORATION(TASAC)</option>
                               <option value="other">Other</option>
                               </select>
                                              </div>
                               </div>
               </div>
                </div>   
                <div class="row">
                           <div class="col-md-6">
                        <label for="course_name">
                               Course Name
                        </label>
                           </div>
                </div>
           <div class="row">
                            <div class="col-md-12">
                            <select class="form-control" name="course_name" id="" required>
                            <option selected>--Select --</option>
                            <option value="adt"> Assistant Dental Technologist </option>
                            <option value="cret"> Certificate of Registration as Engineering Technician </option>
                            <option value="accaa"> ACCA Advance Diploma in Accounting & Business </option>
                            <option value="crehp"> Certificate of Registration as Environmental Health Practitioner </option>
                            <option value="crp"> Certificate of Registration as Pharmacity </option>
                            <option value="crv"> Certificate of Registration as Veterinarian </option>
                            <option value="crhlp"> Certificate of Registration Health Laboratory Practitioners </option>
                            <option value="crnm"> Certificate of Registration Nursing & Mildwifery  </option>
                            <option value="cpb"> Certified Professional Bankers </option>
                            <option value="mcm"> Master and Chief Mate </option>
                            <option value="ccna"> CCNA </option>
                            <option value="cisa"> CISA </option>
                            <option value="cisco"> CISCO </option>
                            <option value="cpa"> CPA </option>
                            <option value="dc"> Driving Licence </option>
                            <option value="pd">Professional Driving  </option>
                            <option value="tgc">Train Guard Certificate </option>
                            <option value="vpl">Valid Practise Licence </option>
                            <option value="vtc">Vocational Teachers Training Center </option>
                             <option value="other">Other </option>
                           
                            </select>
                            </div>

                                       </div>
               <div class="row">
                                <div class="col-md-12">
                        <label for="attachement">
                               Attact Your Certificate
                        </label>
              <div class="row">
                              <div class="col-md-12">
                              <input type="file" name="filepro" id="" class="form-control">
                              </div>

              </div>          
                                </div> 



               </div> 
               <div class="row">
                                <div class="col-md-6">
                                       <label for="from">
                                              Year From 
                                       </label>
                                       <br>
     <select class="form-control" name="startdate" class="datefield year" required>
       
    
       
       <option value="">Year</option>
       <option value="2030">2030</option>
       <option value="2029">2029</option>
       <option value="2028">2028</option>
	<option value="2027">2027</option>
	<option value="2026">2026</option>
	<option value="2025">2025</option>
	<option value="2017">2024</option>
	<option value="2023">2023</option>
	<option value="2022">2022</option>
	<option value="2021">2021</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	
</select>

                                </div>
       <div class="col-md-6">
                <label for="to">
                       To
                </label>  
                <select class="form-control" name="enddate" class="datefield year">
    <option value="">Year</option>
    

        <option value="2030">2030</option>
       <option value="2029">2029</option>
       <option value="2028">2028</option>
	<option value="2027">2027</option>
	<option value="2026">2026</option>
	<option value="2025">2025</option>
	<option value="2017">2024</option>
	<option value="2023">2023</option>
	<option value="2022">2022</option>
	<option value="2021">2021</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	
</select>
   
               </div> 
                      

  
               </div>  
                       <br><br>           
               <div class="row">
                     <div class="col-md-8">
                     <button type="submit"  name="submit" class="btn btn-info bt-sm btn-block">Save</button>
                     <!-- <input type="submit" name="submit" class="form-control btn btn-info  center"> -->
                     </div>

               </div>                 
              </div>
           
           </div> 
           
           </div>
           
       

       </form>
       <?php endif; ?>
       <?php
        include('cv_progress.php');
    ?>
</body>
</html>