<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table {
            border: 3px solid black;
            border-collapse: collapse;
        }

        td {
            text-align: center;
        }
    </style>
</head>

<body class="container">
    
    <?php
    // session_start();
    include_once 'db_connect.php';

    $sql3 = "SELECT id,title , t_start, t_end, circular, department, organiser, t_desc, t_type, t_place, speaker FROM training ";
    $result = mysqli_query($conn, $sql3);
    // mysqli_close($conn);

    echo "<table class='table table-light table-hover table-responsive-md mt-3 mb-3'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<td>" . "S.no." . "</td>";
    echo "<td>" . "Title/Subject" . "</td>";
    echo "<td>" . "Start date" . "</td>";
    echo "<td>" . "End date" . "</td>";
    echo "<td>" . "Circular" . "</td>";
    echo "<td>" . "Department" . "</td>";
    echo "<td>" . "Organiser" . "</td>";
    echo "<td>" . "Type" . "</td>";
    echo "<td>" . "Description" . "</td>";
    echo "<td>" . "Place" . "</td>";
    echo "<td>" . "Speaker" . "</td>";
    echo "<td>" . "Action" . "</td>";
    echo "</tr>";
    echo "</thead>";

    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["t_start"]; ?></td>
            <td><?php echo $row["t_end"]; ?></td>
            <td><?php echo $row["circular"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo $row["organiser"]; ?></td>
            <td><?php echo $row["t_type"]; ?></td>
            <td><?php echo $row["t_desc"]; ?></td>
            <td><?php echo $row["t_place"]; ?></td>
            <td><?php echo $row["speaker"]; ?></td>
            <td><a href = "php/getid.php?editid=<?php echo $row['id']?>"><button type="button" name="update" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></a><a href="php/deletetraining.php?delid=<?php echo $row['id'] ?>"><button type="button" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a></td>
       
        </tr>
    <?php
        $i++;
    } ?>
    </table>
    <!-- <br>
    <a href="index.php" class="d-grid"><button type="button" class="btn btn-primary mt-2 mb-4 btn-block vw-90">Insert New Data</button></a> -->


</body>

</html>