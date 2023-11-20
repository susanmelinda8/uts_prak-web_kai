<!DOCTYPE html>
<html lang="id">
<head>
    <title>form data</title>
</head>
<body>
    <h1>Form pemesanan tiket kai</h1>
    <form method="POST" action="proses_input.php">
        <table rules="rows">
        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"</td>
            </tr>
            <tr>
                <tr>
                    <td>No Telpon</td>
                    <td><input type="text" name="telpon"</td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td><input type="text" name="ktp"</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password"</td>
                </tr>
                
                
           
        </table>
        <br>
        <button type="submit" name="submit" value="Submit">Submit</button>
        
</body>
</html>
