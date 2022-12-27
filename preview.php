<?php session_start();?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("extra/head.php");?>
</head>
<body>
    <?php include("extra/menu.php");?>
    <div class="content">
        <h2>Die Basics</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/die_basics/erster_start.php");?>
                <?php include("previews/die_basics/die_macos_oberfläche.php");?>
                <?php include("previews/die_basics/die_ios_u_ipados_oberfläche.php");?>
                <?php include("previews/die_basics/apps.php");?>
            </div>
        </div>
        <h2>Die Standart Apps</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/die_standart_apps/finder.php");?>
                <?php include("previews/die_standart_apps/safari.php");?>
                <?php include("previews/die_standart_apps/systemeinstellungen.php");?>
                <?php include("previews/die_standart_apps/mail.php");?>
                <?php include("previews/die_standart_apps/nachrichten.php");?>
                <?php include("previews/die_standart_apps/notitzen.php");?>
                <?php include("previews/die_standart_apps/kalender.php");?>
                <?php include("previews/die_standart_apps/kontakte.php");?>
                <?php include("previews/die_standart_apps/erinnerungen.php");?>
                <?php include("previews/die_standart_apps/musik.php");?>
            </div>
        </div>
        <h2>iCloud</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/icloud/appleid.php");?>
            </div>
        </div>
        <h2>Tipps und Triks</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/tipps_und_triks/spotlight-suche.php");?>
                <?php include("previews/tipps_und_triks/empfelenswerte_einstellungen.php");?>
                <?php include("previews/tipps_und_triks/praktische_kurzbefehle.php");?>
            </div>
        </div>
        <h2>Praktische Apps</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/praktische_apps/whatsapp_web.php");?>
                <?php include("previews/praktische_apps/signal_for_mac.php");?>
            </div>
        </div>
    </div>
</body>
</html>