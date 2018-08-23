<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOC | Swetank Subham</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/custom-style.css" type="text/css">
    <style>
        .btn-danger::placeholder{
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Workspace</a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-white nav-link" style="color: #000;" href="../../phpmyadmin" target="_blank"><i class="fas fa-cogs"></i> phpMyAdmin</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row" style="height: 12px;"></div>
        <div class="row">
            <div class="card bg-faded card-block col-8 content-container">
                <?php
                    if ($handle = opendir('..')) {
                        $counter = 1;
                        $path2proj = '.';
                        echo "<div class='header'>Table of Contents</div>";
                        echo "<p style='padding-bottom: 2px;' class='project-name'><span class='col-1 btn btn-blue project-counter-btn head-btn-left'>S.No.</span><span class='col-6 project-name-btn btn btn-black'>Project Name</span><span class='col-5 btn btn-green project-size-btn head-btn-right' style='color: #fff;'>Last Modified Date</span><br><p>";
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                                if($entry == "Table of Content"){
                                    continue;
                                }else{
                                    $stat = stat("../$entry");
                                    echo "<p class='project-name'><span class='col-1 btn btn-blue2 project-counter-btn'>$counter</span><a class='col-6 project-name-btn btn btn-black2' href='../$entry' target='_blank'> $entry</a><a href='../$entry' target='_blank' class='col-5 btn btn-green2 project-size-btn' style='color: #fff;'>" . date('d F, Y H:i:s', $stat["mtime"]) . "</a><br><p>";
                                }
                                $counter++;
                            }
                        }
                        closedir($handle);
                    }
                ?>
            </div>
            <div class="col-4 card bg-faded card-block content-container">
                <div class='header'>To-Do-List</div>
                <!-- to-do form -->
                <?php
                    include '../to-do/assets/components/todoApp.php';
                ?>
                <!-- end to-do form -->
                <p style="text-align: center; margin-top: 15px;">*Under development</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/custom-js.js" type="text/javascript"></script>
</body>
</html>