<?php 
require_once '../db_connect.php';
require_once '../input.php';
function getTheParks($dbc){
    $page = !(Input::has('page')) ? 1 : Input::get('page');
    $limit = 4;
    $offset = $page * $limit - $limit;
    $parkTotal = $dbc->query("SELECT count(*) from national_parks")->fetchColumn();
    $totalPages = $parkTotal/4;
    $totalPages = ceil($totalPages);
    //This code creates my database qrery, uses a prepared statment for the offset and limit
    $stmt = $dbc->prepare("SELECT * FROM national_parks ORDER BY date_established DESC LIMIT :limit offset :offset");
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    //the code below pulls all of the data from the database and puts it into an array that I can use later
    $parks = [];
    while($park = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $parks[] = $park;
    }
    return [
     'parks' => $parks,
     'page' => $page,
     'totalPages' => $totalPages,
    ];
}
extract(getTheParks($dbc));
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
        <title>National Parks</title>
        <style>
            body{
                background-image: url("");
                background-repeat: no-repeat;
                background-position: center;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>National Parks</h1><br>
        <div class="container">
            <section class="col-sm-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Date Established</th>
                            <th>Total Area (Acres)</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                     <!-- This code puts the park data into the correct columm based on the key in the associative arraty I creared earlier -->
                        <?php foreach ($parks as $park): ?>
                            <tr>
                                <td><?= $park['name']; ?></td>
                                <td><?= $park['location']; ?></td>
                                <td><?= $park['date_established']; ?></td>
                                <td><?= $park['area_in_acres']; ?></td>
                                <td><?= $park['description']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                      <tfoot>
                        <tr>
                            <td colspan="12">
                                <nav aria-label="Page navigation" class="text-center">
                                    <ul class="pagination">
                                        <li>

                                 <!-- This code controls when/if I see the Previous Page and Next Page as well as national_parks_form Links -->
                                            <

                                            <?php if($page > 1): ?>
                                            <a href="?page=<?= $page - 1?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        <?php endif; ?>
                                        </li>
                                        <?php for($i = 1; $i <= $totalPages; $i++): ?>
                                        <?= "<li><a href='?page=" . $i ."'>" . $i . "</a></li>" ?>
                                    <?php endfor; ?>
                                        <li>
                                            <?php if($page < $totalPages): ?>
                                            <a href="?page=<?= $page +1 ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        <?php endif; ?>
                                        </li>
                                        <li><a class="" id="add_park" href="national_parks_form.php">Add More</a>
                                            
                                     
                                        
                                      
                                    </ul>
                                </nav>
                            </td>
                        </tr>
                        <tr>
                      </tfoot>
                </table>
            </section>
        </div>
    <script type="text/javascript">
    $(document).ready(function(){
    "use strict";
      // Toggle active class on .park-row when clicked
      $('.park-row').click(function(){
       $(this).toggleClass('active');
      });
      // Activate Bootstraps popover
      $('[data-toggle="popover"]').popover();
      // Set hotlink for each Park in the `.park-row`
      $('.park-row').on('click', function() {
        var redirectUrl = $(this).data('website');
        window.location = redirectUrl;
      })
      var pageNumber = $('#pageNumber').html();
      console.log(pageNumber);
    });
  </script>
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