<!DOCTYPE html>
<html>
<head>

<?php
        include "../core/employeC.php";
        $employe=new EmployeC();
        $list = $employe->afficherEmployes();
        ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <center>
    <button type=button>Ajouter Employe</button>
   <table border="1">
       <th>CIN</th>
       <th>NOM</th>
       <th>PRENOM</th>
       <?php
            foreach($list as $row){
                echo '<tr>';
                    echo '<td>'.$row['cin'] .'</td>';
                    echo '<td>'.$row['nom'] .'</td>';
                    echo '<td>'.$row['prenom'] .'</td>';
                echo '</tr>';

            } ?>
   </table>
        </center>
</body>
</html>