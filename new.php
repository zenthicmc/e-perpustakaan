<form id="form" method="post" action="new.php">
    <label for="judul">Judul</label><br>
    <input type="text" name="judul" required><br>
    <label for="penulis">Penulis</label><br>
    <input type="text" name="penulis" required><br>
    <label for="deskripsi">Deskripsi</label><br>
    <textarea rows="4" cols="50" name="deskripsi" form="form" required></textarea><br>
    <label for="penulis">Cover File</label><br>
    <input type="text" name="cover" required><br><br>
    <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    date_default_timezone_set('Asia/Jakarta');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perpus";

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];
    $tgl_input = date("d-m-Y H:i");
    $cover = $_POST['cover'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO books (judul_buku, penulis_buku, deskripsi_buku, tgl_input,cover)
    VALUES ('$judul', '$penulis', '$deskripsi', '$tgl_input', '$cover')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
