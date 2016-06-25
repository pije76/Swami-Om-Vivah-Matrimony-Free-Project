<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/2011/xhtml">

    <html>
        <head>
            <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
            <title>Shree Swami Om Vadhu Var Suchak Mandal Pune</title>
            <link rel="stylesheet" href="styles/layout.css" type="text/css" />
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
            <script src="js/lib/jquery.1.7.1.min.js"></script>
            <script src="js/lib/jquery-ui.js"></script>
            <script src="js/lib/qtip.js"></script>
            <script src="js/pages/login.js"></script>
            <!-- IE -->
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
            <!-- other browsers -->
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
        </head>
        <body>

            <div class="box headerDiv">
                <div style="float: left; height:50px; width: 50px; left: 65px;position: relative;top: 43px;" >
                    <img height="90" width="90" src="images/swastika.png"/></div>   
                <div id="header">

                    <div id="logoImage"><img height="111" width="83" src="images/SwamiSamarth.jpg"/></div>
                    <div id="logoNmoto">

                        <h1><a href="#">Vadhu Var Suchak</a></h1>
                        <p><strong>Vadhu Var Suchak Mandal Pune</strong></p>
                    </div>
                    <div id="loginDiv">
                        <p>Welcome <span id="userFullName">Guest</span> | <a href="forgotUsernamePassword.php">Forgot UserName or Password</a></p>
                        <div style="width: 100%; float: left; height:35px;">
                            <input type="text" id="username" placeholder="User Name..."/>
                            <input type="password" id="password" placeholder="Password ..."/>
                            <img src="captcha.php" />
                        </div>
                        <div style="width: 100%; float: left; height:35px;">
                            <label style="float: left; position: relative; top: 10px;">Enter above Number-></label>
                            <input type="text" id="captcha" placeholder="Captcha here..."/>
                            <input type="button" name="login" id="btn_login" value="Login" />
                        </div>

                    </div>

                    <br class="spaces"/>

                </div>
                <div style="height: 50px; width: 50px; position: relative; float: right; top: -130px; right: 113px;">
                    <img height="90" width="90" src="images/swastika.png"/></div>  
            </div>
            <div style="height: 25px; background-color: snow; border:2px solid #FEAA55; width:99.7%" class="box">
                <div behavior="scroll" direction="left" scrollamount="5" class="blink" style="padding: 0px 36px; color: purple; font-weight: bolder; position: relative; top: 5px; display: block; opacity: 0.813846;">Online Registration, Upload Profile Photos and audio, Express Interests, Personal Messages, View Contact Details, Advance Search, 100% secure, Mail N Mobile verification, Dashboards</div>
            </div>
            <div class="box menus">
                <div id="menusbar">
                    <div id="menunav">
                        <ul>
                            <li id="homeLink"><a class="active" href="main.php">Home</a></li>
                            <li id="aboutUsLink"><a href="aboutus.php">About Us</a></li>
                            <li id="regiLink"><a href="registration.php">Registration</a></li>
                            <li id="showMagazineLink"><a  href="Magazine.php">Magazine</a></li>
                            <li id="contactUsLink"><a  href="contactUs.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div id="search">
                        <input type="text" id="profileId" placeholder="Enter Profile ID here..."></input>
                        <input type="button" name="btn_search_id" id="btn_search_id" value="Search"></input>
                    </div>
                    <br class="spaces"/>
                </div>
            </div>
            <div id="dialogWrapper">

                <div id="dialog" title="Alert">
                    <p></p>
                </div>
            </div>     
        </body>
    </html>

