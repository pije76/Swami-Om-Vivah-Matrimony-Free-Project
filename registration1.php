<?php include("header.php"); ?>

<div class="box contents">
    <div id="mainContentForm">
        <div id="innercontent">
            <div class="title">Registration Form 

                <hr>
            </div>
            <div class="acontent">
                <ul class="reset regist_form">


                    <li class="regist_head strong">Personal Information</li>
                    <li style="width: 100%">
                        <label class="regist_lbl fl">
                            Full Name <span class="mandtory">*</span></label>
                        <div class=" fl">

                            <input type="text" value="" class="lighttext text" id="txtfname" maxlength="80" name="txtfname">
                            <span style="color:Red;visibility:hidden;" id="RequiredFieldValidator9"> <img border="" alt="" src="images/cross.png"> </span>
                            <input type="hidden" id="TextBoxWatermarkExtender5_ClientState" name="TextBoxWatermarkExtender5_ClientState">

                            <input type="text" value="" class="lighttext text" id="txtmname" maxlength="80" name="txtmname">
                            <span style="color:Red;visibility:hidden;" id="RequiredFieldValidator10"><img border="" alt="" src="images/cross.png"></span>
                            <input type="hidden" id="TextBoxWatermarkExtender6_ClientState" name="TextBoxWatermarkExtender6_ClientState">

                            <input type="text" value="" class="lighttext text" id="txtlname" maxlength="80" name="txtlname">
                            <span style="color:Red;visibility:hidden;" id="RequiredFieldValidator12"><img border="" alt="" src="images/cross.png"></span>
                            <input type="hidden" id="TextBoxWatermarkExtender7_ClientState" name="TextBoxWatermarkExtender7_ClientState">

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Gender <span class="mandtory">*</span></label>
                        <div class=" gender fl">
                            <table border="0" style="width:150px;float: left" onclick="rblSelectedValue1(this)" class="radioWithProperWrap" id="rbt_gender">
                                <tbody><tr>
                                        <td><input type="radio" value="1" name="rbt_gender" id="rbt_gender_0"><label for="rbt_gender_0">Male</label></td><td><input type="radio" checked="checked" value="2" name="rbt_gender" id="rbt_gender_1"><label for="rbt_gender_1">Female</label></td>
                                    </tr>
                                </tbody></table>
                            <span style="color:Red;visibility:hidden;" id="RequiredFieldValidator22"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Date of Birth <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" onblur="__PopCalSetBlur(this, event);" onkeydown="__PopCalValidateKey(this, event);" onfocus="__PopCalSetFocus(this);" autocomplete="off" format="dd/mm/yyyy" calendar="pop_startdate" readonly="ReadOnly" class="text" id="txt_dob" value="26/5/1986" name="txt_dob">
                            <span style="color:Red;Position:Absolute;Top:0;Left:0;Z-Index:0;Visibility:hidden;display:none;" id="pop_startdate_Validate"></span><span style="position:absolute;top:0px;left:0px;z-index:+1000;display:none;Color:Red;" id="pop_startdate_MessageError"></span><span style="Cursor:Hand;" onclick="__PopCalShowCalendar( & quot; txt_dob & quot; , this)" id="pop_startdate_Control"><img border="0" align="absmiddle" src="/PopCalendar/Calendar.gif"></span>
                            <span style="color:Red;visibility:hidden;" id="RequiredFieldValidator1">*</span>

                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Marital Status <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <select style="display: inline" class="text" id="ddl_mstatus" name="ddl_mstatus">
                                <option value="0">--NA--</option>
                                <option value="1" selected="selected">Single</option>

                            </select>
                            <span style="color:Red;display:none;" id="RequiredFieldValidator3"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Height <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <select class="text" id="ddl_height" name="ddl_height">
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
                                <option value="13" selected="selected">5.0</option>
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
                            <span style="color:Red;display:none;" id="RequiredFieldValidator4"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Caste <span class="mandtory">*</span></label>
                        <div id="updatePanel_message">

                            <div class=" fl">
                                <select class="select" id="ddl_cast" onchange="javascript:setTimeout('__doPostBack(\'ddl_cast\',\'\')', 0)" name="ddl_cast">
                                    <option value="0">--NA--</option>
                                    <option value="1">Agri</option>
                                    <option value="2">Arya Vysya</option>
                                    <option value="3">Banjara</option>
                                    <option value="4">Barai</option>
                                    <option value="5">Bari</option>
                                    <option value="6">Bhandari</option>
                                    <option value="7">Bhavasar kshatriya</option>
                                    <option value="8">Bhoi</option>
                                    <option value="77">Brahmin</option>
                                    <option value="82">Buddhist</option>
                                    <option value="18">Chambhar</option>
                                    <option value="78">CKP</option>
                                    <option value="81">Daivadnya Brahmin</option>
                                    <option value="21">Devang Koshthi</option>
                                    <option value="22">Dhangar</option>
                                    <option value="23">Dhobi</option>
                                    <option value="92">Dhor</option>
                                    <option value="83" selected="selected">Do not want to disclose</option>
                                    <option value="24">Gabit</option>
                                    <option value="80">Gaud Saraswat Brahmin (GSB)</option>
                                    <option value="25">Gawali</option>
                                    <option value="26">Ghisadi</option>
                                    <option value="27">Gomantak</option>
                                    <option value="28">Gondhali</option>
                                    <option value="87">Gujar</option>
                                    <option value="29">Gurav</option>
                                    <option value="30">Halba Koshti</option>
                                    <option value="93">Hindu joshi</option>
                                    <option value="85">Holar</option>
                                    <option value="31">Intercaste</option>
                                    <option value="91">Jain</option>
                                    <option value="32">Jangam</option>
                                    <option value="33">Jogi (Nath)</option>
                                    <option value="35">Kasar</option>
                                    <option value="36">Kayastha</option>
                                    <option value="38">Kokanastha Maratha</option>
                                    <option value="39">Koli</option>
                                    <option value="40">Koli Mahadev</option>
                                    <option value="41">Konkani</option>
                                    <option value="42">Kosthi</option>
                                    <option value="43">Kshatriya</option>
                                    <option value="44">Kumbhar</option>
                                    <option value="45">Kunbi</option>
                                    <option value="46">Leva patil</option>
                                    <option value="79">Lingayat</option>
                                    <option value="47">Lohar</option>
                                    <option value="86">Lonari</option>
                                    <option value="48">Mahar</option>
                                    <option value="49">Mali</option>
                                    <option value="50">Maratha</option>
                                    <option value="88">Marwari</option>
                                    <option value="51">Matang</option>
                                    <option value="52">Nath</option>
                                    <option value="53">Nhavi</option>
                                    <option value="54">Otari</option>
                                    <option value="55">Patel</option>
                                    <option value="56">Pathare Prabhu</option>
                                    <option value="57">Rajput</option>
                                    <option value="58">Ramoshi</option>
                                    <option value="89">Sangar</option>
                                    <option value="64">Savji</option>
                                    <option value="60">SC</option>
                                    <option value="65">Shimpi</option>
                                    <option value="84">SKP-somvanshi kshatriya</option>
                                    <option value="67">Sonar</option>
                                    <option value="62">ST</option>
                                    <option value="68">Suthar</option>
                                    <option value="69">Swakula Sali</option>
                                    <option value="70">Teli</option>
                                    <option value="71">Vaishnav</option>
                                    <option value="72">Vaishya Vani</option>
                                    <option value="90">Vani</option>
                                    <option value="73">Vaniya</option>
                                    <option value="74">Vanjari</option>
                                    <option value="75">Vysya</option>
                                    <option value="76">Yadav</option>

                                </select>
                                <br>
                                <span style="color:Red;display:none;" id="RequiredFieldValidator11"><img border="" alt="" src="images/cross.png"></span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Sub Caste
                        </label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtsubcast" maxlength="100" name="txtsubcast">
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li><span style="color: #9FA2A5">
                            <label class="fl">
                                (If your caste is not in the list then SMS the caste name on 9890107771)</label>
                        </span></li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            &nbsp;</label>
                        <input type="checkbox" name="chkcommunity" id="chkcommunity"><label for="chkcommunity">Do Not Show Profile to Other Caste</label>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Current Location <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtcity" maxlength="100" name="txtcity">


                            <span style="color:Red;display:none;" id="RequiredFieldValidator5"><img border="" alt="" src="images/cross.png"></span>
                            <br>
                            <span style="font-size: 10px; line-height: normal"></span>
                        </div>
                        <div style="display: none;" id="trloc">
                            <label class="regist_lbl fl">
                                City</label>
                            <div style="margin-top: 5px;" class=" fl">
                            </div>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Native Place
                        </label>
                        <div class=" fl">
                            <input type="text" class="text" id="nativeplace" maxlength="100" name="nativeplace">
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Gotra</label>
                        <div class=" fl">
                            <input type="text" class="text" id="txt_gotra_and_devak" maxlength="100" name="txt_gotra_and_devak">

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Padar
                        </label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtpadar" maxlength="100" name="txtpadar">
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li style="width: 100%">
                        <label class="regist_lbl fl">
                            Upload Photo</label>
                        <div class="fl">
                            <input type="file" class="file_field" id="file_photo_1" name="file_photo_1">
                            <span style="font-size: 10px">(Allows only JPG, GIF, PNG files with Max. 300 KB size)</span>
                        </div>
                    </li>
                    <li class="regist_head strong">Education Information</li>
                    <li>
                        <label class="regist_lbl fl">
                            Educational Qualification<span class="mandtory">*</span></label>
                        <div class="fl">
                            <select class="select" id="ddl_education" name="ddl_education">
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
                            <span style="color:Red;display:none;" id="RequiredFieldValidator26"> <img border="" alt="" src="images/cross.png"> </span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Education
                        </label>
                        <div class=" fl">
                            <input type="text" class="text" id="txt_education" maxlength="100" name="txt_education">

                            <br>
                            <span style="font-size: 10px">(Further Elaboration)</span>
                        </div>
                    </li>
                    <li class="regist_head strong">Job Information</li>
                    <li>
                        <div class="fl">
                            <label class="regist_lbl fl">
                                Occupation</label>
                            <div class=" fl">
                                <select class="select" id="txt_occupation" name="txt_occupation">
                                    <option value="0">Select</option>
                                    <option value="3">Business</option>
                                    <option value="1">Employee</option>
                                    <option value="4">Professionals </option>
                                    <option value="2">Self Employee</option>
                                    <option value="5">Students</option>

                                </select>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fl">
                            <label class="regist_lbl fl">
                                Monthly Income <span class="mandtory">*</span></label>
                            <div class=" fl">

                                <input type="text" class="text" id="txtincome" maxlength="25" name="txtincome">
                                <select id="ddlcurrency" name="ddlcurrency">
                                    <option value="1">INR</option>
                                    <option value="2">USD</option>
                                    <option value="3">GBP</option>
                                    <option value="4">EUR</option>
                                    <option value="5">AUD</option>

                                </select>
                                <span style="color:Red;display:none;" id="RequiredFieldValidator7"><img border="" alt="" src="images/cross.png"></span>
                            </div>
                        </div>
                    </li>
                    <li class="regist_head strong">Other Information</li>
                    <li>
                        <label class="regist_lbl fl">
                            Blood Group
                        </label>
                        <div class=" fl">
                            <select class="select" id="ddl_blood_group" name="ddl_blood_group">
                                <option value="0">--NA--</option>
                                <option value="1">A +ve</option>
                                <option value="5">A -ve</option>
                                <option value="4">AB +ve</option>
                                <option value="8">AB -ve</option>
                                <option value="2">B +ve</option>
                                <option value="6">B -ve</option>
                                <option value="3">O +ve</option>
                                <option value="7">O -ve</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Body Type <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <select class="select" id="ddl_Personality" name="ddl_Personality">
                                <option value="0">--NA--</option>
                                <option value="2">Athletic</option>
                                <option value="1">Average</option>
                                <option value="4">Heavy</option>
                                <option value="3">Slim</option>

                            </select>
                            <span style="color:Red;display:none;" id="RequiredFieldValidator15"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Complexion <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <select class="select" id="ddl_Complexion" name="ddl_Complexion">
                                <option value="0">--NA--</option>
                                <option value="5">Dark</option>
                                <option value="2">Fair</option>
                                <option value="1">Very Fair</option>
                                <option value="3">Wheatish</option>
                                <option value="4">Wheatish brown</option>

                            </select>
                            <span style="color:Red;display:none;" id="RequiredFieldValidator14"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Weight</label>
                        <div class=" fl">
                            <input type="text" class="text small" value="" id="txt_wt" maxlength="3" name="txt_wt">

                            Kg.
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Smoking</label>
                        <div class=" fl">
                            <select class="select" id="ddl_smoking" name="ddl_smoking">
                                <option value="--NA--" selected="selected">--NA--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Occasionally">Occasionally</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Drinking</label>
                        <div class=" fl">
                            <select class="select" id="ddldrinking" name="ddldrinking">
                                <option value="--NA--" selected="selected">--NA--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Occasionally">Occasionally</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Food</label>
                        <div class=" fl">
                            <select class="select" id="ddl_food" name="ddl_food">
                                <option value="0">--NA--</option>
                                <option value="3">Eggetarian</option>
                                <option value="4">Mishra Aahari</option>
                                <option value="2">Non-Vegetarian</option>
                                <option value="1">Vegetarian</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Spectacles / Lenses</label>
                        <div class=" gender fl">
                            <input type="radio" value="rbt_yes_spectacle" name="spectacle" id="rbt_yes_spectacle"><label for="rbt_yes_spectacle">Yes</label>
                            <input type="radio" checked="checked" value="rbt_no_spectacle" name="spectacle" id="rbt_no_spectacle"><label for="rbt_no_spectacle">No</label>
                        </div>
                    </li>
                    <div class="clr">
                    </div>



                    <li class="regist_head strong">About Myself</li>
                    <li style="width: 100%">
                        <label class="regist_lbl fl">
                            About Myself&nbsp;<span class="mandtory">*</span>
                        </label>
                        <div class=" fl">
                            <textarea cols="80" wrap="physical" rows="5" onkeyup="textCounter(about_myself_name, about_myself_name_1, 1000)" class="textarea big" onkeydown="textCounter(about_myself_name, about_myself_name_1, 1000)" id="about_myself_name" name="about_myself_name"></textarea>
                            <span style="color:Red;display:none;" id="about_myself_name_2"> <img border="" alt="" src="images/cross.png"> </span>
                            <input type="text" class="text smallest" value="1000" size="3" maxlength="3" readonly="" id="about_myself_name_1" name="">
                            <br>
                            <span style="font-size: 10px">(Information about your hobbies &amp; social life etc.
                                Max 1000 characters)</span>
                        </div>
                    </li>
                    <li class="regist_head strong">Family Information</li>
                    <li>
                        <label class="regist_lbl fl">
                            Mamaji's Surname
                        </label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtMamajissurname" maxlength="100" name="txtMamajissurname">
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Brother (s)
                        </label>
                        <div class="fl">
                            <select class="select small" id="ddlbrother" name="ddlbrother">
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
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            of which married
                        </label>
                        <div class="fl">
                            <select class="select small" id="ddlBrothermarried" name="ddlBrothermarried">
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
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Sister (s)
                        </label>
                        <div class="fl">
                            <select class="select small" id="ddlsister" name="ddlsister">
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
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            of which married
                        </label>
                        <div class="fl">
                            <select class="select small" id="ddlSistermarried" name="ddlSistermarried">
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
                    </li>
                    <div class="clr">
                    </div>
                    <li style="width: 100%">
                        <label class="regist_lbl fl">
                            Family Background &nbsp;<span class="mandtory">*</span></label>
                        <div class=" fl">
                            <textarea cols="80" wrap="physical" rows="3" onkeyup="textCounter(txt_father_name, ctl00_ContentPlaceHolder1_remLen2, 500)" class="textarea big" onkeydown="textCounter(txt_father_name, ctl00_ContentPlaceHolder1_remLen2, 500)" id="txt_father_name" name="txt_father_name"></textarea>
                            <span style="color:Red;display:none;" id="RequiredFieldValidator8"> <img border="" alt="" src="images/cross.png"> </span>
                            <input type="text" class="text smallest" value="500" size="3" maxlength="3" readonly="" id="ctl00_ContentPlaceHolder1_remLen2" name="">
                            <br>
                            <span style="font-size: 10px">(Father, Mother, Brothers, Sisters - Education , Occupation
                                etc. Max 500 characters)</span>
                        </div>
                    </li>
                    <li style="width: 100%">
                        <label class="regist_lbl fl">
                            About Relatives &nbsp;<span class="mandtory">*</span></label>
                        <div class=" fl">
                            <textarea cols="80" wrap="physical" rows="3" onkeyup="textCounter(about_relatives_name, about_relatives_name_1, 300)" class="textarea big" onkeydown="textCounter(about_relatives_name, about_relatives_name_1, 300)" id="about_relatives_name" name="about_relatives_name"></textarea>
                            <span style="color:Red;display:none;" id="about_relatives"> <img border="" alt="" src="images/cross.png"> </span>
                            <input type="text" class="text smallest" value="300" size="3" maxlength="3" readonly="" id="about_relatives_name_1" name="">
                            <br>
                            <span style="font-size: 10px">(Information about your relatives and family friends etc.
                                Max 300 characters)</span>
                        </div>
                    </li>
                    <li class="regist_head strong">Reference</li>
                    <table width="100%" cellspacing="5" cellpadding="5" border="0">
                        <tbody><tr>
                                <td align="center">
                                    Sr. No.
                                </td>
                                <td align="left">
                                    Name
                                </td>
                                <td align="left">
                                    Relation
                                </td>
                                <td align="left">
                                    Contact Number
                                </td>
                                <td align="left">
                                    Address
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    1 <span class="mandtory">*</span>
                                </td>
                                <td>
                                    <input type="text" class="text" id="txtname1" maxlength="100" name="txtname1">
                                    <span style="color:Red;display:none;" id="RequiredFieldValidator18"> <img border="" alt="" src="images/cross.png"></span>

                                </td>
                                <td>
                                    <input type="text" class="text" id="txtrelation1" maxlength="100" name="txtrelation1">
                                    <span style="color:Red;display:none;" id="RequiredFieldValidator20"><img border="" alt="" src="images/cross.png"></span>

                                </td>
                                <td>
                                    <input type="text" class="text" id="txtphone1" maxlength="100" name="txtphone1">
                                    <span style="color:Red;display:none;" id="RequiredFieldValidator21"><img border="" alt="" src="images/cross.png"></span>

                                </td>
                                <td>
                                    <input type="text" class="text" id="txtaddress1" maxlength="100" name="txtaddress1">
                                    <span style="color:Red;display:none;" id="RequiredFieldValidator23"><img border="" alt="" src="images/cross.png"></span>

                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    2
                                </td>
                                <td>
                                    <input type="text" class="text" id="txtname2" maxlength="100" name="txtname2">

                                </td>
                                <td>
                                    <input type="text" class="text" id="txtrelation2" maxlength="100" name="txtrelation2">

                                </td>
                                <td>
                                    <input type="text" class="text" id="txtphone2" maxlength="100" name="txtphone2">

                                </td>
                                <td>
                                    <input type="text" class="text" id="txtaddress2" maxlength="100" name="txtaddress2">

                                </td>
                            </tr>
                        </tbody></table>
                    <li class="regist_head strong">Contact Information</li>
                    <li>
                        <label class="regist_lbl fl">
                            Address <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <textarea onkeyup="TextBoxMaxLength1(this, '', 250)" class="textarea" id="txt_Permanent_Address" cols="20" rows="2" name="txt_Permanent_Address"></textarea>

                            <span style="color:Red;display:none;" id="RequiredFieldValidator29"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            City <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtcityother" maxlength="45" name="txtcityother">
                            <span style="color:Red;display:none;" id="RequiredFieldValidator28"><img border="" alt="" src="images/cross.png"></span>

                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            State <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtstateother" maxlength="45" name="txtstateother">
                            <span style="color:Red;display:none;" id="RequiredFieldValidator27"><img border="" alt="" src="images/cross.png"></span>

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Country <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtcountry" maxlength="45" name="txtcountry">
                            <span style="color:Red;display:none;" id="RequiredFieldValidator6"><img border="" alt="" src="images/cross.png"></span>

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Phone Number <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txt_ph_no" maxlength="50" name="txt_ph_no">

                            <span style="color:Red;display:none;" id="RequiredFieldValidator24"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Mobile Number <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txt_mob_no" maxlength="50" name="txt_mob_no">
                            <span style="color:Red;display:none;" id="RequiredFieldValidator25"> <img border="" alt="" src="images/cross.png"></span>

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Email ID <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <input type="text" class="text" id="txt_email_id" maxlength="150" name="txt_email_id">
                            <span style="color:Red;display:none;" id="RegularExpressionValidator5"><img border="" alt="" src="images/cross.png"></span>

                            <span style="color:Red;display:none;" id="RequiredFieldValidator30"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Alternate Email ID
                        </label>
                        &nbsp;<div class=" fl">
                            <input type="text" class="text" id="txt_alteremial" maxlength="150" name="txt_alteremial">
                            <span style="color:Red;display:none;" id="RegularExpressionValidator1"><img border="" alt="" src="images/cross.png"></span>

                        </div>
                    </li>
                    <li class="regist_head strong">Horoscope Information</li>
                    <li>
                        <label class="regist_lbl fl">
                            Birth Place</label>
                        <div class="fl">
                            <input type="text" class="text" value="" id="txt_birth_place" maxlength="100" name="txt_birth_place">

                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Birth Time</label>
                        <div class=" fl">
                            <input type="text" class="lighttext text" value="" id="txt_birth_time" name="txt_birth_time">
                            <input type="hidden" id="MaskedEditExtender12_ClientState" name="MaskedEditExtender12_ClientState">
                            <span style="color:Red;display:none;" id="MaskedEditValidator3"></span>
                            <input type="hidden" id="TextBoxWatermarkExtender2_ClientState" name="TextBoxWatermarkExtender2_ClientState">
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Nakshatra</label>
                        <div class=" fl">
                            <select class="select" id="ddl_Nakshatra" name="ddl_Nakshatra">
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
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Rashi</label>
                        <div class=" fl">
                            <select class="select" id="ddl_Ras" name="ddl_Ras">
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
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Charan</label>
                        <div class=" fl">
                            <select class="select" id="ddl_Charan" name="ddl_Charan">
                                <option value="0">--NA--</option>
                                <option value="4">Chathurth</option>
                                <option value="2">Dwitiya</option>
                                <option value="1">Pratham</option>
                                <option value="3">Trutiya</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Nadi</label>
                        <div class=" fl">
                            <select class="select" id="ddl_Nadi" name="ddl_Nadi">
                                <option value="0">--NA--</option>
                                <option value="3">Adya</option>
                                <option value="1">Antya</option>
                                <option value="2">Madhya</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Gan</label>
                        <div class=" fl">
                            <select class="select" id="ddl_Gan" name="ddl_Gan">
                                <option value="0">--NA--</option>
                                <option value="1">Dev</option>
                                <option value="2">Manushya</option>
                                <option value="3">Rakshas</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Mangal</label>
                        <div class=" gender fl">

                            <select class="select" id="ddlmangal" name="ddlmangal">
                                <option value="N" selected="selected">--NA--</option>
                                <option value="S">Yes-Saumya</option>
                                <option value="I">Yes-Nirdosh</option>
                                <option value="O">No</option>
                                <option value="D">Don't Know</option>
                                <option value="Y">Yes</option>

                            </select>
                        </div>
                    </li>
                    <li class="regist_head strong">Expectations</li>
                    <li style="width: 100%;">
                        <label class="regist_lbl fl">
                            Marital Status <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <select class="select" id="ddl_expect_Marital_Status" name="ddl_expect_Marital_Status">
                                <option value="0">--NA--</option>
                                <option value="1" selected="selected">Single</option>

                            </select>
                            <span style="color:Red;display:none;" id="RequiredFieldValidator17"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li style="width: 100%;">
                        <label class="regist_lbl fl">
                            Caste <span class="mandtory">*</span></label>
                        <div class="fl">


                            <input type="text" class="text" id="txtExpCast" maxlength="45" name="txtExpCast">

                            <span style="color:Red;display:none;" id="RequiredFieldValidator2"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li><span style="color: #9FA2A5">
                            <label class="fl">
                                ( If Not Applicable write ‘Caste No Bar’)</label>
                        </span></li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Min Expected Height <span class="mandtory">*</span></label>
                        <div class=" fl">
                            <select class="select" id="ddl_expect_height" name="ddl_expect_height">
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
                                <option value="13" selected="selected">5.0</option>
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
                            <span style="color:Red;display:none;" id="RequiredFieldValidator19"><img border="" alt="" src="images/cross.png"></span>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Education<span class="mandtory">*</span></label>
                        <input type="text" class="text" id="txeducationexpected" name="txeducationexpected">
                        <span style="color:Red;display:none;" id="RequiredFieldValidator31"><img border="" alt="" src="images/cross.png"></span>

                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Occupation
                        </label>
                        <div class=" fl">
                            <input type="text" class="text" id="txtExpoccupation" maxlength="45" name="txtExpoccupation">
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Preferred Location
                        </label>
                        <div class="fl">
                            <input type="text" class="text" id="txtExppreferredlocation" name="txtExppreferredlocation">
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Smoking</label>
                        <div class=" fl">
                            <select class="select" id="ddl_smoking_1" name="ddl_smoking_1">
                                <option value="--NA--" selected="selected">--NA--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Occasionally">Occasionally</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Drinking</label>
                        <div class=" fl">
                            <select class="select" id="ddldrinking_1" name="ddldrinking_1">
                                <option value="A" selected="selected">--NA--</option>
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                                <option value="O">Occasionally</option>

                            </select>
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <li>
                        <label class="regist_lbl fl">
                            Food</label>
                        <div class=" fl">
                            <select class="select" id="ddl_food_1" name="ddl_food_1">
                                <option value="0">--NA--</option>
                                <option value="3">Eggetarian</option>
                                <option value="4">Mishra Aahari</option>
                                <option value="2">Non-Vegetarian</option>
                                <option value="1">Vegetarian</option>

                            </select>
                        </div>
                    </li>
                    <li>
                        <label class="regist_lbl fl">
                            Spectacles / Lenses
                        </label>
                        <div class="gender fl">
                            <input type="radio" value="rbt_yes_spectacle_2" name="spectacle1" id="rbt_yes_spectacle_2"><label for="rbt_yes_spectacle_2">Yes</label>
                            <input type="radio" checked="checked" value="rbt_yes_spectacle_1" name="spectacle1" id="rbt_yes_spectacle_1"><label for="rbt_yes_spectacle_1">No</label>
                        </div>
                    </li>
                    <div class="clr">
                    </div>
                    <div id="show">
                        <li>
                            <label class="regist_lbl fl">
                                Willing to marry defence officer?
                            </label>
                            <div class="fl">
                                <input type="radio" checked="checked" value="chk1" name="a" id="chk1"><label for="chk1">Yes</label>
                                <input type="radio" value="chk2" name="a" id="chk2"><label for="chk2">Sorry</label>
                            </div>
                        </li>
                        <li class="style1">
                            <label class="regist_lbl fl">
                                Willing to go abroad ?</label>
                            <div class=" gender fl">
                                <table border="0" id="rdolstwilltomary">
                                    <tbody><tr>
                                            <td><input type="radio" value="0" name="rdolstwilltomary" id="rdolstwilltomary_0"><label for="rdolstwilltomary_0">Yes</label></td><td><input type="radio" checked="checked" value="1" name="rdolstwilltomary" id="rdolstwilltomary_1"><label for="rdolstwilltomary_1">No</label></td><td><input type="radio" value="2" name="rdolstwilltomary" id="rdolstwilltomary_2"><label for="rdolstwilltomary_2">For Few Years</label></td>
                                        </tr>
                                    </tbody></table>
                            </div>
                        </li>
                    </div>
                    <div class="clr">
                    </div>
                    <li style="width: 100%">
                        <label class="regist_lbl fl">
                            Other Expectations</label>
                        <div class="fl">
                            <textarea cols="60" wrap="physical" rows="3" onkeyup="textCounter(ctl00_ContentPlaceHolder1_txt_message, ctl00_ContentPlaceHolder1_remLen1, 500)" class="textarea big" onkeydown="textCounter(ctl00_ContentPlaceHolder1_txt_message, ctl00_ContentPlaceHolder1_remLen1, 500)" id="ctl00_ContentPlaceHolder1_txt_message" name="ctl00_ContentPlaceHolder1_txt_message">                </textarea>
                            <input type="text" class="text smallest" value="500" size="3" maxlength="3" readonly="" id="ctl00_ContentPlaceHolder1_remLen1" name="ctl00$ContentPlaceHolder1$remLen1">
                            <br>
                            <span style="font-size: 10px">(Max 500 characters)</span>
                        </div>
                    </li>
                    <li class="regist_head strong">Kundali</li>
                    <li style="width: 100%">
                        <div class="blnk_kundali">
                            <textarea class="textara_1" id="txt_kundali_1" cols="20" rows="2" name="txt_kundali_1"></textarea>

                            <textarea class="textara_2" id="txt_kundali_2" cols="20" rows="2" name="txt_kundali_2"></textarea>

                            <textarea class="textara_3" id="txt_kundali_3" cols="20" rows="2" name="txt_kundali_3"></textarea>

                            <textarea class="textara_4" id="txt_kundali_4" cols="20" rows="2" name="txt_kundali_4"></textarea>

                            <textarea class="textara_5" id="txt_kundali_5" cols="20" rows="2" name="txt_kundali_5"></textarea>

                            <textarea class="textara_6" id="txt_kundali_6" cols="20" rows="2" name="txt_kundali_6" style="width: 103px; height: 48px;"></textarea>

                            <textarea class="textara_7" id="txt_kundali_7" cols="20" rows="2" name="txt_kundali_7"></textarea>

                            <textarea class="textara_8" id="txt_kundali_8" cols="20" rows="2" name="txt_kundali_8"></textarea>

                            <textarea class="textara_9" id="txt_kundali_9" cols="20" rows="2" name="txt_kundali_9"></textarea>

                            <textarea class="textara_10" id="txt_kundali_10" cols="20" rows="2" name="txt_kundali_10"></textarea>

                            <textarea class="textara_11" id="txt_kundali_11" cols="20" rows="2" name="txt_kundali_11"></textarea>

                            <textarea class="textara_12" id="txt_kundali_12" cols="20" rows="2" name="txt_kundali_12"></textarea>

                        </div>
                    </li>
                </ul>
            </div>

            <?php include("footer.php"); ?>








