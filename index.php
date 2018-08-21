<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOC | Swetank Subham</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .center{
            text-align: center;/*3-5 2nd Jugnoo*/
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
        a.project-name-btn, .project-counter-btn{
            padding: 0 10px 0 10px;
        }
        .content-container{
            padding: 5px;
        }
        a.project-name-btn{
            border-radius: 0 0 0 0;
        }
        .project-counter-btn{
            border-radius: 0 0 0 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 center pad align-items-start header-container">
                <div id="header"><h1>Table of Contents</h1></header></div>
            </div>
        </div>
        <div class="row" style="height: 12px;"></div>
        <div class="row">
            <div class="offset-sm-2 card bg-faded card-block col-8 content-container">
                <?php
                    if ($handle = opendir('..')) {
                        $counter = 1;
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                                if($entry == "Table of Content"){
                                    continue;
                                }else{
                                    echo "<p class='project-name'><span class='btn btn-danger project-counter-btn'>$counter</span><a class='project-name-btn btn btn-primary' href='../$entry'> $entry</a><br><p>";
                                }
                                $counter++;
                            }
                        }
                        closedir($handle);
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>