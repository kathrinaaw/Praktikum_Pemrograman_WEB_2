<?php
include('koneksi.php');

$courses = new Courses();
$data_courses = $courses->tampil_data();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Course</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE5E0; 
            margin: 0;
            padding: 20px;
            color: #4a4a4a; 
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            background-color: #FFEBE7; 
            border-radius: 10px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #FFB6B2; 
        }

        th {
            background-color: #FF9B94; 
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            background-color: #FFE5E0; 
        }

        tr:nth-child(even) td {
            background-color: #FFCAC5; 
        }

        tr:hover td {
            background-color: #FFB0A9; 
        }

        h1 {
            text-align: center;
            color: #FF6F61; 
            font-size: 2.5em;
            margin-bottom: 30px;
        }

       
        .table-container {
            max-width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFF5F3;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>

    <h1>Data Course</h1>
    <div class="table-container">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Name</th>
                <th>SKS</th>
                <th>Hours</th>
                <th>Meeting</th>
                <th>Created At</th>
                <th>Deleted At</th>
                <th>Updated At</th>
            </tr>
            <?php foreach ($data_courses as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['sks']; ?></td>
                <td><?php echo $row['hours']; ?></td>
                <td><?php echo $row['meeting']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td><?php echo $row['deleted_at']; ?></td>
                <td><?php echo $row['updated_at']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>