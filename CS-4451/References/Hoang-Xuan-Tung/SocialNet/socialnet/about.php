<?php
session_start();


if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php");
    exit();
}

require_once "../db.php";
$user_id = $_SESSION["user_id"];

$stmt = $conn->prepare("SELECT username, fullname FROM account WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    session_destroy();
    header("Location: signin.php");
    exit();
}
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - SocialNet</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f4f7f6; color: #333; }
        .container { max-width: 800px; margin: 50px auto; padding: 0 20px; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); text-align: center; }
        h2 { margin-bottom: 15px; color: #2d3748; font-size: 28px; }
        p { color: #718096; font-size: 18px; line-height: 1.6; margin-bottom: 10px; }
    </style>
</head>
<body>

<?php include 'menubar.php'; ?>

<div class="container">
    <div class="card">
        <h2>About</h2>
        <p><strong>Student Name:</strong> Demo Student</p>
        <p><strong>Student Number:</strong> 0000000</p>
    </div>
</div>

</body>
</html>
