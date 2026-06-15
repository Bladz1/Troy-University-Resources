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


if (isset($_GET['owner'])) {
    $owner = $_GET['owner'];
    $profile_stmt = $conn->prepare("SELECT username, fullname, email, description FROM account WHERE username = ?");
    $profile_stmt->bind_param("s", $owner);
} else {
    $profile_stmt = $conn->prepare("SELECT username, fullname, email, description FROM account WHERE id = ?");
    $profile_stmt->bind_param("i", $user_id);
}
$profile_stmt->execute();
$profile_result = $profile_stmt->get_result();
$profile_user = $profile_result->fetch_assoc();
$profile_stmt->close();

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - SocialNet</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f4f7f6; color: #333; }

        .container { max-width: 800px; margin: 50px auto; padding: 0 20px; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05); text-align: center; }
        h2 { margin-bottom: 25px; color: #2d3748; font-size: 28px; }
        p { color: #718096; font-size: 16px; line-height: 1.6; }
    </style>
</head>
<body>

<?php include 'menubar.php'; ?>

<div class="container">
    <div class="card">
        <?php if ($profile_user): ?>
            <div style="margin-bottom: 20px;">
                <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 40px; font-weight: 700; margin: 0 auto 15px;">
                    <?= strtoupper(substr($profile_user['fullname'] ?? $profile_user['username'], 0, 1)) ?>
                </div>
                <h2><?= htmlspecialchars($profile_user['fullname']) ?></h2>
                <p style="color: #718096; margin-bottom: 15px;">@<?= htmlspecialchars($profile_user['username']) ?> • <?= htmlspecialchars($profile_user['email']) ?></p>
            </div>
            
            <div style="background: #f8fafc; padding: 20px; border-radius: 8px; border-left: 4px solid #667eea; text-align: left;">
                <h3 style="font-size: 16px; color: #4a5568; margin-bottom: 10px;">About</h3>
                <?php if (!empty($profile_user['description'])): ?>
                    <p style="color: #2d3748; line-height: 1.6;"><?= strip_tags($profile_user['description'], '<img><b><i><u><br><p>') ?></p>
                <?php else: ?>
                    <p style="color: #a0aec0; font-style: italic;">No description provided yet.</p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <h2>User Not Found</h2>
            <p>The profile you are looking for does not exist.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
