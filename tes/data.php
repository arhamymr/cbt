<script type="text/javascript" src="../js/jquery.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
	$("a.delete").click(function(event){
		var no=$(this).attr("href");
		event.preventDefault();
		if(confirm("Yakin ingin dihapus ?"))
		{
			document.location.href="coach/proses.php?action=delete&no="+no;
		}
	});
});

</script>
<?php
echo "<table class=\"table table-striped table-bordered table-hover\">
		<thead>
			<tr>
				<th>No</th>
				<th>Pertanyaan</th>
				<th>Jawaban</th>
				<th>Action</th>
			</tr>
		</thead>
	";
		$q=mysql_query("SELECT * FROM tb_soal LIMIT 10");
		$i=0;
		while($r=mysql_fetch_assoc($q))
		{
			$i=$i+1;
			echo "
			 <tr>
			  <td>$i</td>
			  <td>".$r['pertanyaan']."</td>
			  <td>".$r['jawaban']."</td>
			  <td class=\"center\">
			  <a href='?page=form_soal&no=".$r['no']."'\">Edit</a> | 
			  <a href='".$r['no']."' class=\"delete\">Hapus</a>
			  </td>
			 </tr>
			";
		}
	echo "</table>";
?>