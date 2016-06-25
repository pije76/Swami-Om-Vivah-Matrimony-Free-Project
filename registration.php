<?php include("header.php"); ?>

<div class="box contents">
    <div id="mainContentForm">
        <div id="innercontent" style="width: 974px;">
            <div class="title">Registration Form 
                <hr>
            </div>
            <div class="acontent" style="width: 957px; overflow-y: scroll;">
                <div class="personalInfo">
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Personal Information
                            </u>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Name:
                            </div>
                            <div class="rights" >
                                <input type="text" id="candidate_name" name="can_name" style="width: 240px;" placeholder="Full Name">
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Postal Address:
                            </div>
                            <div class="rights" >
                                <textarea  rows="1" cols="20" id="postal_address" style="height: 15px; margin: 0px; width: 230px;" id="can_postadd" name="can_postadd" style="width: 250px;" ></textarea> 
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Mobile No:
                            </div>
                            <div class="rights" >
                                <input type="text" id="mobile_no" name="can_mobile" style="width: 100px;" placeholder="Mobile No">
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Permanent Address:
                            </div>
                            <div class="rights" >
                                <textarea  rows="1" cols="20" id="permanent_address" style="height: 15px; margin: 0px; width: 230px;" id="can_postadd" name="can_postadd" style="width: 250px;" ></textarea> 
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Email Id:
                            </div>
                            <div class="rights" >
                                <input type="text" id="email_id" name="can_email" style="width: 180px;" placeholder="Email Id">
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                City:
                            </div>
                            <div class="rights" >
                                <select id="user_city" name="city" >
                                    <option value="Select">Select</option>
                                    <option value="Ahmednagar">Ahmednagar</option>
                                    <option value="Akola">Akola</option>
                                    <option value="Amravati">Amravati</option>
                                    <option value="Aurangabad">Aurangabad</option>
                                    <option value="Beed">Beed</option>
                                    <option value="Bhandara">Bhandara</option>
                                    <option value="Buldhana">Buldhana</option>
                                    <option value="Chandrapur">Chandrapur</option>
                                    <option value="Dhule">Dhule</option>
                                    <option value="Gadchiroli">Gadchiroli</option>
                                    <option value="Gondia">Gondia</option>
                                    <option value="Hingoli">Hingoli</option>
                                    <option value="Jalgaon">Jalgaon</option>
                                    <option value="Jalna">Jalna</option>
                                    <option value="Kolhapur">Kolhapur</option>
                                    <option value="Latur">Latur</option>
                                    <option value="Mumbai (City)">Mumbai (City)</option>
                                    <option value="Mumbai (Suburban)">Mumbai (Suburban)</option>
                                    <option value="Nagpur">Nagpur</option>
                                    <option value="Nanded">Nanded</option>
                                    <option value="Nandurbar">Nandurbar</option>
                                    <option value="Nashik">Nashik</option>
                                    <option value="Osmanabad">Osmanabad</option>
                                    <option value="Parbhani">Parbhani</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Raigad">Raigad</option>
                                    <option value="Ratnagiri">Ratnagiri</option>
                                    <option value="Sangli">Sangli</option>
                                    <option value="Satara">Satara</option>
                                    <option value="Sindhudurg">Sindhudurg</option>
                                    <option value="Solapur">Solapur</option>
                                    <option value="Thane">Thane</option>
                                    <option value="Wardha">Wardha</option>
                                    <option value="Washim">Washim</option>
                                    <option value="Yavatmal">Yavatmal</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">

                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Date of Birth:
                            </div>
                            <div class="rights" >
                                <select class="select small_1" id="date_of_birth_day"   name="date_of_birth_day" tabindex="7">
                                    <option value="">
                                        Day
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select id="date_of_birth_month" name="date_of_birth_month" tabindex="8">
                                    <option value="">
                                        Month
                                    </option>
                                    <option value="1">Jan</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Mar</option>
                                    <option value="4">Apr</option>
                                    <option value="5">May</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">Aug</option>
                                    <option value="9">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>
                                <select id="date_of_birth_yearr" name="date_of_birth_year" tabindex="9">
                                    <option value="">
                                        Year
                                    </option>
                                    <option value="1920">1920</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Birth Place:
                            </div>
                            <div class="rights" >
                                <select name="bith_place" id="bith_place">
                                    <option value="Select">Select</option>
                                    <option value="Ahmednagar">Ahmednagar</option>
                                    <option value="Akola">Akola</option>
                                    <option value="Amravati">Amravati</option>
                                    <option value="Aurangabad">Aurangabad</option>
                                    <option value="Beed">Beed</option>
                                    <option value="Bhandara">Bhandara</option>
                                    <option value="Buldhana">Buldhana</option>
                                    <option value="Chandrapur">Chandrapur</option>
                                    <option value="Dhule">Dhule</option>
                                    <option value="Gadchiroli">Gadchiroli</option>
                                    <option value="Gondia">Gondia</option>
                                    <option value="Hingoli">Hingoli</option>
                                    <option value="Jalgaon">Jalgaon</option>
                                    <option value="Jalna">Jalna</option>
                                    <option value="Kolhapur">Kolhapur</option>
                                    <option value="Latur">Latur</option>
                                    <option value="Mumbai (City)">Mumbai (City)</option>
                                    <option value="Mumbai (Suburban)">Mumbai (Suburban)</option>
                                    <option value="Nagpur">Nagpur</option>
                                    <option value="Nanded">Nanded</option>
                                    <option value="Nandurbar">Nandurbar</option>
                                    <option value="Nashik">Nashik</option>
                                    <option value="Osmanabad">Osmanabad</option>
                                    <option value="Parbhani">Parbhani</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Raigad">Raigad</option>
                                    <option value="Ratnagiri">Ratnagiri</option>
                                    <option value="Sangli">Sangli</option>
                                    <option value="Satara">Satara</option>
                                    <option value="Sindhudurg">Sindhudurg</option>
                                    <option value="Solapur">Solapur</option>
                                    <option value="Thane">Thane</option>
                                    <option value="Wardha">Wardha</option>
                                    <option value="Washim">Washim</option>
                                    <option value="Yavatmal">Yavatmal</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Gender:
                            </div>
                            <div class="rights" >
                                <select class="" id="gender" name="gender" >
                                    <option value="Select Gender" selected="selected">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Maratial Satus:
                            </div>
                            <div class="rights" >
                                <select class="" id="maratial_status" name="maratial_status">
                                    <option value="Unmarried" selected="selected">Unmarried</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widow(er)">Widow(er)</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Body Type:
                            </div>
                            <div class="rights" >
                                <select class="" id="body_type" name="body_type" >
                                    <option value="N/A" selected="selected">N/A</option>
                                    <option value="Slim">Slim</option>
                                    <option value="Athletic">Athletic</option>
                                    <option value="Average">Average</option>
                                    <option value="Heavy">Heavy</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Height:
                            </div> 
                            <div class="rights">
                                <input type="text" style="width:24px;" id="height_ft" maxlength="1" name="height_ft">Feet                         
                                <input type="text" style="width:24px;" id="height_inch" maxlength="2" name="height_inch">Inches

                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts">
                                <span class="mandtory">*</span>
                                Blood Group:
                            </div>
                            <div class="rights">
                                <select id="blood_group" name="blood_group">
                                    <option value="N/A" selected="selected">N/A</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Complexion:
                            </div>
                            <div class="rights">
                                <select id="complexion" name="complexion">
                                    <option value="Gora" selected="selected">Gora</option>
                                    <option value="Gavhal">Gavhal</option>
                                    <option value="Kala">Kala</option>
                                    <option value="Savla">Savla</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts">
                                <span class="mandtory">*</span>
                                Physical Disability:
                            </div>
                            <div class="rights">
                                <input type="text" id="physical_disability" value="N/A" name="physical_disability">
                            </div>
                            <div class="lefts">
                                <span class="mandtory">*</span>
                                Spectacles/Lenses:
                            </div>
                            <div class="rights">
                                <select id="spectacles" name="spectacles">
                                    <option value="Yes">Yes</option>
                                    <option value="No" selected="selected">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="occupationInfo">
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Education & Occupation 
                            </u>
                        </div>
                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Education Field:
                            </div>
                            <div class="rights" >
                                <select id="education_field"  name="education_field" style="width:175px;">
                                    <option value="0">--NA--</option>
                                    <option value="1">Arts-Graduate</option>
                                    <option value="4">Arts-Post graduate</option>
                                    <option value="7">CA</option>
                                    <option value="10">CFA</option>
                                    <option value="3">Commerce-Graduate</option>
                                    <option value="6">Commerce-Post graduate</option>
                                    <option value="9">CS</option>
                                    <option value="8">CWA</option>
                                    <option value="16">Defence Officers</option>
                                    <option value="13">Doctors</option>
                                    <option value="12">Engineers( Excluding Diploma Holders)</option>
                                    <option value="20">Equivalent Graduate / Post Graduate</option>
                                    <option value="11">Law - Graduate</option>
                                    <option value="19">Law - Post Graduate</option>
                                    <option value="14">Management Professionals</option>
                                    <option value="17">Pharmacy-Graduate</option>
                                    <option value="18">Pharmacy-Post Graduate</option>
                                    <option value="2">Science-Graduate</option>    
                                    <option value="5">Science-Post graduate</option>
                                    <option value="15">UPSC/MPSC</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Education:
                            </div>
                            <div class="rights" >
                                <input type="text" id="education" name="education" style="width: 240px;" placeholder="Further Elaboration">
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Occupation:
                            </div>
                            <div class="rights" >
                                <select id="occupation" name="occupation" style="width:100px;">
                                    <option value="0">Select</option>
                                    <option value="1">Business</option>
                                    <option value="2">Employee</option>
                                    <option value="3">Professionals </option>
                                    <option value="4">Self Employee</option>
                                    <option value="5">Students</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Monthly Income:
                            </div>
                            <div class="rights" >
                                <input type="text" id="monthly_income" name="monthly_income" style="width: 156px;" placeholder="">
                                <select id="currency" name="currency">
                                    <option value="1">INR</option>
                                    <option value="2">USD</option>
                                    <option value="3">GBP</option>
                                    <option value="4">EUR</option>
                                    <option value="5">AUD</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Working Place:
                            </div>
                            <div class="rights" >
                                <input type="text" id="working_place" name="working_place" placeholder="County,City">   
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Other Information:
                            </div>
                            <div class="rights" >
                                <textarea  rows="1" cols="20" id="other_information" style="height: 15px; margin: 0px; width: 230px;"  name="other_information" style="width: 250px;" ></textarea> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="otherInfo">	
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Other Information 
                            </u>
                        </div>
                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Smoking:
                            </div>
                            <div class="rights" >
                                <select  id="smoking" name="smoking">
                                    <option value="--NA--" selected="selected">--NA--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Occasionally">Occasionally</option>
                                </select> 
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Drinking:
                            </div>
                            <div class="rights" >
                                <select  id="drinking" name="drinking">
                                    <option value="--NA--" selected="selected">--NA--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Occasionally">Occasionally</option>
                                </select> 
                            </div>
                        </div>
                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Food:
                            </div>
                            <div class="rights" >
                                <select  id="food" name="food" style="width:147px;" >
                                    <option value="0">--NA--</option>
                                    <option value="3">Eggetarian</option>
                                    <option value="4">Mishra Aahari</option>
                                    <option value="2">Non-Vegetarian</option>
                                    <option value="1">Vegetarian</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="aboutmyselfInfo">	
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                About Myself 
                            </u>
                        </div>
                        <div class="performDiv" style="height:123px;">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                About Myself:
                            </div>
                            <div class="rights" >
                                <textarea  rows="1" cols="20" id="about_myself" style="height: 78px; margin: 0px; width: 682px;"  name="about_myself" style="width: 250px; position: relative;" ></textarea>
                                <span style="font-size: 10px">(Information about your hobbies & social life etc. Max 1000 characters)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="familyInfo">	
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Family Background 
                            </u>
                        </div>
                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Mamaji's Sirname:
                            </div>
                            <div class="rights" >
                                <input type="text" id="mamaji_sirname" name="mamaji_sirname" placeholder="">
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Native Place:
                            </div>
                            <div class="rights" >
                                <input type="text" id="native_place" name="native_place" placeholder="city">
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Brother(s):
                            </div>
                            <div class="rights" >
                                <select  id="brothers" name="brothers">
                                    <option value="-1">Select</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Married:
                            </div>
                            <div class="rights" >
                                <select  id="married_brothers" name="married_brothers">
                                    <option value="-1">Select</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Sisters(s):
                            </div>
                            <div class="rights" >
                                <select  id="sisters" name="sisters">
                                    <option value="-1">Select</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>

                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Married:
                            </div>
                            <div class="rights" >
                                <select  id="married_sisters" name="married_sisters">
                                    <option value="-1">Select</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv" style="height:123px;">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Family:
                            </div>
                            <div class="rights" >
                                <textarea  rows="1" cols="20" id="about_family" style="height: 78px; margin: 0px; width: 682px;"  name="about_family" style="width: 250px; position: relative;"></textarea>
                                <span style="font-size: 10px">(Father, Mother, Brothers, Sisters - Education , Occupation etc. Max 500 characters)</span>
                            </div>
                        </div>
                    </div>
                </div>   

                <div class="refrencesInfo">	
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Refrences
                            </u>
                        </div>
                        <div class="performDiv">
                            <div class="lefts" style="width:223px">
                                <span class="mandtory">*</span>
                                Name
                            </div>
                            <div class="rights" style="font-family: Georgia,'Times New Roman',Times,serif; font-size: 17px; width:223px;">
                                <span class="mandtory">*</span>
                                Relation
                            </div>
                            <div class="lefts" style="width:223px">
                                <span class="mandtory">*</span>
                                Contact No
                            </div>
                            <div class="rights" style="font-family: Georgia,'Times New Roman',Times,serif; font-size: 17px; width:223px;">
                                <span class="mandtory">*</span>
                                Address
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" style="width:223px">
                                <span class="mandtory">*</span>
                                <input type="text" id="reference_name" name="reference_name" placeholder="" style="width:133px">
                            </div>
                            <div class="rights" style="width:223px" >
                                <span class="mandtory">*</span>
                                <input type="text" id="reference_relation" name="reference_relation" placeholder="" style="width:133px">
                            </div>
                            <div class="lefts" style="width:223px">
                                <span class="mandtory">*</span>
                                <input type="text" id="reference_contact" name="reference_contact" placeholder="" style="width:133px">
                            </div>
                            <div class="rights"style="width:223px">
                                <span class="mandtory">*</span>
                                <input type="text" id="reference_address" name="reference_address" placeholder="" style="width:133px">
                            </div>
                        </div>
                        <div class="performDiv">
                            <div class="lefts" style="width:223px">
                                <input type="text" id="reference_name" name="reference_name" placeholder="" style="width:133px">
                            </div>
                            <div class="rights" style="width:223px" >
                                <input type="text" id="reference_relation" name="reference_relation" placeholder="" style="width:133px">
                            </div>
                            <div class="lefts" style="width:223px">
                                <input type="text" id="reference_contact" name="reference_contact" placeholder="" style="width:133px">
                            </div>
                            <div class="rights"style="width:223px">
                                <input type="text" id="reference_address" name="reference_address" placeholder="" style="width:133px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="horoscopeInfo">	
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Horoscope Information
                            </u>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Birth Place:
                            </div>
                            <div class="rights" >
                                <input type="text" id="birth_place" name="birth_place" placeholder="">
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Birth Time
                            </div>
                            <div class="rights" >
                                <select  id="birth_hour" name="birth_hour">
                                    <option value="">
                                        hh
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                </select>
                                <select  id="birth_minutes" name="birth_minutes">
                                    <option value="">
                                        mm
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                </select>
                                <select  id="birth_minutes" name="birth_minutes">
                                    <option value="">
                                        sec
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Nakshatra:
                            </div>
                            <div class="rights" >
                                <select  id="nakshatra" name="nakshatra" style="width:175px">
                                    <option value="0">--NA--</option>
                                    <option value="17">Anuradha</option>
                                    <option value="6">Ardra</option>
                                    <option value="9">Ashlesha</option>
                                    <option value="1">Ashwini</option>
                                    <option value="2">Bharani</option>
                                    <option value="14">Chitra</option>
                                    <option value="23">Dhanishtha</option>
                                    <option value="13">Hasta</option>
                                    <option value="18">Jyeshtha</option>
                                    <option value="3">Kritika</option>
                                    <option value="10">Magha</option>
                                    <option value="5">Mruga</option>
                                    <option value="19">Mul</option>
                                    <option value="7">Punarvasu</option>
                                    <option value="11">Purva</option>
                                    <option value="25">Purvabhadrapada</option>
                                    <option value="20">Purvashadha</option>
                                    <option value="8">Pushya</option>
                                    <option value="27">Revati</option>
                                    <option value="4">Rohini</option>
                                    <option value="24">Shatataraka</option>
                                    <option value="22">Shravan</option>
                                    <option value="15">Swati</option>
                                    <option value="12">Uttara</option>
                                    <option value="26">Uttarabhadrapada</option>
                                    <option value="21">Uttarashadha</option>
                                    <option value="16">Vishakha</option>
                                </select>
                            </div>

                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Rashi:
                            </div>
                            <div class="rights" >
                                <select  id="rashi" name="rashi" style="width:175px">
                                    <option value="0">--NA--</option>   
                                    <option value="9">Dhanu</option>
                                    <option value="6">Kanya</option>
                                    <option value="4">Kark</option>
                                    <option value="11">Kumbh</option>
                                    <option value="10">Makar</option>
                                    <option value="12">Meen</option>
                                    <option value="1">Mesh</option>
                                    <option value="3">Mithun</option>
                                    <option value="5">Sinh</option>
                                    <option value="7">Tula</option>
                                    <option value="8">Vruchik</option>
                                    <option value="2">Vrushabh</option>
                                </select>
                            </div> 
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Charan:
                            </div>
                            <div class="rights" >
                                <select  id="charan" name="charan" style="width:175px">
                                    <option value="0">--NA--</option>
                                    <option value="4">Chathurth</option>
                                    <option value="2">Dwitiya</option>
                                    <option value="1">Pratham</option>
                                    <option value="3">Trutiya</option>
                                </select>			
                            </div>

                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Nadi:
                            </div>
                            <div class="rights" >
                                <select name="nadi" id="nadi" style="width:175px;">
                                    <option value="0">--NA--</option>
                                    <option value="3">Adya</option>
                                    <option value="1">Antya</option>
                                    <option value="2">Madhya</option>
                                </select>			
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Gan:
                            </div>
                            <div class="rights" >
                                <select  id="gan" name="gan" style="width:125px">
                                    <option value="0">--NA--</option>
                                    <option value="1">Dev</option>
                                    <option value="2">Manushya</option>
                                    <option value="3">Rakshas</option>
                                </select>			
                            </div>

                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Mangal:
                            </div>
                            <div class="rights" >
                                <select name="mangal" id="mangal" style="width:125px">
                                    <option selected="selected" value="N">--NA--</option>
                                    <option value="S">Yes-Saumya</option>
                                    <option value="I">Yes-Nirdosh</option>
                                    <option value="O">No</option>
                                    <option value="D">Don't Know</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expectationInfo">	
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                            <u>
                                Expectations
                            </u>
                        </div>
                        <div class="performDiv" style="height:59;">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Martial Status:
                            </div>
                            <div class="rights" >
                                <input type="text" id="expected_maratial_status" name="expected_maratial_status" placeholder="">
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Cast:
                            </div>
                            <div class="rights" >
                                <input type="text" id="expected_cast" name="expected_cast" placeholder="">
                                <span>(if not applicable write Cast-no-bar)</span>
                            </div>
                        </div>

                        <div class="performDiv" style="height:59;">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Min Expected Height:
                            </div>
                            <div class="rights" >
                                <select name="expected_height" id="expected_height" >
                                    <option value="0">--NA--</option>
                                    <option value="1">Below 4.1</option>
                                    <option value="2">4.1</option>
                                    <option value="3">4.2</option>
                                    <option value="4">4.3</option>
                                    <option value="5">4.4</option>
                                    <option value="6">4.5</option>
                                    <option value="7">4.6</option>
                                    <option value="8">4.7</option>
                                    <option value="9">4.8</option>
                                    <option value="10">4.9</option>
                                    <option value="11">4.10</option>
                                    <option value="12">4.11</option>
                                    <option selected="selected" value="13">5.0</option>
                                    <option value="14">5.1</option>
                                    <option value="15">5.2</option>
                                    <option value="16">5.3</option>
                                    <option value="17">5.4</option>
                                    <option value="18">5.5</option>
                                    <option value="19">5.6</option>
                                    <option value="20">5.7</option>
                                    <option value="21">5.8</option>
                                    <option value="22">5.9</option>
                                    <option value="23">5.10</option>
                                    <option value="24">5.11</option>
                                    <option value="25">6.0</option>
                                    <option value="26">6.1</option>
                                    <option value="27">6.2</option>
                                    <option value="28">6.3</option>
                                    <option value="29">6.4</option>
                                    <option value="30">6.5</option>
                                    <option value="31">6.6</option>
                                    <option value="32">6.7</option>
                                    <option value="33">6.8</option>
                                    <option value="34">6.9</option>
                                    <option value="35">6.10</option>
                                    <option value="36">6.11</option>
                                    <option value="37">7 or Above</option>
                                </select>
                            </div>
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Education
                            </div>
                            <div class="rights" >
                                <input type="text" id="expected_education" name="expected_education" placeholder="">
                            </div>
                        </div>	

                        <div class="performDiv" style="height:59;">
                            <div class="lefts" >
                                Occupation:
                            </div>
                            <div class="rights" >
                                <input type="text" id="expected_occupation" name="expected_occupation" placeholder="">
                            </div>
                            <div class="lefts" >
                                Prefered Location:
                            </div>
                            <div class="rights" >
                                <input type="text" id="expected_location" name="expected_location" placeholder="">
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                Smoking:
                            </div>
                            <div class="rights" >
                                <select  id="expect_smoking" name="expect_smoking">
                                    <option value="--NA--" selected="selected">--NA--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Occasionally">Occasionally</option>
                                </select> 
                            </div>
                            <div class="lefts" >
                                Drinking:
                            </div>
                            <div class="rights" >
                                <select  id="expect_drinking" name="expect_drinking">
                                    <option value="--NA--" selected="selected">--NA--</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Occasionally">Occasionally</option>
                                </select> 
                            </div>
                        </div>

                        <div class="performDiv">
                            <div class="lefts" >
                                Food:
                            </div>
                            <div class="rights" >
                                <select  id="expect_food" name="expect_food" style="width:147px">
                                    <option value="0">--NA--</option>
                                    <option value="3">Eggetarian</option>
                                    <option value="4">Mishra Aahari</option>
                                    <option value="2">Non-Vegetarian</option>
                                    <option value="1">Vegetarian</option>
                                </select> 
                            </div>
                            <div class="lefts">
                                Spectacles/Lenses:
                            </div>
                            <div class="rights">
                                <select id="expect_spectacles" name="expect_spectacles">
                                    <option value="Yes">Yes</option>
                                    <option value="No" selected="selected">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv" style="height:36px">
                            <div class="lefts" >
                                Willing to marry defence officer? 
                            </div>
                            <div class="rights" >
                                <select  id="expect_defence" name="expect_defence" >
                                    <option value="No" selected="selected">No</option>
                                    <<option value="Yes">Yes</option>
                                </select> 
                            </div>
                            <div class="lefts">
                                Willing to go abroad:
                            </div>
                            <div class="rights">
                                <select id="expect_abroad" name="expect_abroad">
                                    <option value="Yes">Yes</option>
                                    <option value="No" selected="selected">No</option>
                                    <option value="Forfewyears">For few years</option>
                                </select>
                            </div>
                        </div>

                        <div class="performDiv" style="height:123px;">
                            <div class="lefts" >
                                <span class="mandtory">*</span>
                                Other Expectations:
                            </div>
                            <div class="rights" >
                                <textarea  rows="1" cols="20" id="expected_other_info" style="height: 78px; margin: 0px; width: 682px;"  name="expected_other_info" style="width: 250px; position: relative;"></textarea>
                                <span style="font-size: 10px">(Father, Mother, Brothers, Sisters - Education , Occupation etc. Max 500 characters)</span>
                            </div>
                        </div>

                        <div class="kundaliInfo">	
                            <div class="formtitleWrapper">
                                <div class="formtitle">
                                    <u>
                                        Kundali
                                    </u>
                                </div>
                                <div class="performDiv" style="height: 480px;">
                                    <div class="blnk_kundali">
                                        <textarea class="textara_1" id="txt_kundali_1" cols="20" rows="2" name="txt_kundali_1"></textarea>

                                        <textarea class="textara_2" id="txt_kundali_2" cols="20" rows="2" name="txt_kundali_2"></textarea>

                                        <textarea class="textara_3" id="txt_kundali_3" cols="20" rows="2" name="txt_kundali_3"></textarea>

                                        <textarea class="textara_4" id="txt_kundali_4" cols="20" rows="2" name="txt_kundali_4"></textarea>

                                        <textarea class="textara_5" id="txt_kundali_5" cols="20" rows="2" name="txt_kundali_5"></textarea>

                                        <textarea class="textara_6" id="txt_kundali_6" cols="20" rows="2" name="txt_kundali_6"></textarea>

                                        <textarea class="textara_7" id="txt_kundali_7" cols="20" rows="2" name="txt_kundali_7"></textarea>

                                        <textarea class="textara_8" id="txt_kundali_8" cols="20" rows="2" name="txt_kundali_8"></textarea>

                                        <textarea class="textara_9" id="txt_kundali_9" cols="20" rows="2" name="txt_kundali_9"></textarea>

                                        <textarea class="textara_10" id="txt_kundali_10" cols="20" rows="2" name="txt_kundali_10"></textarea>

                                        <textarea class="textara_11" id="txt_kundali_11" cols="20" rows="2" name="txt_kundali_11"></textarea>

                                        <textarea class="textara_12" id="txt_kundali_12" cols="20" rows="2" name="txt_kundali_12"></textarea>
                                    </div>
                                    <div class="performDiv">
                                        <div id="reg_button">  
                                            <input class="button" type="submit" value="Register" id="register" name="register" style="cursor:pointer;color:white;font-size:16px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <script>
            $("#menunav li").removeClass("active");
            $("#regiLink").addClass("active");
        </script>
        <script src="js/pages/registration.js"></script>
        <?php include("footer.php"); ?>