<?php 

session_start();

if (isset($_SESSION['uname'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>Portail</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./resources/favicon.png">

    <link rel="stylesheet" type="text/css" href="style.css">

    <script type="text/javascript" language="javascript" src="resources/portal.js"></script>
	
</head>

<body>
    <div id="diaShow">
    <ul id="fullScreen">
    <div class="backgroundImg" id="cBackground"></div>
    </ul>
    </div>
    <div id="wrapper">
    <div id="container">
    <div id="header" class="clearfix">
    <div class="clearfix">
        <div class="xs-6" align="left">
            <div id="lang_block">
                <i id="showLanguages" class="fa-solid fa-globe">&nbsp;<span id="language_text_id">FR</span></i>

            </div>
	    &nbsp;
        </div>
        <div class="xs-6 xs-last txtRight">
            <div id="headerLogo"></div>
        </div>
    </div>
    <div id="welcome" class="txtCenter clearfix">
	    <h1 id="welcomeHeadline">Bienvenue sur le portail ENAC</h1>
    </div>
    
    <div id="logonForm_subscriptionChoice_top_title_block" class="modulHeadline">
        <h2 class="clearfix">
            <!-- <i class="fa fa-sign-in fa-fw"></i> -->
            <span id="logonForm_subscriptionChoice_top_title_text">Vous êtes connecté à internet</span>
        </h2>
    <div class="modulContent">
    <div class="clearfix">
    <div class="xs-12 m-4 m-last">
<form action="logout.php">
    <button type="submit" id="feedbackForm_disconnect_button" class="xs-12 outline feat_height">Déconnexion<button/>
</form>
    </div>
    <div class="xs-bottom">

        <dl id="feedbackForm_login_block" style="" class="clearfix">
            <dt class="label"><span id="feedbackForm_login_text">Identifiant</span></dt>
            <dd class="feedback"><span id="feedbackForm_login_value"><?php echo $_SESSION['uname']; ?></span></dd>
        </dl>
<dl id="feedbackForm_profile_block" class="clearfix">
<dt class="label">
                <span id="feedbackForm_profile_text">Profil</span>
            </dt>
            <dd class="feedback">
                <span id="feedbackForm_profile_value">PERSONNEL</span>
            </dd>
        </dl>
<dl id="feedbackForm_services_block" class="clearfix">
<dt class="label">
                <span id="feedbackForm_services_text">Services</span>
            </dt>
            <dd class="feedback">
                <span id="feedbackForm_services_value">Full_Access</span>
            </dd>
        </dl>
    </div>
    </div>
    
         <div class="row clearfix">
            <span class="xs-1">&nbsp;</span>
        </div>
        </div>
        <div id="footer">
        &nbsp;
        </div>

     </div>
     </div>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
