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
                <?php include("previews/die_basics/apps.ph");?>
            </div>
        </div>
        <h2>Die Standart Apps</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/test.php");?>
                <?php include("previews/test.php");?>
            </div>
        </div>
        <h2>iCloud</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/test.php");?>
                <?php include("previews/test.php");?>
            </div>
        </div>
        <h2>Tipps und Triks</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/test.php");?>
                <?php include("previews/test.php");?>
            </div>
        </div>
        <h2>Praktische Apps</h2>
        <div class="scroll_preview">
            <div class="scroll_content">
                <?php include("previews/test.php");?>
                <?php include("previews/test.php");?>
            </div>
        </div>
    </div>
</body>
</html>