<?php
include('../database-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | By Code Info</title>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../assets/css/dashboard.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header bg-danger">
    <div class="logo">
      <a href="#">R&R Garage</a>
    </div>

    <div class="header-icons">
      <i class="fas fa-portrait"></i>
      <div class="account">
        <h4>Hi, Admin</h4>
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="dashboard.php" class="active">
          <i class="fas fa-th-large"></i>
          Dashboard
        </a>
        <a href="show.php">
          <i class="fas fa-eye"></i>
          Show Data
        </a>
        <a href="add.php">
          <i class="fas fa-add"></i>
          Add Data
        </a>
        <a href="edit.php">
          <i class="fas fa-edit" ></i>
          Edit
        </a>        
        <a href="../login-logout/logout.php">
          <i class="fas fa-door-open"></i>
          Logout
        </a>
      </div>
    </nav>

    <div class="main-body ms-auto">
      <h2>Dashboard</h2>
      <div class="promo_card bg-danger">
        <h1>Welcome to Admin Dashboard</h1>
        <span>Here you can add, edit and delete costumer data</span>
      </div>

    </div>
  </div>
</body>
</html>
