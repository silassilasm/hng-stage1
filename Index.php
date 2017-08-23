<!DOCTYPE html>
<html>
<head>
    <title>Index File</title>
</head>
<body>
    <?php
       $data  = mysqli_connect("localhost", "root", "", "developers");
       if (! $data) {die("Error Connecting to Database");}
        $info = mysqli_query($data, "select * from developers");     
    if ($info) {echo "<table><tr><th>S/N</th><th>Full Name</th><th>Gender</th</tr>";
        while ($row = mysqli_fetch_assoc($info)) {
            echo "<tr><td>" . $row["id"] . "</td>"; 
            echo "<td>" . $row["Full Name"] . "</td>"; 
            echo "<td>" . $row["Gender"] . "</td></tr>";}
        echo "</table>";
    }
    ?>
</body>
</html>

