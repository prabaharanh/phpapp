<?php
include_once "dbConfig.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> PHP Application </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" </script>

        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


    </head>
    <style>


        .customers {
            font-family: Montserrat;
            border-collapse: collapse;
            width: 100%;
        }

        .customers td, .customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .customers tr:nth-child(even){background-color: #CBCCCC;}

        .customers tr:hover {background-color: #ddd;}

        .customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #203565;
            color: white;
        }


        }
    </style>
    <body>



        <div class="container">

            <div class="jumbotron">
                <div class="col-lg-6">

                   <div class="card">
                    <div class="card-body">
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					Welcome to PHP application
					<form action="site.php" method="GET">
     Num1: <input type="number" name="num1">
     Num2: <input type="number" name="num2">
     <input type="submit">
</form>

<?php
     $num1 = $_GET["num1"];
     $num2 = $_GET["num2"];
     echo $num1 + $num2;
?>
                    </div>
                    
                </div>

                        


            </div>
            </div>
            </div>
        </div>
        </div>


       


    </body>
</html>

