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
    <?php include_once 'db_connect.php';

    $sql4 = "SELECT personal.emp_id,firstname,lastname,department, designation ,email, phone, post FROM personal inner join professional on personal.emp_id = professional.emp_id ";
    $result4 = mysqli_query($conn, $sql4);
    // mysqli_close($conn);

    echo "<table class='table table-light table-hover table-responsive-md mt-3 mb-3'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<td>" . "S.no." . "</td>";
    echo "<td>" . "Name" . "</td>";
    echo "<td>" . "Department" . "</td>";
    echo "<td>" . "Designation" . "</td>";
    echo "<td>" . "Email" . "</td>"; 
    echo "<td>" . "Mobile" . "</td>";
    echo "<td>" . "Role" . "</td>";
    echo "<td>" . "Update" . "</td>";
    echo "<td>" . "Delete" . "</td>";
    echo "</tr>";
    echo "</thead>";

    $j = 1;
    while ($row4 = mysqli_fetch_array($result4)) {
    ?>
        <tr>
            <td><?php echo $j; ?></td>
            <td><?php echo $row4["firstname"] . " " . $row4["lastname"]; ?></td>
            <td><?php echo $row4["department"]; ?></td>
            <td><?php echo $row4["designation"]; ?></td>
            <td><?php echo $row4["email"]; ?></td>
            <td><?php echo $row4["phone"]; ?></td>
            <td><?php echo $row4["post"]; ?></td>

            <td><a href="employee.php?empid=<?php echo $row4['emp_id'] ?>"><button type="button" name="update" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></a></td>
            <td><a href="php/deleteuser.php?delid=<?php echo $row4['emp_id'] ?>"><button type="button" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a></td>
        </tr>
    <?php
        $j++;
    } ?>
    </table>
    <!-- <br>
    <a href="index.php" class="d-grid"><button type="button" class="btn btn-primary mt-2 mb-4 btn-block vw-90">Insert New Data</button></a> -->


</body>

</html>