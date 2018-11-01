function checkWaktu(){
	var nisn=$("input[name='nisn']").val();
	var no=$("input[name='no']").val();
	var noSoal=$("input[name='noSoal']").val();
	$.ajax({
		url:"cekWaktu.php",
		type:"POST",
		success:function(response){
			var waktuRespon=response;
			//Refresh
			var auto_refresh = setInterval(
			function ()
			{
				toastr.warning("Waktu pengerjaan per halaman anda sudah habis, anda diberi waktu 10 detik untuk menyelesaikan soal", 'Peringatan', {"closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"})
			}, waktuRespon);//Interval reload pertama kali soal dibuka
			var waktuRespon2=(waktuRespon*1)+10000;
			var refresh = setInterval(
			function ()
			{
										toastr.error("Waktu 10 detik anda telah habis", 'Peringatan', {"closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"})
				//Jawaban diberi nilai salah karena tidak segera menjawab
				var jawaban="";
				var data="no="+no+"&noSoal="+noSoal+"&nisn="+nisn;
				//Cek SEM
				$.ajax({
					url:"proses.php",
					type:"POST",
					data:data,
					success:function(response){
						var hasilResponse=response.split("&");
						var noSoal=hasilResponse[0];
						var sem=hasilResponse[1];
						if(sem<=0.3)
						{	
							document.location.href="index.php?page=hasil&nisn="+nisn;
						}
						else
						{
							//Cek teta disini
							$.ajax({
								url:"cekTeta.php",
								type:"POST",
								data:"nisn="+nisn,
								success:function(response){
									if(response==1)
									{
										document.location.href="index.php?page=hasil&nisn="+nisn;
									}
									else
									{
										//Cek jumlah soal maksimal disini
										$.ajax({
											url:"cekSoalMaximal.php",
											type:"POST",
											data:"nisn="+nisn,
											success:function(response){
												if(response==1)
												{
													document.location.href="index.php?page=hasil&nisn="+nisn;
												}
												else
												{
													var href=window.location.href;
													var split=href.split("&");
													var no=$("input[name='no']").val();
													var no=(no*1)+1;
													document.location.href=split[0]+"&no="+no+"&noSoal="+noSoal+"&nisn="+nisn;
												}
											}
										});//Ajax cek soal maksimal
									}
								}
							});	//Ajax cek teta
						}
					}
				});	//Ajax submit proses 
			}, waktuRespon2);//Interval reload untuk 10 detik melengkapi jawaban
		}
	});
}	
$("form").submit(function(){
	var data=$(this).serialize();
	var nisn=$("input[name='nisn']").val();
	$.ajax({
		url:"proses.php",
		type:"POST",
		data:data,
		success:function(response){
			var hasilResponse=response.split("&");
			var noSoal=hasilResponse[0];
			var sem=hasilResponse[1];
			if(sem<=0.3)
			{	
				document.location.href="index.php?page=hasil&nisn="+nisn;
			}
			else
			{
				//Cek teta disini
				
				$.ajax({
					url:"cekTeta.php",
					type:"POST",
					data:"nisn="+nisn,
					success:function(response){
						if(response==1)
						{
							document.location.href="index.php?page=hasil&nisn="+nisn;
						}
						else
						{
							//Cek jumlah soal maksimal disini
							$.ajax({
								url:"cekSoalMaximal.php",
								type:"POST",
								data:"nisn="+nisn,
								success:function(response){
									if(response==1)
									{
										document.location.href="index.php?page=hasil&nisn="+nisn;
									}
									else
									{
										var href=window.location.href;
										var split=href.split("&");
										var no=$("input[name='no']").val();
										var no=(no*1)+1;
										document.location.href=split[0]+"&no="+no+"&noSoal="+noSoal+"&nisn="+nisn;
									}
								}
							});//Ajax cek soal maksimal
						}
					}
				});	//Ajax cek teta
			}
		}
	});	//Ajax submit proses 
	return false;
});
function timer(){
	var count = 0,
	timer = $.timer(function() {
		count++;
		$('input[name="waktu"]').val(count);
	});
	timer.set({ time : 1000, autostart : true });
}
