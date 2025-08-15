<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Change Password</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>


    <!-- Side Bar -->
    <?php include 'header.php'; ?>

    <!-- content -->
    <main class="main-content">
      <h1>Change Password</h1>
      <div class="stats-grid">
        <form action="change_password.php" method="POST">
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required />

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required />

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required />

            <button type="submit">Change Password</button>
        </form>
        </div>
    </main>


  <script src="script.js"></script>
</body>
</html>

            