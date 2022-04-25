<?php
require('../query/conDB.php');
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
    </thead>
    <tbody>
        <?php
               $sql = "SELECT * FROM tb_user ORDER BY name ASC";
               $result = $mysqli->query($sql);
               $i = 1;
               while ($row = $result->fetch_assoc()) {
               ?>
                   <tr>
                       <td><?= $i++ ?></td>
                       <td><?= $row['name'] ?></td>
                       <td><?= $row['sname'] ?></td>
                       <td><?= $row['age'] ?></td>
                       <td><?= $row['sex'] ?></td>
                   </tr>
               <?php
               }
               ?>
           </tbody>
       </table