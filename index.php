<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOC | Swetank Subham</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
        .center{
            text-align: center;
        }
        .header-container{
            background: #000;
        }
        .pad{
            padding: 10px 10px 0px 10px;
        }
        #header{
            color: #fff;
        }
        .project-name{
            padding: 0px;
            margin-bottom: -15px;
        }
        a.project-name-btn, .project-counter-btn, .project-size-btn, .project-name-btn{
            padding: 0 10px 0 10px;
        }
        .content-container{
            padding: 5px;
        }
        a.project-name-btn, .project-name-btn{
            border-radius: 0 0 0 0;
        }
        .project-counter-btn{
            border-radius: 5px 0 0 5px;
        }
        .project-size-btn{
            border-radius: 0 5px 5px 0;
            text-align: left;
        }
        .btn-black{
            background: #000;
            color: #fff;
            text-align: left;
        }
        .btn-black2{
            background: #2F2F2F;
            color: #fff;
            text-align: left;
        }
        .btn-green{
            background: #2A4F3A;
            color: #fff;
            text-align: left;
        }
        .btn-green2{
            background: #002626;
            color: #fff;
            text-align: left;
        }
        .btn-blue{
            background: #2F6690;
            color: #fff;
            text-align: left;
        }
        .btn-blue2{
            background: #3A7CA5;
            color: #fff;
            text-align: left;
        }
        .header{
            background: linear-gradient(to bottom, rgba(0, 116, 249, 0.8), rgba(37, 63, 197, 1));
            color: #fff;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .head-btn-left{
            border-radius: 0 0 0 6px;
        }
        .head-btn-right{
            border-radius: 0 0 6px 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 center pad align-items-start header-container">
                <div id="header"><h1>Workspace</h1></header></div>
            </div>
        </div>
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
                <div class="form">
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Create To-DO" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <p style="text-align: center; margin-top: 15px;">*Under development</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>