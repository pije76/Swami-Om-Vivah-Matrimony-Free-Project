<?php include("header.php"); ?>

<div class="box contents">
    <div id="mainContentForm">
        <div id="innercontent">
            <div class="title">Forgot Username/Password 
                <hr>
            </div>
            <div class="acontentCenterDiv">
                <div class="personalInfo">
                    <div class="formtitleWrapper">
                        <div class="formtitle">
                        </div>
                        <div class="centerDiv">
                            <div class="leftCenterDiv" >
                                <span class="mandtory">*</span>
                                Email Id:
                            </div>
                            <div class="rightCenterDiv" >
                                <input type="text" id="emailId" name="emailId" style="width: 240px;" placeholder="Email ID">
                            </div>
                        </div>
                        <div class="centerDiv">
                            <div class="leftCenterDiv" >
                                <span class="mandtory">*</span>
                                Mobile Number
                            </div>
                            <div class="rightCenterDiv" >
                                <input type="text" id="mobileno" name="mobileno" style="width: 240px;" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="submitButtonDiv">
                            <input id="submit" type="button" name="submit" value="Submit" />
                        </div>
                    </div>

                </div>

            </div>
            <?php include("footer.php"); ?>