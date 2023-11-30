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
    
    <form name="logonForm" style="" action="login.php" method="post">
        <div id="logonForm_subscriptionChoice_top_title_block" class="modulHeadline">
        <h2 class="clearfix">
            <!-- <i class="fa fa-sign-in fa-fw"></i> -->
            <span id="logonForm_subscriptionChoice_top_title_text">Connectez-vous avec votre identifiant de Windows</span>
        </h2>
        </div>

        <div class="modulContent txtLeft">        
        <div id="logonForm_logon_block" class="clearfix">
        <div id="logonForm_logon_block_credentials" class="padTop-2">
        
        <?php if (isset($_GET['error'])) { ?>

            <p class="clearfix"><label for="logonForm_connect_button" class="xs-12 m-3">&nbsp;</label><?php echo $_GET['error']; ?></p>

            <?php } ?>

            <p class="clearfix">
            <label for="uc-logonForm-login" id="logonForm_login_text" class="fieldLabel xs-12 m-3 m-txt-rgt fieldLabel">Identifiant</label>
            <input type="text" name="uname" id="uc-logonForm-login" autocomplete="on" class="xs-12 m-7 m-last" placeholder="Identifiant">
            </p>
            <p class="clearfix">
            <label for="uc-logonForm-passwd" id="logonForm_password_text" class="fieldLabel xs-12 m-3 m-txt-rgt fieldLabel">Mot de passe</label>
            <input type="password" name="password" id="uc-logonForm-passwd" autocomplete="on" class="xs-12 m-7 m-last" placeholder="Mot de passe"></p>
            </p>
            <p class="clearfix ">
                <label for="logonForm_connect_button" class="xs-12 m-3">&nbsp;</label>
                <button type="submit" id="logonForm_connect_button" class="xs-12 m-6">Connexion</button>
        		<label for="logonForm_connect_button" class="xs-12 m-3 m-last">&nbsp;</label>
		    </p>
        </div>
        </div>
        <div class="row clearfix">
            <span class="xs-1">&nbsp;</span>
        </div>
        </div>
        <div id="footer">
        &nbsp;
        </div>

     </form>
     </div>
     </div>

</body>

</html>
