<?php
session_start();


if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php");
    exit();
}


if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once "../db.php";

$user_id = $_SESSION["user_id"];
$message = "";
$messageType = "";

$stmt = $conn->prepare("SELECT username, fullname, description FROM account WHERE id = ?");
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token validation failed!");
    }

    $new_description = $_POST["description"] ?? "";
    
    $update_stmt = $conn->prepare("UPDATE account SET description = ? WHERE id = ?");
    $update_stmt->bind_param("si", $new_description, $user_id);
    
    if ($update_stmt->execute()) {
        $message = "Description updated successfully!";
        $messageType = "success";
        $user['description'] = $new_description;
    } else {
        $message = "Failed to update description.";
        $messageType = "error";
    }
    $update_stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - SocialNet</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f4f7f6; color: #333; }

        .container { max-width: 800px; margin: 50px auto; padding: 0 20px; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); }
        
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 8px; color: #2d3748; }
        .form-group textarea { width: 100%; padding: 12px; border: 1px solid #cbd5e0; border-radius: 8px; font-family: inherit; font-size: 15px; resize: vertical; min-height: 120px; transition: border-color 0.3s; }
        .form-group textarea:focus { outline: none; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1); }
        
        .btn-submit { background: #667eea; color: white; border: none; padding: 12px 24px; font-size: 16px; font-weight: 600; border-radius: 8px; cursor: pointer; transition: background 0.3s; }
        .btn-submit:hover { background: #5a67d8; }
        
        .alert { padding: 15px; border-radius: 8px; margin-bottom: 20px; font-weight: 500; }
        .alert-success { background: #c6f6d5; color: #22543d; border: 1px solid #9ae6b4; }
        .alert-error { background: #fed7d7; color: #742a2a; border: 1px solid #feb2b2; }
        
        h2 { margin-bottom: 25px; color: #2d3748; }
    </style>
</head>
<body>

<?php include 'menubar.php'; ?>

<div class="container">
    <div class="card">
        <h2>Profile Settings</h2>
        
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?= $messageType ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="setting.php">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
            <div class="form-group">
                <label for="description">About Me (Description)</label>
                <textarea name="description" id="description" placeholder="Tell us something about yourself..."><?= htmlspecialchars($user['description'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="btn-submit">Save Changes</button>
        </form>
    </div>
</div>

</body>
</html>
