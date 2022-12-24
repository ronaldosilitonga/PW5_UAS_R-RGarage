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
        <a href="dashboard.php">
          <i class="fas fa-th-large"></i>
          Dashboard
        </a>
        <a href="show.php" class="active">
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

    <section class="main body ms-auto">
    <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                <style>
                body {
                    color: black;
                    background: #f5f5f5;
                    font-family: 'Varela Round', sans-serif;
                    font-size: 13px;
                }
                .table-responsive {
                    margin: 30px 0;
                }
                .table-wrapper {
                    background: #fff;
                    padding: 20px 25px;
                    border-radius: 3px;
                    min-width: 1000px;
                    box-shadow: 0 1px 1px rgba(0,0,0,.05);
                }
                .table-title {        
                    padding-bottom: 15px;
                    background: #DC143C;
                    color: #fff;
                    padding: 16px 30px;
                    min-width: 100%;
                    margin: -20px -25px 10px;
                    border-radius: 3px 3px 0 0;
                }
                .table-title h2 {
                    margin: 5px 0 0;
                    font-size: 24px;
                }
                .table-title .btn-group {
                    float: right;
                }
                .table-title .btn {
                    color: #fff;
                    float: right;
                    font-size: 13px;
                    border: none;
                    min-width: 50px;
                    border-radius: 2px;
                    border: none;
                    outline: none !important;
                    margin-left: 10px;
                }
                .table-title .btn i {
                    float: left;
                    font-size: 21px;
                    margin-right: 5px;
                }
                .table-title .btn span {
                    float: left;
                    margin-top: 2px;
                }
                table.table tr th, table.table tr td {
                    border-color: #e9e9e9;
                    padding: 12px 15px;
                    vertical-align: middle;
                }
                table.table tr th:first-child {
                    width: 60px;
                }
                table.table tr th:last-child {
                    width: 100px;
                }
                table.table-striped tbody tr:nth-of-type(odd) {
                    background-color: #fcfcfc;
                }
                table.table-striped.table-hover tbody tr:hover {
                    background: #f5f5f5;
                }
                table.table th i {
                    font-size: 13px;
                    margin: 0 5px;
                    cursor: pointer;
                }	
                table.table td:last-child i {
                    opacity: 0.9;
                    font-size: 22px;
                    margin: 0 5px;
                }
                table.table td a {
                    font-weight: bold;
                    color: #566787;
                    display: inline-block;
                    text-decoration: none;
                    outline: none !important;
                }
                table.table td a:hover {
                    color: #2196F3;
                }
                table.table td a.edit {
                    color: #FFC107;
                }
                table.table td a.delete {
                    color: #F44336;
                }
                table.table td i {
                    font-size: 19px;
                }
                table.table .avatar {
                    border-radius: 50%;
                    vertical-align: middle;
                    margin-right: 10px;
                }
                .pagination {
                    float: right;
                    margin: 0 0 5px;
                }
                .pagination li a {
                    border: none;
                    font-size: 13px;
                    min-width: 30px;
                    min-height: 30px;
                    color: #999;
                    margin: 0 2px;
                    line-height: 30px;
                    border-radius: 2px !important;
                    text-align: center;
                    padding: 0 6px;
                }
                .pagination li a:hover {
                    color: #666;
                }	
                .pagination li.active a, .pagination li.active a.page-link {
                    background: #03A9F4;
                }
                .pagination li.active a:hover {        
                    background: #0397d6;
                }
                .pagination li.disabled i {
                    color: #ccc;
                }
                .pagination li i {
                    font-size: 16px;
                    padding-top: 6px
                }
                .hint-text {
                    float: left;
                    margin-top: 10px;
                    font-size: 13px;
                }    
                /* Modal styles */
                .modal .modal-dialog {
                    max-width: 400px;
                }
                .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                    padding: 20px 30px;
                }
                .modal .modal-content {
                    border-radius: 3px;
                    font-size: 14px;
                }
                .modal .modal-footer {
                    background: #ecf0f1;
                    border-radius: 0 0 3px 3px;
                }
                .modal .modal-title {
                    display: inline-block;
                }
                .modal .form-control {
                    border-radius: 2px;
                    box-shadow: none;
                    border-color: #dddddd;
                }
                .modal textarea.form-control {
                    resize: vertical;
                }
                .modal .btn {
                    border-radius: 2px;
                    min-width: 100px;
                }	
                .modal form label {
                    font-weight: normal;
                }	
                </style>
            </head>
            <body>
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Daftar <b>Costumer</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="add.php" class="btn btn-success" >
                                            <i class="material-icons">&#xE147;</i> <span class="links_name">Tambahkan Data Costumer Baru</span>
                                        </a>					
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <span>No
                                            </span>
                                        </th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Produk</th>
                                        <th>Pembayaran</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql2   = "select * from user order by buydate desc";
                                    $q2     = mysqli_query($con, $sql2);
                                    $urut   = 1;
                                    while ($r2 = mysqli_fetch_assoc($q2)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $urut++ ?></th>
                                            <td scope="row"><?php echo $r2['name'];?></td>
                                            <td scope="row"><?php echo $r2['gender'];?></td>
                                            <td scope="row"><?php echo $r2['address'];?></td>
                                            <td scope="row"><?php echo $r2['product'];?></td>
                                            <td scope="row"><?php echo $r2['payment'];?></td>
                                            <td scope="row"><?php echo $r2['buydate'];?></td>
                                            <td scope="row">
                                                <a href="edit.php?id=<?php echo $r2['id'];?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <a href="delete.php?id=<?php echo $r2['id'];?>" oneclick="return confirm('Apakah Yakin Ingin Menghapus Data Tersebut ? ')" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>        
                </div>
            </body>
        </html>
    </section>
    </div>
  </div>
</body>
</html>
