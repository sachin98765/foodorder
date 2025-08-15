<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Order Items</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>


    <!-- Side Bar -->
    <?php include 'header.php'; ?>

    <!-- content -->
    <main class="main-content">
      <h1>Order Items</h1>
      <h3 style="justify-content: center; display: flex;">Display All Orders</h3>
      <div class="stats-grid">
        <table class="stats-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Table No.</th>
              <th>Mobile No.</th>
                <th>Order Item</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>5</td>
              <td>1234567890</td>
              <td>Pizza</td>
              <td>Large pepperoni pizza</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>10</td>
              <td>0987654321</td>
              <td>Burger</td>
              <td>Cheeseburger with fries</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
    </main>


  <script src="script.js"></script>
</body>
</html>

            