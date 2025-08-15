<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Form</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>


    <!-- Side Bar -->
    <?php include 'header.php'; ?>

    <!-- content -->
    <main class="main-content">
      <h1>Contact Form</h1>
      <h3 style="justify-content: center; display: flex;">Display All Enquiries</h3>
      <div class="stats-grid">
        <table class="stats-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Gender</th>
              <th>Message</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>1234567890</td>
              <td>Male</td>
              <td>Hello, I have a question about my order.</td>
              <td>
                <!-- <a href="#">Edit</a> -->
                <a href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>jane@example.com</td>
              <td>0987654321</td>
              <td>Female</td>
              <td>Hello, I would like to know more about your services.</td>
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
