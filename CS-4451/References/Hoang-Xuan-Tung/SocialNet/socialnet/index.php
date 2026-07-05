<?php
session_start();


if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php");
    exit();
}

require_once "../db.php";


$user_id = $_SESSION["user_id"];
$stmt = $conn->prepare("SELECT username, fullname, email, description FROM account WHERE id = ?");
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


$search_query = $_GET['search'] ?? '';

if ($search_query !== '') {
    $search_param = "%" . $search_query . "%";
    $all_users_stmt = $conn->prepare("SELECT id, username, fullname, description FROM account WHERE id != ? AND (username LIKE ? OR fullname LIKE ?)");
    $all_users_stmt->bind_param("iss", $user_id, $search_param, $search_param);
} else {
    $all_users_stmt = $conn->prepare("SELECT id, username, fullname, description FROM account WHERE id != ?");
    $all_users_stmt->bind_param("i", $user_id);
}

$all_users_stmt->execute();
$all_users_result = $all_users_stmt->get_result();
$all_users = [];
while ($row = $all_users_result->fetch_assoc()) {
    $all_users[] = $row;
}
$all_users_stmt->close();

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SocialNet</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7f6;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 0 20px;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        .avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            font-weight: 700;
        }
        .user-info h1 {
            font-size: 24px;
            color: #2d3748;
            margin-bottom: 5px;
        }
        .user-info p {
            color: #718096;
            font-size: 15px;
        }
        .description-box {
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        .description-box h3 {
            font-size: 16px;
            color: #4a5568;
            margin-bottom: 10px;
        }
        .description-box p {
            color: #2d3748;
            line-height: 1.6;
        }
        .users-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        .users-table th, .users-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .users-table th {
            background-color: #f8fafc;
            color: #4a5568;
            font-weight: 600;
        }
        .users-table tr:hover {
            background-color: #f1f5f9;
        }
        .section-title {
            font-size: 20px;
            color: #2d3748;
            margin-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .btn-view-profile {
            display: inline-block;
            padding: 6px 12px;
            background-color: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            transition: background 0.3s;
        }
        .btn-view-profile:hover {
            background-color: #764ba2;
        }
    </style>
</head>
<body>

<?php include 'menubar.php'; ?>

<div class="container">
    <div class="card">
        <div class="profile-header">
            <div class="avatar">
                <?= strtoupper(substr($user['fullname'] ?? $user['username'], 0, 1)) ?>
            </div>
            <div class="user-info">
                <h1><?= htmlspecialchars($user['fullname']) ?></h1>
                <p>@<?= htmlspecialchars($user['username']) ?> • <?= htmlspecialchars($user['email']) ?></p>
            </div>
        </div>
        
        <?php if (!empty($user['description'])): ?>
        <div class="description-box">
            <h3>About me</h3>
            <p><?= strip_tags($user['description'], '<img><b><i><u><br><p>') ?></p>
        </div>
        <?php else: ?>
        <div class="description-box">
            <p style="color: #a0aec0; font-style: italic;">No description provided yet.</p>
        </div>
        <?php endif; ?>
    </div>

    <div class="card" style="margin-top: 30px;">
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 15px;">
            <h2 style="font-size: 20px; color: #2d3748; margin: 0;">Community Members</h2>
            <form method="GET" action="index.php" style="display: flex; gap: 8px;">
                <input type="text" name="search" placeholder="Search users..." value="<?= htmlspecialchars($search_query) ?>" style="padding: 8px 12px; border: 1px solid #cbd5e0; border-radius: 6px; outline: none; font-family: inherit;">
                <button type="submit" style="padding: 8px 16px; background: #667eea; color: white; border: none; border-radius: 6px; cursor: pointer; font-family: inherit; font-weight: 500;">Search</button>
                <?php if ($search_query !== ''): ?>
                    <a href="index.php" style="padding: 8px 16px; background: #e2e8f0; color: #4a5568; text-decoration: none; border-radius: 6px; font-weight: 500; display: flex; align-items: center;">Clear</a>
                <?php endif; ?>
            </form>
        </div>
        <div style="overflow-x: auto;">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($all_users as $u): ?>
                    <tr>
                        <td><?= htmlspecialchars($u['username']) ?></td>
                        <td><?= htmlspecialchars($u['fullname']) ?></td>
                        <td><?= strip_tags($u['description'] ?? '', '<img><b><i><u><br><p>') ?></td>
                        <td><a href="profile.php?owner=<?= urlencode($u['username']) ?>" class="btn-view-profile">View Profile</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
