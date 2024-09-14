<?php
include('koneksi.php');

$courses = new Courses();
$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : null; // Ambil tanggal dari query parameter

if (isset($_GET['action']) && $_GET['action'] === 'tampil_tanggal') {
    // Tampilkan data berdasarkan tanggal jika 'action' adalah 'tampil_tanggal'
    $data_courses = $courses->tampil_data($tanggal);
} else {
    // Tampilkan semua data jika 'action' tidak diatur atau berbeda
    $data_courses = $courses->tampil_data();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Courses - Tanggal 13</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE5E0;
            color: #4a4a4a;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #FFCAC5; 
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #FF9B94; 
            color: white;
        }

        tr:nth-child(even) {
            background-color: #FFD7D3; 
        }

        
        tr:hover {
            background-color: #FFB0A9;
        }

        h1 {
            text-align: center;
            color: #FF5147; 
            padding-top: 20px;
        }

        .table-container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFEBE7;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Data Courses - Tanggal 13</h1>
    <div class="table-container">
        <table>
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
