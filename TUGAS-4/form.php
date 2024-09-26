<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="date"], input[type="radio"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            width: auto;
        }

        .radio-label {
            display: inline-block;
            margin-right: 15px;
            font-weight: normal;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .result {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <?php
        // Jika form sudah di-submit, tampilkan hasil inputan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $npm = $_POST['npm'];
            $nama = strtoupper($_POST['nama']); // Ubah ke huruf besar
            $alamat = strtoupper($_POST['alamat']); // Ubah ke huruf besar
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $hobi = $_POST['hobi'];

            // Tampilkan hasil inputan
            echo "<div class='result'>";
            echo "<h3>Data Mahasiswa yang Dimasukkan:</h3>";
            echo "<p><strong>NPM:</strong> $npm</p>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Tempat Lahir:</strong> $tempat_lahir</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "<p><strong>Hobi:</strong> $hobi</p>";
            echo "</div>";
        } else {
        ?>

        <h2>Form Input Data Mahasiswa</h2>

        <form action="" method="POST">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" required>
            <label class="radio-label" for="laki">Laki-Laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
            <label class="radio-label" for="perempuan">Perempuan</label>

            <label for="hobi">Hobi:</label>
            <input type="text" id="hobi" name="hobi" required>

            <input type="submit" value="Submit">
        </form>

        <?php
        }
        ?>
    </div>

</body>
</html>
