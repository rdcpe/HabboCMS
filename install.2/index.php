<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Fubbo:  </title>

        <script type="text/javascript">
        var andSoItBegins = (new Date()).getTime();
        var ad_keywords = "";
        document.habboLoggedIn = false;
        var habboName = "null";
        var habboReqPath = "../";
        var habboStaticFilePath = "http://fubbo.net/images.fubbo.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery";
        var habboImagerUrl = "http://www.habbo.co.uk/habbo-imaging/";
        var habboPartner = "";
        var habboDefaultClientPopupUrl = "..//client";
        window.name = "habboMain";
        if (typeof HabboClient != "undefined") { HabboClient.windowName = "uberClientWnd"; }
        </script>

        <link rel="shortcut icon" href="../web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon">
        <script src="../web-gallery/static/js/libs2.js" type="text/javascript"></script>
        <script src="../web-gallery/static/js/visual.js" type="text/javascript"></script>
        <script src="../web-gallery/static/js/libs.js" type="text/javascript"></script>
        <script src="../web-gallery/static/js/common.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../web-gallery/v2/styles/style.css" type="text/css">
        <link rel="stylesheet" href="../web-gallery/v2/styles/buttons.css" type="text/css">
        <link rel="stylesheet" href="../web-gallery/v2/styles/boxes.css" type="text/css">
        <link rel="stylesheet" href="../web-gallery/v2/styles/tooltips.css" type="text/css">
        <link rel="stylesheet" href="../web-gallery/v2/styles/changepassword.css" type="text/css">
        <link rel="stylesheet" href="../web-gallery/v2/styles/forcedemaillogin.css" type="text/css">
        <link rel="stylesheet" href="../web-gallery/v2/styles/quickregister.css" type="text/css">
        <meta name="description" content="Erstelle deinen Pizza, baue Raeume und finde neue Freunde!">
        <meta name="keywords" content="uber, uberhotel, uber hotel, meth0d, nillus, ragezone, retro, keep it real, private server, free, credits, habbo hotel , virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets , room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer">

        <!--[if IE 8]>
            <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/v2/styles/ie8.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/v2/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/v2/styles/ie6.css" type="text/css" />
            <script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url(http://www.habbo.co.uk/js/csshover.htc); }
            </style>
        <![endif]-->
        <meta name="build" content="54-BUILD 45 - 18.05.2010 16:16 - de">
    </head>
    <link rel="stylesheet" type="text/css" href="data:text/css,">

    <body id="client" class="background-agegate">
        <div id="overlay"></div>
        <img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;">

        <div id="change-password-form" style="display: none;">
            <div id="change-password-form-container" class="clearfix">
                <div id="change-password-form-title" class="bottom-border">Wachtwoord vergeten?</div>
                <div id="change-password-form-content" style="display: none;">
                    <form method="post" action="..//account/password/identityResetForm" id="forgotten-pw-form">
                        <input type="hidden" name="page" value="..//quickregister/start?changePwd=true">
                        <span>Vul hier je e-mailadres in:</span>
                        <div id="email" class="center bottom-border">
                            <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48">
                            <div id="change-password-error-container" class="error" style="display: none;">Vul alsjeblieft een werkend e-mailadres in</div>
                        </div>
                    </form>
                    <div class="change-password-buttons">
                        <a href="#" id="change-password-cancel-link">Annuleren</a>
                        <a href="#" id="change-password-submit-button" class="new-button"><b>Verstuur e-mail</b><i></i></a>
                    </div>
                </div>
                <div id="change-password-email-sent-notice" style="display: none;">
                    <div class="bottom-border">
                        <span>Een mail met een link waarmee jij je wachtwoord kunt aanpassen is verstuurd naar jouw mailadres.</span>
                        <div id="email-sent-container"></div>
                    </div>
                    <div class="change-password-buttons">
                        <a href="#" id="change-password-change-link">Terug</a>
                        <a href="#" id="change-password-success-button" class="new-button"><b>Sluiten</b><i></i></a>
                    </div>
                </div>
            </div>
            <div id="change-password-form-container-bottom"></div>
        </div>

        <script type="text/javascript">
            HabboView.add( function() {
                 ChangePassword.init();
            });
        </script>

        <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/v2/styles/quickregister.css" type="text/css">
        <link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/160b/web-gallery/v2/styles/forcedemaillogin.css" type="text/css">

        <p class="phishing-warning">Diese Einrichtung wird solange angezeigt bis sie den Ordner "install" l&ouml;schen!</p>
        <div id="stepnumbers">
            <div class="step1focus">Willkommen</div>
            <div class="step2">SQL Anpassungen</div>
            <div class="step3">Client Einrichtung</div>
            <div class="stephabbo"></div>
        </div>

        <div id="main-container">
            <form id="quickregisterform" method="post" action="../quickregister/age_gate_submit">
                <div id="title">
                    ShorsideCMS - Willkommen
                </div>

                <div id="date-selector">
                    <div id="agegate-notice"><span style="font-size:12px; color: #00ccff;">Willkommen beim Einrichtungsassistenten f&uuml;r ShorsideCMS</span></div>
                    <p>Bitte stellen sie sicher das sie in der Datei "/inc/inc.config.php" die richtigen Datenbankdaten angegeben haben!</p>
                </div>

                <div class="delimiter_smooth">
                    <div class="flat">&nbsp;</div>
                    <div class="arrow">&nbsp;</div>
                    <div class="flat">&nbsp;</div>
                </div>

                <div id="inner-container">
                    <h3>Was passiert w&auml;hrend der Einrichtung?</h3>
                    <li>- Anpassung der Datenbank f&uuml;r Seitennavigation</li>
                    <li>- Reinigung der Datenbank von alten Usern und R&auml;men</li>
                    <li>- Reperatur auf Standardnavigator</li>
                    <li>- Einrichtung des Clienten</li>
                </div>
            </form>
            <div id="select">
                <a id="back-link" href="step3.php">SQL &uuml;berspringen und zu Schritt 3 &raquo;</a>
                <div class="button">
                    <a id="proceed" href="step2.php" class="area">Weiter</a>
                    <span class="close"></span>
                </div>
           </div>
        </div>

        <script type="text/javascript">
            document.observe("dom:loaded", function() {
                Event.observe($("back-link"), "click", function() {
                    Overlay.show(null,'Laden...');
                });
                Event.observe('proceed', 'click', function(event) {
                    Overlay.show(null,'Laden...');
                    $("quickregisterform").submit();
                });
                var boyImg = $$(".select_gender.boy img");
                if (boyImg.length > 0) {
                    boyImg[0].observe("click", function() {$("radio-button-boy").checked=true;});
                }
                var girlImg = $$(".select_gender.girl img");
                if (girlImg.length > 0) {
                    girlImg[0].observe("click", function() {$("radio-button-girl").checked=true;});
                }
                var dateSelector = $$("#date-selector select");
                if (dateSelector.length > 0) {
                    dateSelector[0].focus();
                }
                new Ajax.Request("/quickregister/start_loaded");
            });
        </script>
        <script type="text/javascript">
            HabboView.run();
        </script>
    </body>
</html>