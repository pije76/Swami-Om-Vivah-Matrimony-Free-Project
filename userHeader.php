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
            <!-- IE -->
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
            <!-- other browsers -->
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
        </head>
        <body>
            <div class="box headerDiv">
                <div style="float: left; height:50px; width: 50px; left: 65px;position: relative;top: 21px;" >
                    <img height="90" width="90" src="images/swastika.png"/></div>   
                <div id="header">
                    <div style="font-size:14px;width:250px; position:relative; top:-20px; float:right;">Welcome: <span id="loggedINUsername">Guest</span> | <a href="#" id="btn_logout">Logout</a></div>
                    <div id="logoImage"><img height="90" width="83" src="images/SwamiSamarth.jpg"/></div>
                    <div id="logoNmoto">

                        <h1><a href="#">Shree Swami Om</a></h1>
                        <p><strong>Vadhu Var Suchak Mandal Pune</strong></p>
                    </div>

                    <br class="spaces"/>

                </div>
                <div style="height: 50px; width: 50px; position: relative; float: right; top: -111px; right: 113px;">
                    <img height="90" width="90" src="images/swastika.png"/></div>  
            </div>
            <div style="height: 25px; background-color: snow; border:2px solid #FEAA55; width:99.7%" class="box">
                <div behavior="scroll" direction="left" scrollamount="5" class="blink" style="padding: 0px 36px; color: purple; font-weight: bolder; position: relative; top: 5px; display: block; opacity: 0.813846;">Online Registration, Upload Profile Photos and audio, Express Interests, Personal Messages, View Contact Details, Advance Search, 100% secure, Mail N Mobile verification, Online Chat, Dashboards</div>
            </div>
            <div class="box menus">
                <div id="menusbar">
                    <div id="menunav">
                        <ul>
                            <li id="homeLink"><a class="active" href="profile.php">Profile</a></li>
                            <li id="aboutUsLink"><a href="aboutus.php">Interests</a></li>
                            <li id="regiLink"><a href="registration.php">Messages</a></li>
                            <li id="showMagazineLink"><a  href="Magazine.php">Magazine</a></li>
                            <li id="contactUsLink"><a  href="contactUs.php">My Searches</a></li>
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

