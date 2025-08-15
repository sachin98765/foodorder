<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>News Later</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  

    <!-- Side Bar -->
    <?php include 'header.php'; ?>

    <!-- content -->
    <main class="main-content">
      <h1>News Later</h1>
      <h3 style="justify-content: center; display: flex;">Display All Emails</h3>
      <div class="stats-grid">
        <table class="stats-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Newsletter 1</td>
              <td>2023-01-01</td>
              <td>
                <!-- <a href="#">Edit</a> -->
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Newsletter 2</td>
              <td>2023-01-02</td>
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
