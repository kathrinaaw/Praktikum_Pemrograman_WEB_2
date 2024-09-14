<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE5E0; 
            color: #4a4a4a;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #FF9B94; 
            padding: 20px;
            color: white;
            text-align: center;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            text-align: center;
            padding: 20px;
            background-color: #FFCAC5; 
            border-radius: 10px;
        }

        button {
            padding: 15px 30px;
            margin: 15px;
            background-color: #FF6F61;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #FF9B94;
        }

        button:active {
            background-color: #FF5147; 
            transform: scale(0.98); 
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Menu Utama</h1>
    </div>

    <div class="container">
        <form method="get" action="tampil_data_course.php">
            <button type="submit" name="action" value="tampil_semua_courses">Tampil Semua Data Course</button>
        </form>
        <form method="get" action="tampil_data_coursesClasses.php">
            <button type="submit" name="action" value="tampil_semua_courses_classes">Tampil Semua Data Course Classes</button>
        </form>
        <form method="get" action="tampil_tanggal.php">
            <button type="submit" name="action" value="tampil_tanggal">Tampil Data Course Tanggal 13</button>
            <input type="hidden" name="tanggal" value="2024-09-13">
        </form>
    </div>
</body>
</html>
