<style>
    .navbar {
        background: white;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .navbar .logo {
        font-size: 24px;
        font-weight: 700;
        color: #764ba2;
        text-decoration: none;
    }
    .navbar .user-actions {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .navbar .user-name {
        font-weight: 500;
    }
    .btn-action {
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: background 0.3s;
        display: inline-block;
    }
    .btn-home { background: #667eea; color: white; }
    .btn-home:hover { background: #764ba2; }
    .btn-setting { background: #e2e8f0; color: #4a5568; }
    .btn-setting:hover { background: #cbd5e0; }
    .btn-profile { background: #48bb78; color: white; }
    .btn-profile:hover { background: #38a169; }
    .btn-about { background: #ecc94b; color: white; }
    .btn-about:hover { background: #d69e2e; }
    .btn-logout { background: #ff4757; color: white; }
    .btn-logout:hover { background: #ff6b81; }
</style>


<nav class="navbar">
    <a href="index.php" class="logo">SocialNet</a>
    <div class="user-actions">
        <span class="user-name">Hi, <?= htmlspecialchars($user['fullname'] ?? ($user['username'] ?? 'Guest')) ?></span>
        <a href="index.php" class="btn-action btn-home">Home</a>
        <a href="setting.php" class="btn-action btn-setting">Setting</a>
        <a href="profile.php" class="btn-action btn-profile">Profile</a>
        <a href="about.php" class="btn-action btn-about">About</a>
        <a href="signout.php" class="btn-action btn-logout">SignOut</a>
    </div>
</nav>
