<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Featured Items Add</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>


    <!-- Side Bar -->
    <?php include 'header.php'; ?>

    <!-- content -->
    <main class="main-content">
      <h1>Add Menu Items</h1>
      <div class="stats-grid">
        <form action="add_menu_item.php" method="POST" enctype="multipart/form-data">
          
            <label for="menu_item_image">Image :</label>
            <input type="file" id="menu_item_image" name="menu_item_image" accept="image/*" required />

            <button type="submit">Upload</button>
        </form>
        </div>
    </main>


  <script src="script.js"></script>
</body>
</html>

            