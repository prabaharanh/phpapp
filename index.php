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
					<h1><center>Welcome to PHP application</center></h1>
					
					<body>

  <form action = "index.php" method = "post">

  Value 1: <input type = "text" name = "val1" size = "10">
  Value 2: <input type = "text" name = "val2" size = "10">
  <br>
  Calculation: <br>
  <input type = "radio" name = "calc" value = "add"> Add
  <input type = "radio" name = "calc" value = "sub"> Subtract
  <input type = "radio" name = "calc" value = "mul"> Multiply
  <input type = "radio" name = "calc" value = "div"> Divide 
  <hr>
  <input type = "submit" value = "Calculate"> 
  <input type = "reset" value = "Clear">

  </form>
  <br>

 </body>
                    </div>
                    
                </div>

                        


            </div>
            </div>
            </div>
        </div>
        </div>


       


    </body>
</html>
 <?php 

  $val1 = $_POST['val1'];
  $val2 = $_POST['val2'];
  $calc = $_POST['calc'];

  if( is_numeric( $val1 ) && is_numeric( $val2 ) )
  {
      if( $calc != null )
      {
          switch( $calc )
          {
              case "add" : $result = $val1 + $val2; break;
              case "sub" : $result = $val1 - $val2; break;
              case "mul" : $result = $val1 * $val2; break;
              case "div" : $result = $val1 / $val2; break;
          }      
        echo( "Calculation result: $result" );
      } 
  }
  else
  { 
    echo( "Invalid entry - please retry" ); 
  }
 ?>

