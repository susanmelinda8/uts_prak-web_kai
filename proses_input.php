<?php
include "connection.php";

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telpon = $_POST["telpon"];
    $ktp = $_POST["ktp"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password =md5($_POST["password"]);

$sql = "insert into susan_table_kai (nama,alamat,telpon,ktp,email,username,password) values
('$nama','$alamat','$telpon','$ktp','$email','$username','$password')";
$hasil=mysqli_query($kon, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>hasil</title>
</head>
<body>
   <table border="1">
       <tr>
           <td>Nama</td>
           <td><?php echo $_POST['nama']; ?></td>
        </tr>
       <tr>
           <td>Alamat</td>
           <td><?php echo $_POST['alamat']; ?></td>
        </tr>
       <tr>
           <td>No Telpon</td>
           <td><?php echo $_POST['telpon']; ?></td>
        </tr>
       <tr>
           <td>No KTP</td>
           <td><?php echo $_POST['ktp']; ?></td>
        </tr>
       <tr>
           <td>Email</td>
           <td><?php echo $_POST['email']; ?></td>
        </tr>
       <tr>
           <td>Username</td>
           <td><?php echo $_POST['username']; ?></td>
        </tr>
        <tr>
           <td>Password</td>
           <td><?php echo $_POST['password']; ?></td>
        </tr>
       
   </table> 
</body>
</html>