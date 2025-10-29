<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PBO 3</title>
    <link rel="stylesheet" href="forindex.css">
</head>
<body>
   <h1>FORM REGISTER AND VALIDATION</h1>   
   <h1>(Nah just kidding, this is just a Biodata form)</h1> 
    <div class="literally-everything">
    <div>
        <h2>Form Input Data</h2>

        <!-- Form dengan method POST -->
        <form action="" method="POST">
            <label for="nama_lengkap">Nama Lengkap:</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required><br><br>

            <label for="nis">NIS:</label><br>
            <input type="number" name="nis" id="nis" required><br><br>

            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br><br>

            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required> 
            <label for="laki">Laki-laki</label><br>
            <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required> 
            <label for="perempuan">Perempuan</label><br>
            <input type="radio" name="jenis_kelamin" id="Robot" value="Robot" required> 
            <label for="Robot">Robot</label><br><br>

            <label for="agama">Agama:</label><br>
            <select name="agama" id="agama">
                <option value="None">None</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
            </select><br><br>

            <label for="hobbies">Hobbies:</label><br>
            <input type="text" name="hobbies" id="hobbies" required><br><br>
            
            <label for="alamat">Alamat:</label><br>
            <textarea name="alamat" id="alamat" rows="4" required></textarea><br><br>

            <button type="submit" name="btn_submit">Submit</button>
        </form>

        <hr>

        <h2>OUTPUT DATA</h2>
        <div class="output">
        <?php
        // Cek apakah tombol submit ditekan
        if (isset($_POST['btn_submit'])) {

            // Ambil data dari form
            $nama_lengkap   = $_POST['nama_lengkap'];
            $nis            = $_POST['nis']; 
            $tanggal_lahir  = $_POST['tanggal_lahir'];         
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $agama          = $_POST['agama'];
            $hobbies        = $_POST['hobbies'];
            $alamat         = $_POST['alamat']; 
            
            // Format tanggal lahir agar lebih rapi
            $tanggal_lahir_formatted = date("d F Y", strtotime($tanggal_lahir));

            // Tampilkan hasil
            echo '<h3>Data yang Dikirim:</h3>';
            echo '<div style="border:1px solid #000; padding:10px; width:300px;">';
            echo '<p><strong>Nama Lengkap:</strong> ' . htmlspecialchars($nama_lengkap) . '</p>';
            echo '<p><strong>NIS:</strong> ' . htmlspecialchars($nis) . '</p>';
            echo '<p><strong>Tanggal Lahir:</strong> ' . htmlspecialchars($tanggal_lahir_formatted) . '</p>';            
            echo '<p><strong>Jenis Kelamin:</strong> ' . htmlspecialchars($jenis_kelamin) . '</p>';
            echo '<p><strong>Agama:</strong> ' . htmlspecialchars($agama) . '</p>';
            echo '<p><strong>Hobbies:</strong> ' . htmlspecialchars($hobbies) . '</p>';            
            echo '<p><strong>Alamat:</strong> ' . nl2br(htmlspecialchars($alamat)) . '</p>';            
            echo '</div>';
        }
        ?>            
        </div>


    </div>        
    </div>
 
</body>
</html>
