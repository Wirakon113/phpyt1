<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มบันทึกข้อมูล</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input:focus, select:focus, button:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }

        button[type="reset"] {
            background-color: #f44336;
        }

        button:hover {
            background-color: #45a049;
        }

        button[type="reset"]:hover {
            background-color: #e63946;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-group input {
            width: calc(100% - 20px);
        }

        .submit-container {
            text-align: center;
        }

        .submit-container button {
            width: 45%;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>ฟอร์มบันทึกข้อมูล</h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="gender">เพศ:</label>
                <select name="gender" id="gender">
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">ชื่อ:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="surname">สกุล:</label>
                <input type="text" name="surname" id="surname" required>
            </div>

            <div class="form-group">
                <label for="birthdate">วันเกิด:</label>
                <input type="date" name="birthdate" id="birthdate" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="submit-container">
                <button type="submit" name="submit">บันทึกข้อมูล</button>
                <button type="reset" name="reset">รีเซ็ต</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        // รับข้อมูลจากฟอร์ม
        $gender = $_POST['gender'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $birthdate = $_POST['birthdate'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // แสดงข้อมูลที่ได้รับ (หรือคุณสามารถบันทึกลงฐานข้อมูลได้)
        echo "<div class='container'>";
        echo "<h2>ข้อมูลที่บันทึก:</h2>";
        echo "เพศ: " . htmlspecialchars($gender) . "<br>";
        echo "ชื่อ: " . htmlspecialchars($name) . "<br>";
        echo "สกุล: " . htmlspecialchars($surname) . "<br>";
        echo "วันเกิด: " . htmlspecialchars($birthdate) . "<br>";
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
        echo "</div>";
    }
    ?>
</body>
</html>
