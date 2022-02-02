

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="dist/js/bootstrap.min.js" type="text/javascript"></script>



        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */

            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

            .row.content {
                height: 450px
            }

            /* Set gray background color and 100% height */

            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */

            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */

            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {
                    height: auto;
                }
            }
        </style>
    </head>

    <body>


        <div class="container text-center">
            <div class="row content">

                <div class="col-sm-12 text-left">
                    <h1 class="text-center">Selamat Datang Di Aplikasi Pendeteksi Plagiat</h1>
                    <br/>
                    <br/>

                    <div class="row">
                        <form action="proses2.php" method="post">
                            <div class="col-md-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Jumlah K-Gram</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="kgram" placeholder="masukkan K-Gram">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Teks Asli</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="comment">Isi</label>
                                            <textarea class="form-control" name="teks1" rows="5" required id="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                          $digits = 3;


                            $value =  str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                            ?>
                            <input type="hidden" name="randomid" value="<?= $value ?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Check</button>

                            </div>
                        </form>

                    </div>
                    <br/>


                </div>

            </div>

        </div>



    </body>

    </html>
