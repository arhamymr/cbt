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
	<div class="container">
        <h1> Daftar Nilai Siswa </h1>
         <?php 
         

         $databaseHost = 'localhost';
         $databaseName = 'cbt';
         $databaseUsername = 'root';
         $databasePassword = '';

         $con = mysqli_connect($databaseHost,$databaseUsername, $databasePassword,$databaseName);


 
        $sql = "SELECT * from tb_jawaban";
        $query = mysqli_query($con,$sql);
        if (!$query){
          die (' SQL Error : '.mysqli_error($con));
        }

        echo "<table class='table table-striped'>
                <thead>
                <tr>
                  <th> No</th>
                  <th> Nama</th>
                  <th> Soal </th>
                  <th> Nilai </th>
                  <th> Detail </th>
                  </tr>
                <thead>
                <tbody>";
          
          if (mysqli_num_rows($query) === 0 ){
            echo "tidak ada data"; 
          } else {
            $i = 1;
            while ($row = mysqli_fetch_array($query)){
              
                 echo '<tr>
                      <td>'.$i.'</td>
                      <td>'.$row['nama_siswa'].'</td>
                      ';

                if ($row['no_paket'] == 'paket1') {
                    echo "<td> Sistem Operasi Jaringan </td>";
                } else if ($row['no_paket'] == 'paket2'){
                    echo "<td> Pemograman Dasar </td>";
                } else if ($row['no_paket'] == 'paket3'){
                    echo "<td> Teknik Komputer Jaringan </td>";
                }

                $nilai = ( $row['nilai'] / 40 ) * 100;

                echo "<td>".$nilai."</td>";
                      
               echo "<td> 
                      <a href='nilai.php?id=".$row['no']."'> <button class='btn btn-danger btn-sm'> lihat nilai </button></a> </td>";
                $i++;
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