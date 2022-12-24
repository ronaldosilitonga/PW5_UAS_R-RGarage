<?php
include('../database-connection.php');

$id = $_GET['id'];
$sqlData = "select * from user where id='$id'";
$data= mysqli_query($con, $sqlData);
if (mysqli_num_rows($data) == 0) {
    echo '<script>window.history.back()</script>';
} else {
    $r2 = mysqli_fetch_assoc($data);
}

$error = '';
$sukses = '';

if($r2) {
if (isset($_POST['simpan'])) {
    $name           = $_POST['name'];
    $gender         = $_POST['gender'];
    $address        = $_POST['address'];
    $product        = $_POST['product'];
    $payment        = $_POST['payment'];
    $buydate        = $_POST['buydate'];

    if ($name && $gender && $address && $product && $payment && $buydate) {
        $sql1   = "update user set `name`='$name',`gender`='$gender',`address`='$address',`product`='$product',`payment`='$payment',`buydate`='$buydate' where id='$id'";
        $q1     = mysqli_query($con, $sql1);
        if ($q1) {
            $sukses     = "Berhasil update data";
        } else {
            $error      = "Gagal update data";
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
} else {

    header("Location: show.php");

}

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
        <a href="dashboard.php">
          <i class="fas fa-th-large"></i>
          Dashboard
        </a>
        <a href="show.php">
          <i class="fas fa-eye"></i>
          Show Data
        </a>
        <a href="add.php" class="active">
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
      <h2>Edit Costumer Data</h2>
      <div class="promo_card bg-danger">
      <?php
        if ($error) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error ?>
            </div>
        <?php
            header("refresh:3;url=show.php");//5 : detik
        }
        ?>

        <?php
        if ($sukses) {
        ?>
            <div class="alert alert-success" role="alert">
                <?php echo $sukses ?>
            </div>
        <?php
            header("refresh:3;url=show.php");
        }
    ?>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="mt-3">Nama Lengkap</label>   
                <input type="text" class="form-control" name="name" value="<?php echo $r2['name'];?>" required> 
            </div>

            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="radio" name="gender" id="Laki-laki" value="Laki-laki" <?php echo ($r2['gender'] == "Laki-laki")? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="Laki-laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check ml-2">
                    <input class="form-check-input" type="radio" name="gender" id="Perempuan" value="Perempuan" <?php echo ($r2['gender'] == "Perempuan")? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="Perempuan">
                        Perempuan
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label>Alamat</label>   
                <input type="text" class="form-control" name="address" value="<?php echo $r2['address'];?>" required> 
            </div>

            <div class="mb-3">
                <label>Produk Yang Dibeli</label>   
                <input type="text" class="form-control" name="product" value="<?php echo $r2['product'];?>" required> 
            </div>

            <div class="mb-3">
                <label>Jenis Pembayaran</label>   
                <select class="form-select" aria-label="Default select example" name="payment" required>
                    <option disabled selected><?php echo $r2['payment'];?></option>
                    <option <?php echo ($r2['payment'] == "Cash")? 'selected' : ''; ?>>Cash</option>
                    <option <?php echo ($r2['payment'] == "Kredit")? 'selected' : ''; ?>>Kredit</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tanggal Pembelian</label>   
                <input type="date" class="form-control" name="buydate" value="<?php echo $r2['buydate'];?>"required> 
            </div>
            
            <button class="btn btn-light mt-5 ms-auto" type="submit" name="simpan">
                <span>Submit</span>
            </button>
        </form>
      </div>

    </div>
  </div>
</body>
</html>
