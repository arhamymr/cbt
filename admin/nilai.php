<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <!-- HTML 5 -->
    <title>.: Computerized Based Testing :.</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/bjqs.css" rel="stylesheet" />
    <!-- css disini -->
    

  

</head>

<body>
    <a href="home.php"><input type="button" value="kembali" class="btn btn-primary"></a>
    <div class="container">
        <h1> Nilai Siswa </h1>
         <?php 


         $databaseHost = 'localhost';
         $databaseName = 'cbt';
         $databaseUsername = 'root';
         $databasePassword = '';

         $con = mysqli_connect($databaseHost,$databaseUsername, $databasePassword,$databaseName);




        $id = $_GET['id'];
        $sql = "SELECT * from tb_jawaban where no='$id'";
        $query = mysqli_query($con,$sql);
        if (!$query){
          die (' SQL Error : '.mysqli_error($con));
        }
        $data = mysqli_fetch_array($query);
        echo "<h5> Nama : ".$data['nama_siswa']."</h5>";
        echo "<h5> Nis :".$data['nisn']."</h5>";
         $nilai = ( $data['nilai'] / 40 ) * 100;
        echo "<h5> Nilai : ".$nilai."</h5>";
        if ($data['no_paket'] == 'paket1') {
                    echo "<h5> Soal : Sistem Operasi Jaringan </h5>";
                } else if ($data['no_paket'] == 'paket2'){
                    echo "<h5> Soal : Pemograman Dasar </h5>";
                } else if ($data['no_paket'] == 'paket3'){
                    echo "<h5> Soal : Teknik Komputer Jaringan </h5>";
                }
                   

        echo "<table class='table table-striped'>
                <thead>
                <tr>
                  <th> No</th>
                  <th> Jawaban </th>

                  </tr>
                <thead>
                <tbody>";
          
          if (mysqli_num_rows($query) === 0 ){
            echo "tidak ada data"; 
          } else {
            
           

            $jawab = 'soal';
            for ($i=1;$i<=40;$i++){
                echo '<tr>
                      <td>'.$i.'</td>';
                if ($data[$jawab.$i] == 0 ){
                    echo '<td>Jawaban salah / belum di jawab</td>';
                } else if ($data[$jawab.$i] == 1 ){
                    echo '<td><a class="alert alert-success"> Jawaban Benar </a></td>';
                }
                
                echo "</tr>";
                      
               
            }

          }

          
          echo "</tbody></table>";
        ?>


    </div>
    <footer>
        <center>
            <p>&copy; CBT - 2018 - Versi 7.3 </p>
        </center>
    </footer>
</body>

</html>
<!-- Bootstrap core JavaScript
================================================== -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/action.js"></script>