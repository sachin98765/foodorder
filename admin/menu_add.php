<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Menu Items Add</title>
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
            <label for="menu_item_name">Title :</label>
            <input type="text" id="menu_item_name" name="menu_item_name" required />

            <label for="menu_item_price">Price :</label>
            <input type="number" id="menu_item_price" name="menu_item_price" required />

            <label for="menu_item_image">Image :</label>
            <input type="file" id="menu_item_image" name="menu_item_image" accept="image/*" required />

            <button type="submit">Add Menu Item</button>
        </form>
        </div>
    </main>


  <script src="script.js"></script>
</body>
</html>

            