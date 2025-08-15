<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Featured Items</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>


    <!-- Side Bar -->
    <?php include 'header.php'; ?>

    <!-- content -->
    <main class="main-content">
      <h1>Featured Items</h1>
      <h3 style="justify-content: center; display: flex;"> Featured Items</h3>
      <div class="stats-grid">
        <table class="stats-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img src="" alt="Menu Item 1" /></td>
              <td>
                <!-- <a href="#">Edit</a> -->
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td><img src="" alt="Menu Item 2" /></td>
              <td>
                <!-- <a href="#">Edit</a> -->
                <a href="#">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
    </main>


  <script src="script.js"></script>
</body>
</html>

            