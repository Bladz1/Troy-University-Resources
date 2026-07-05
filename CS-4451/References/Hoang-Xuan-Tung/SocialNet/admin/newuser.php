<?php
session_start();



require_once "../db.php";


if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}



$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token validation failed!");
    }


    $username = trim($_POST["username"] ?? "");
    $fullname = trim($_POST["fullname"] ?? "");
    $email    = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $description = trim($_POST["description"] ?? "");

    if ($username === "" || $fullname === "" || $email === "" || $password === "") {
        $message = "Vui lòng nhập đầy đủ thông tin.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $stmt = $conn->prepare("INSERT INTO account (username, fullname, email, password, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $username, $fullname, $email, $hashedPassword, $description);

        if ($stmt->execute()) {
            $message = "Tạo user thành công.";
        } else {
            $message = "Lỗi khi tạo user: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Tạo User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }

        .box {
            width: 420px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            font-family: inherit;
        }
        textarea {
            resize: vertical;
        }

        button {
            margin-top: 18px;
            width: 100%;
            padding: 12px;
            border: none;
            background: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .msg {
            margin-bottom: 15px;
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Tạo User</h2>

        <?php if ($message !== ""): ?>
            <div class="msg"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Fullname</label>
            <input type="text" name="fullname" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Description</label>
            <textarea name="description" rows="3"></textarea>

            <button type="submit">Tạo user</button>
        </form>
    </div>
</body>

</html>