<?php 
  @include 'crud/config.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bardolino</title>
    <link rel="stylesheet" href="css/pizza.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@1,100&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel&family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital@1&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="../index.php"><h1>bardolino</h1></a>
      </div>
      <nav>
        <ul>
          <a href="../index.php"><li class="options">Home</li></a>
          <a href="../index.php"><li class="options">Openingstijden</li></a>
          <a href="../index.php"><li class="options">eten bestellen</li></a>
          <a href="../index.php"><li class="options">locatie</li></a>
        </ul>
      </nav>
    </header>
    <main>
    <?php

if (isset($_GET['search'])) {
  $creditsnaarstijn = '%'.$_GET['search'].'%';
  $select = mysqli_query($conn, "SELECT * FROM products WHERE name LIKE '".$creditsnaarstijn."'");

} else {
  $select = mysqli_query($conn, "SELECT * FROM products");
}

?>
<div class="product-display">
  
   <table class="product-display-table">
   <form action="#" method='get'>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img class="products" src="crud/uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['name']; ?></td>
         <td>$<?php echo $row['price']; ?>/-</td>
      </tr>
   <?php } ?>
   </table>
</div>
    </main>
    <script src="main.js"></script>
  </body>
</html>
