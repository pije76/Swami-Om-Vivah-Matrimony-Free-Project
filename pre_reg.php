<?php include('header.php'); ?>


<div class="box contents">
    <div id="mainContentForm" style="height: 528px;">
        <div id="innercontent" style ="height: 524px;">
            <div class="title">Register<hr>       
            </div>
            <div class="acontent" style ="height: 405px;">
                <div id="pre_regform">
                    <div class="performDiv">
                        <div class="formtitle" style="font-size: 18px;">
                            <u>
                                Registeration Form
                            </u>
                        </div>
                    </div>  
                    <div class="performDiv">
                        <div class="leftz" >
                            <span class="mandtory">*</span>
                            Email Id:
                        </div>

                        <div class="rightz" >
                            <input type="text" id="email_id" name="email_id" placeholder="Email Id" style="height: 10px;">
                        </div>
                        <div id="rightmost"><div id="s_img"><img src="images/SecurityLock.gif" style="height:13px;" ></div>Your information is secured.</div> 
                    </div>

                    <div class="performDiv">
                        <div class="leftz" >
                            <span class="mandtory">*</span>
                            Password:
                        </div>

                        <div class="rightz" >
                            <input type="text" id="email_id" name="email_id" placeholder="Password" style="height:10px;">
                        </div>
                    </div>

                    <div class="performDiv">
                        <div class="leftz" >
                            <span class="mandtory">*</span>
                            Confirm Password:
                        </div>

                        <div class="rightz" >
                            <input type="text" id="email_id" name="email_id" placeholder="Confirm Password" style="height: 10px;">
                        </div>
                    </div>

                    <div class="performDiv">
                        <div class="leftz" >
                            <span class="mandtory">*</span>
                            Profile Creator:
                        </div>

                        <div class="rightz" >
                            <select id="profile_creator" class="profile_creator" >
                                <option value="1" selected="selected">Self</option>
                                <option value="2">Parent</option>
                                <option value="3">Family Member</option>
                                <option value="4">Relative</option>
                                <option value="5">Friend</option>
                            </select>
                        </div>
                    </div>

                    <div class="performDiv">
                        <input id="terms_condition" type="checkbox" tabindex="13" name="terms_condition" style="width: 143px;position: relative;left: 61px;"> I have read and agree to the
                        <a class="highlight"  tabindex="14" target="_blank" href="" >Disclaimer Agreement</a>
                        ,
                        <a class="highlight" tabindex="14" target="_blank" href="">Privacy Policy</a>
                        and
                        <a class="highlight" tabindex="15" target="_blank" href="">Terms of Use</a>
                        for this site
                        <span id="terms_condition" style="color:Red;visibility:hidden;">Please read and accept terms of use and privacy policy for using this site.</span>
                    </div>

                    <div class="performDiv">
                        <div id="prereg_buttondiv">
                            <input type="button" id="prereg_button" value="Create Account">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#menunav li").removeClass("active");
    $("#aboutUsLink").addClass("active");
</script>


<?php include('footer.php'); ?>