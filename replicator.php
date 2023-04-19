<?php


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// Include the timecheck.php file
include('timecheck.php');
?>
<!doctype html5>
<html lang="en">

<head>
    <title>Art Replicator</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
        <script src="js/ie-support/html5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-B<ainer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <style>
        @media screen and (max-width: 767px) {

            .img-original,
            .img-generated {
                width: 100% !important;
            }
        }

        @media screen and (min-width: 1400px) {

            .img-original,
            .img-generated {
                max-height: 423px !important;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 990px) {

            .img-original,
            .img-generated {
                max-height: 238px !important;
            }
        }

        @media screen and (min-width: 1200px) and (max-width: 1399px) {

            .img-original,
            .img-generated {
                max-height: 411px !important;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1199px) {

            .img-original,
            .img-generated {
                height: 360px !important;
            }
        }
    </style>
</head>

<body>
    <div class="site-content">
        <!-- HEADER CONTENT -->
        <div class="site-content">
            <?PHP

            require("header1.php");

            ?>

            <!-- MAIN CONTENT -->
            <br>
            <div class="container">
                <div class="row centered">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="images/replicator.png" class=" img fluid" style="max-height:250px;"
                                alt="An AI generated photo of a robot painting the mona lisa.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1>Art Replicator</h1>
                        <p>Utilizing Stable Diffusion to generate 512x512 images based on
                            the verbal descriptions of artworks. This page will update
                            every 24 hours with a new artwork. Works are chosen at random from
                            a relatively short list so this page is likly to repeat prompts, but
                            each output should be unique. Prompts are currently limited to 75 BERT tokens.
                            Better prompts are needed to generate images closer to their respective
                            original. Check back often to see the latest creation.
                    </div>
                </div>
                <br>
                <div class="container fluid">
                    <div class="row mb-2">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="replicator-assets/original.jpg" class="img-original img-fluid"
                                        alt="Original">
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title">Original</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <img src="replicator-assets/output.png" class="img-generated img-fluid"
                                        alt="Generated">
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title">Generated</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row mb-1">
                        <div class="col-md-6">
                            <div class="card" style="border: 0px">
                                <h1>Prompt:</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="card" style="border: 0px">
                                <?php $jsonString = file_get_contents('/opt/lampp/htdocs/sail/replicator-assets/data.json');
                                $data = json_decode($jsonString, true);
                                echo '<h1>' . $data['prompt'] . '</h1>'; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->
                <?PHP

                require("footer1.php");

                ?>
            </div>
</body>

</html>