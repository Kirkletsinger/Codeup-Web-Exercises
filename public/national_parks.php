<?php  
 
    require_once '../db_connect.php';
    require_once '../Input.php';
    

    $page = input::get('page');
    $limit = 4;
    $offset = $limit * ($page -1);
    $parkTotal = $dbc->query("SELECT count(*) FROM national_parks")->fetchColumn();
    $totalPages = ceil($parkTotal/$limit);




   $parks = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>National Parks</title>
    </head>
    <body>
        <h1>National Parks</h1>

        <table>
            <tr>
            <?= $page ?>
            <?= $totalPages?>
                <th>ID</th>
                <th>Name</th> 
                <th>Date Established</th>
                <th>Area in Acres</th>  
            </tr>
                <?php foreach ($parks as $park): ?>
            
                <tr>
                    <td>
                        <?= $park['id'];  ?>
                    </td>
                    <td>
                        <?= $park['name']; ?>
                    </td>
                    <td>
                        <?= $park['date_established']; ?>
                    </td>
                    <td>
                        <?= $park['area_in_acres']; ?>
                    </td>  
                </tr>  
           <?php endforeach; ?>
        </table>
            <?php if ($page > 0): ?>
                <a href="/national_parks.php?page=<?= $page-1?>">Previous</a>
            <?php endif; ?>
            <?php for($i = 1; $i <= $totalPages; $i++): ?>
                <?= $i; ?>
            <?php endfor; ?>
                <a href="/national_parks.php?page=<?= $page?>"></a>
            <?php if ($page < $totalPages): ?>
                <a href="/national_parks.php?page=<?= $page+1?>">Next</a>
            <?php endif; ?>

    </body>
</html>