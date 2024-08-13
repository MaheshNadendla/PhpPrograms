<?php

    require 'Server.php';
    $po="";
    echo'<div class="heading">Girls Gone Home</div>';

    $sql = "SELECT * FROM `girlshomeout`";
    $x = mysqli_query($conn, $sql);

    $po = '<table border="1" class="tab">';
    $po .= '<tr><th>ID</th><th>NAME</th>   <th>PHONE</th> <th>PLACE</th> <th>IN TIME</th> <th>OUT TIME</th><th>STATUS</th>  </tr>';


    // Fetch data from the database and insert it into the HTML table
    while ($row = mysqli_fetch_assoc($x)) {
    $po .= '<tr>';
    foreach ($row as $value) {

        if($value==='0000-00-00 00:00:00')

        $po .= '<td>' . '-' . '</td>';

        else

        $po .= '<td>' . $value . '</td>';
    }
    $po .= '</tr>';
    }

    $po .= '</table>';

    echo "<div class='jin'>$po</div>";


?>

<?php 

require 'TableStyle.html';

?>