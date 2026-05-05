<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body font-family: sans-serif>
    <nav style="text-align: center; border: 2px solid black; padding: 8px ;font-family: sans-serif;">
        <b>MENU:</b>
        <a href="index.php" style="border: 1px solid black; border-radius: 4px; padding: 3px; text-decoration: none; color: black;">Home</a> 
		<a href="admin.php" style="border: 1px solid black; border-radius: 4px; padding: 3px; text-decoration: none; color: black;">Admin</a>
        <a href="biodata.php" style="border: 1px solid black; border-radius: 4px; padding: 3px; text-decoration: none; color: black;">Biodata</a> 
        <a href="kontak.php" style="border: 1px solid black; border-radius: 4px; padding: 3px; text-decoration: none; color: black;">Kontak</a>
		<a href="register.php" style="border: 1px solid black; border-radius: 4px; padding: 3px; text-decoration: none; color: black;">Registrasi</a>
		<a href="login.php" style="border: 1px solid black; border-radius: 4px; padding: 3px; text-decoration: none; color: black;">Login</a>
    </nav>
  <h1 style="color: black;"> Selamat Datang di Halaman Admin</h1>
    <p>Selamat datang di halaman admin!</p>
    <div style="text-align: center; padding: 50px 20px;">
        <h2>Data Pengunjung Website</h2>
        
        <table border="1" style="margin: 0 auto; width: 80%; border-collapse: collapse;">
            <tr style="background-color: #eee;">
                <th>No</th>
                <th>IP Pengunjung</th>
                <th>Waktu</th>
            </tr>
            <tr>
                <td>1</td>
                <td>192.168.1.5</td>
                <td><?php echo date('H:i'); ?> WIB</td>
            </tr>
        </table>
    </div>

    <footer style="background-color: lightblue; width: 100vw; text-align: center; padding: 20px 0; border-top: 1px solid #ccc; position: fixed; bottom: 0;">
        <b>Halaman Admin - Statistik Pengunjung</b>
        <p style="margin: 0;">&copy; <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>