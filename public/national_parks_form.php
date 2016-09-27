<?php  
require_once '../db_connect.php';
require_once '../Input.php';
function pageController($dbc){
    if(Input::has('name') && Input::has('location') && Input::has('date_established')
        && Input::has('area_in_acres') && Input::has('description'))
    {
        $name = trim(Input::get('name'));
        $location = trim(Input::get('location'));
        $date_established = trim(Input::get('date_established'));
        $area_in_acres = trim(Input::get('area_in_acres'));
        $description = trim(Input::get('description'));
        $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
            VALUES (:name, :location, :date_established, :area_in_acres, :description)');

        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->execute();
        var_dump($stmt);
        var_dump($_REQUEST);

    }
}
pageController($dbc);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <link
                rel="stylesheet"
                href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
                integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
                crossorigin="anonymous">
        <title>ADD PARK</title>    
        </style>
    </head>
    <body>
        <div class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" type="text" placeholder="Park Name" class="form-control" id="name" required>
                </div>
                 <div class="form-group">
                    <label for="location">State:</label>
                    <input name="location" type="text" placeholder="State" class="form-control" id="location" required>
                </div>
                <div class="form-group">
                    <label for="date_established">Date Established:</label>
                    <input name="date_established" type="text" placeholder="****-**-**" class="form-control" id="date_established" required>
                </div>
                <div class="form-group">
                    <label for="area_in_acres">Area in Acres:</label>
                    <input name="area_in_acres" type="text" placeholder="AREA" class="form-control" id="area_in_acres" required>
                </div>
                 <div class="form-group">
                    <label for="description">Description:</label>
                    <input name="description" type="text" placeholder="Descripton" class="form-control" id="description" required>
                </div>

                <p class="submit" ><input class="btn btn-lg center-block" type="submit" value="submit"></p>
                <p><a class="btn btn-lg center-block" href="national_parks.php">Back to National Parks</a></p>
            </form>
        </div>
        <!-- jQuery -->   
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <!-- Compiled and minified Materialize JavaScript -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
    </body>
</html>