<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        #login-form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>

    <div id="login-form">
        <h2>Đăng nhập</h2>
        <form id="form" action="./reg.php" method="post">
            <label for="username">Tên người dùng:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="btn">Đăng nhập</button>
           
        </form>
<form action="./show.php" method="post">
<button type="submit" name="btn1">SHOW</button>
</form>

 <table>
    <tr>
        <th>ID</th>
        <th>USER</th>
        <th>PASS</th>
    </tr>
    
    
    


 </table>
</body>
</html>
