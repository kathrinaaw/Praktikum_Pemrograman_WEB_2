<?php
include('koneksi.php');

$coursesClasses = new CoursesClasses();
$data_courses_classes = $coursesClasses->tampil_data();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Courses Classes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE5E0; 
            color: #4a4a4a; 
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #FFEBE7; 
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #FFB6B2; 
        }

        th {
            background-color: #FF9B94; 
            color: white;
        }

        td {
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

    <h1>Data Courses Classes</h1>
    <div class="table-container">
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Student Class ID</th>
                <th>Course ID</th>
                <th>Deleted At</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            <?php foreach ($data_courses_classes as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['student_class_id']; ?></td>
                <td><?php echo $row['course_id']; ?></td>
                <td><?php echo $row['deleted_at']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td><?php echo $row['updated_at']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>