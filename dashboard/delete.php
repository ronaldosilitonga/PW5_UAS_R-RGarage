<?php 
     include ('../database-connection.php');
     $id = $_GET['id']; 
     $sqlHapus = "delete FROM user WHERE id = '$id'";
     $hapus= mysqli_query($con, $sqlHapus);
         if ($hapus) {
              echo '<script>alert("Data berhasil dihapus")</script>';
              echo "<script>window.location = 'show.php'</script>";
            }
        else{
              echo "Gagal menghapus data";
              echo "<a href='show.php'>Kembali</a>";
            }    
?>