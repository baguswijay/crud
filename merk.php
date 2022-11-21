<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td {
        border: 1px solid black;
        text-align: center;

    }
</style>
</head>
<body>

<?php
    include 'connect.php';
    $no = 1;

    $sql = "Insert into merek values ()";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Merek</th>
                    <th>Harga</th>
                </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 
            "<tr>
                <td>" . $no . "</td>
                <td>" . $row["id"]. "</td>
                <td>" . $row["nama"]. "</td>
                <td>" . $row["jenis"]. "</td>
                <td>" . $row["merek"]. "</td>
                <td>" . $row["harga"]. "</td>
           </tr>";
           $no++;
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>