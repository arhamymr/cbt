	$(document).ready(function(){
		if (sessionStorage.getItem("detik") == undefined) {
            var detik = 0;
            var menit = 30;
            var jam = 1;
        } else {
            var detik = sessionStorage.getItem("detik");
            var menit = sessionStorage.getItem("menit");
            var jam = sessionStorage.getItem("jam");
        }
        /**
          * Membuat function hitung() sebagai Penghitungan Waktu
        */
        function removeStorage(){

            sessionStorage.removeItem("detik");
            sessionStorage.removeItem("menit");
            sessionStorage.removeItem("jam");
            sessionStorage.clear();
            
        }

        function hitung() {
            
            sessionStorage.setItem("detik",detik);
            sessionStorage.setItem("menit",menit);
            sessionStorage.setItem("jam",jam); 
            var storage_detik = sessionStorage.getItem("detik");
            var storage_menit = sessionStorage.getItem("menit");
            var storage_jam = sessionStorage.getItem("jam")
            
            /** setTimout(hitung, 1000) digunakan untuk
                * mengulang atau merefresh halaman selama 1000 (1 detik)
            */

            if (detik == 0 && menit == 0 && detik == 0 ){
                    // remove local storage 
                    removeStorage();
                    // proces to pdf 
                    no_paket=$("input[name='no_paket']").val();
                    nisn=$("input[name='nisn']").val();
                    nama_sekolah=$("input[name='nama_sekolah']").val();
                    var data='no_paket='+no_paket+'&nisn='+nisn+'&nama_sekolah='+nama_sekolah;
                    $.ajax({
                        url:"paket/cekJawab.php",
                        type:"POST",
                        data:data,
                        async:false,
                        success:function(response)
                        {
                                if(confirm('Apakah anda ingin menyelesaikan latihan ini?'))
                                {
                                    $.ajax({
                                        url:"paket/proses_jawab.php",
                                        type:"POST",
                                        data:data,
                                        async:false,
                                        success:function(response){
                                            if(response==1)
                                            {
                                                window.open('laporan/hasil-jawab.php?nisn='+nisn+'&no_paket='+no_paket+"&nama_sekolah="+nama_sekolah,'scrollwindow','top=200,left=350,width=800,height=800');
                                                // document.location.href="home.php";
                                            }
                                            document.location.href='index.php';
                                        }   
                                    });
                                }
                            
                        }   
                    });
                    
            
            }
            setTimeout(hitung, 1000);
            /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
            if (menit < 5 && jam == 0) {
                var peringatan = 'style="color:red"';
            };
            /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
            $('#timer').html(
                'Sisa waktu anda<br>' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik'
            );
            /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
            detik--;
            /** Jika var detik < 0
                * var detik akan dikembalikan ke 59
                * Menit akan Berkurang 1
            */
            if (detik < 0) {
                detik = 59;
                menit--;
                /** Jika menit < 0
                    * Maka menit akan dikembali ke 59
                    * Jam akan Berkurang 1
                */
                if (menit < 0) {
                    menit = 59;
                    jam--;
                    /** Jika var jam < 0
                        * clearInterval() Memberhentikan Interval dan submit secara otomatis
                    */
                    if (jam < 0) {
                        clearInterval();
                    }
                }
            }
            

            // jika waktu habis 

           
        }
        /** Menjalankan Function Hitung Waktu Mundur */
        console.log(location.search);
       	if (location.search == "" ){
       		console.log("kosong");
       	} else {
       		console.log("time excuted");
       		hitung();
       	}
        



        //  action 
		no_paket=$("input[name='no_paket']").val();

		nisn=$("input[name='nisn']").val();
		no_soal=$("input[name='no_soal']").val();
		nama_sekolah=$("input[name='nama_sekolah']").val();
		$("#form_daftar").submit(function(e){
			e.preventDefault();
			var no_paket=$("select[name='paket']").val();
			var data=$(this).serialize();
			var nisn=$("input[name='nisn']").val();
			var nama_siswa=$("input[name='nama_siswa']").val();
			var nama_sekolah=$("input[name='nama_sekolah']").val();
			removeStorage();
			$.ajax({
				url:"proses.php",
				type:"POST",
				data:data,
				beforeSend:function(){
					$("#notifikasi").fadeOut();
				},
				success:function(response){
					if(response==1)
					{	
						document.location.href='home.php?page=paket&no_paket='+no_paket+'&no_soal=1&nisn='+nisn+"&nama_sekolah="+nama_sekolah;
					}
					else
					{
						alert(response);
					}
				}	
			});
		});

		$("#form_jawab").submit(function(e){
			no_paket=$("input[name='no_paket']").val();
			nisn=$("input[name='nisn']").val();
			no_soal=$("input[name='no_soal']").val();
			console.log("ini nisn yang ada di form jawab : ",nisn);
			nama_sekolah=$("input[name='nama_sekolah']").val();
			e.preventDefault();
			var data=$(this).serialize();
			console.log("data",data);
			$.ajax({
				url:"paket/proses2.php",
				type:"POST",
				data:data,
				async:false,
				success:function(response){
					$(".jawaban").attr("checked",false);
					if(no_soal==41)
					{
						$.ajax({
							url:"paket/cekJawab.php",
							type:"POST",
							data:"no_paket="+no_paket+"&nisn="+nisn,
							success:function(response)
							{
								if(response==40)
								{
									if(confirm("Apakah ingin mengakhiri tes untuk paket ini ?"))
									{
										alert("tekan finish untuk menyelesaikan test ini.")
									}
									else
									{
										document.location.href="home.php?page=paket&no_paket="+no_paket+"&no_soal=1&nisn="+nisn+"&nama_sekolah="+nama_sekolah;
									}
								}
								
							}
						});
					}
					else
					{
						var next=(no_soal*1)+1;
						document.location.href="home.php?page=paket&no_paket="+no_paket+"&no_soal="+next+"&nisn="+nisn+"&nama_sekolah="+nama_sekolah;
					}	
				}	
			});
		});
		$("#selesai").click(function(){
			// remove local storage 
                    removeStorage();
                    // proces to pdf 
                    no_paket=$("input[name='no_paket']").val();
                    nisn=$("input[name='nisn']").val();
                    nama_sekolah=$("input[name='nama_sekolah']").val();
                    var data='no_paket='+no_paket+'&nisn='+nisn+'&nama_sekolah='+nama_sekolah;
                    $.ajax({
                        url:"paket/cekJawab.php",
                        type:"POST",
                        data:data,
                        async:false,
                        success:function(response)
                        {
                            
                                if(confirm('Apakah anda ingin menyelesaikan latihan ini?'))
                                {
                                    $.ajax({
                                        url:"paket/proses_jawab.php",
                                        type:"POST",
                                        data:data,
                                        async:false,
                                        success:function(response){
                                            if(response==1)
                                            {
                                                window.open('laporan/hasil-jawab.php?nisn='+nisn+'&no_paket='+no_paket+"&nama_sekolah="+nama_sekolah,'scrollwindow','top=200,left=350,width=800,height=800');
                                                // document.location.href="home.php";
                                            }
                                            document.location.href='index.php';
                                        }   
                                    });
                                }
                            
                        }   
                    });
			// no_paket=$("input[name='no_paket']").val();
			// nisn=$("input[name='nisn']").val();
			// nama_sekolah=$("input[name='nama_sekolah']").val();
			// var data='no_paket='+no_paket+'&nisn='+nisn+'&nama_sekolah='+nama_sekolah;
			// $.ajax({
			// 	url:"paket/cekJawab.php",
			// 	type:"POST",
			// 	data:data,
			// 	async:false,
			// 	success:function(response)
			// 	{
			// 		if(response==40)
			// 		{
			// 			if(confirm('Apakah anda ingin menyelesaikan latihan ini?'))
			// 			{
			// 				$.ajax({
			// 					url:"paket/proses_jawab.php",
			// 					type:"POST",
			// 					data:data,
			// 					async:false,
			// 					success:function(response){
			// 						if(response==1)
			// 						{
			// 							window.open('laporan/hasil-jawab.php?nisn='+nisn+'&no_paket='+no_paket+"&nama_sekolah="+nama_sekolah,'scrollwindow','top=200,left=350,width=800,height=800');
			// 							// document.location.href="home.php";
			// 						}
			// 					}	
			// 				});
			// 			}
			// 		}
			// 		else
			// 		{
			// 			alert("Pengerjaan soal belum tuntas, silahkan dicek kembali");
			// 			// document.location.href="home.php?page=paket&no_paket="+no_paket+"&no_soal=1&nisn="+nisn+"&nama_sekolah="+nama_sekolah;
			// 		}
			// 	}	
			// });
		});
		//Mengetahui jawaban siswa dengan melihat jawaban kemudian mencentang checkboxnya
		$.ajax({
			url:"paket/proses_centang.php",
			type:"POST",
			data:'no_soal='+no_soal+'&nisn='+nisn+'&no_paket='+no_paket,
			success:function(response){
				if(response=="a")
				{
					$("#jawab_a").attr("checked","");
				}
				else if(response=="b")
				{
					$("#jawab_b").attr("checked","");
				}
				else if(response=="c")
				{
					$("#jawab_c").attr("checked","");
				}
				else if(response=="d")
				{
					$("#jawab_d").attr("checked","");
				}
				else if(response=="e")
				{
					$("#jawab_e").attr("checked","");
				}
			}	
		});
		//Mengubah warna dari link. Ketika sudah di jawab maka link menjadi merah, dan jika belum maka masih sama warnannya yaitu biru
		$('.no_soal').each(function(){
			var no_soal=$(this).attr("id");
			var data='no_soal='+no_soal+'&no_paket='+no_paket+'&nisn='+nisn;
			$.ajax({
				url:"paket/proses.php",
				type:"POST",
				data:'no_soal='+no_soal+'&no_paket='+no_paket+'&nisn='+nisn+"&nama_sekolah="+nama_sekolah,
				success:function(response){
					hasil=response.split("&");
					if(hasil[0]=="status1")
					{
						if(hasil[1]==1)
						{
							$("#soal1").css("background","red");
						}
					}
					else if(hasil[0]=="status2")
					{
						if(hasil[1]==1)
						{
							$("#soal2").css("background","red");
						}
					}
					else if(hasil[0]=="status3")
					{
						if(hasil[1]==1)
						{
							$("#soal3").css("background","red");
						}
					}
					else if(hasil[0]=="status4")
					{
						if(hasil[1]==1)
						{
							$("#soal4").css("background","red");
						}
					}
					else if(hasil[0]=="status5")
					{
						if(hasil[1]==1)
						{
							$("#soal5").css("background","red");
						}
					}
					else if(hasil[0]=="status6")
					{
						if(hasil[1]==1)
						{
							$("#soal6").css("background","red");
						}
					}
					else if(hasil[0]=="status7")
					{
						if(hasil[1]==1)
						{
							$("#soal7").css("background","red");
						}
					}
					else if(hasil[0]=="status8")
					{
						if(hasil[1]==1)
						{
							$("#soal8").css("background","red");
						}
					}
					else if(hasil[0]=="status9")
					{
						if(hasil[1]==1)
						{
							$("#soal9").css("background","red");
						}
					}
					else if(hasil[0]=="status10")
					{
						if(hasil[1]==1)
						{
							$("#soal10").css("background","red");
						}
					}
					else if(hasil[0]=="status11")
					{
						if(hasil[1]==1)
						{
							$("#soal11").css("background","red");
						}
					}
					else if(hasil[0]=="status12")
					{
						if(hasil[1]==1)
						{
							$("#soal12").css("background","red");
						}
					}
					else if(hasil[0]=="status13")
					{
						if(hasil[1]==1)
						{
							$("#soal13").css("background","red");
						}
					}
					else if(hasil[0]=="status14")
					{
						if(hasil[1]==1)
						{
							$("#soal14").css("background","red");
						}
					}
					else if(hasil[0]=="status15")
					{
						if(hasil[1]==1)
						{
							$("#soal15").css("background","red");
						}
					}
					else if(hasil[0]=="status16")
					{
						if(hasil[1]==1)
						{
							$("#soal16").css("background","red");
						}
					}
					else if(hasil[0]=="status17")
					{
						if(hasil[1]==1)
						{
							$("#soal17").css("background","red");
						}
					}
					else if(hasil[0]=="status18")
					{
						if(hasil[1]==1)
						{
							$("#soal18").css("background","red");
						}
					}
					else if(hasil[0]=="status19")
					{
						if(hasil[1]==1)
						{
							$("#soal19").css("background","red");
						}
					}
					else if(hasil[0]=="status20")
					{
						if(hasil[1]==1)
						{
							$("#soal20").css("background","red");
						}
					}
					else if(hasil[0]=="status21")
					{
						if(hasil[1]==1)
						{
							$("#soal21").css("background","red");
						}
					}
					else if(hasil[0]=="status22")
					{
						if(hasil[1]==1)
						{
							$("#soal22").css("background","red");
						}
					}
					else if(hasil[0]=="status23")
					{
						if(hasil[1]==1)
						{
							$("#soal23").css("background","red");
						}
					}
					else if(hasil[0]=="status24")
					{
						if(hasil[1]==1)
						{
							$("#soal24").css("background","red");
						}
					}
					else if(hasil[0]=="status25")
					{
						if(hasil[1]==1)
						{
							$("#soal25").css("background","red");
						}
					}
					else if(hasil[0]=="status26")
					{
						if(hasil[1]==1)
						{
							$("#soal26").css("background","red");
						}
					}
					else if(hasil[0]=="status27")
					{
						if(hasil[1]==1)
						{
							$("#soal27").css("background","red");
						}
					}
					else if(hasil[0]=="status28")
					{
						if(hasil[1]==1)
						{
							$("#soal28").css("background","red");
						}
					}
					else if(hasil[0]=="status29")
					{
						if(hasil[1]==1)
						{
							$("#soal29").css("background","red");
						}
					}
					else if(hasil[0]=="status30")
					{
						if(hasil[1]==1)
						{
							$("#soal30").css("background","red");
						}
					}
					else if(hasil[0]=="status31")
					{
						if(hasil[1]==1)
						{
							$("#soal31").css("background","red");
						}
					}else if(hasil[0]=="status32")
					{
						if(hasil[1]==1)
						{
							$("#soal32").css("background","red");
						}
					}
					else if(hasil[0]=="status33")
					{
						if(hasil[1]==1)
						{
							$("#soal33").css("background","red");
						}
					}
					else if(hasil[0]=="status34")
					{
						if(hasil[1]==1)
						{
							$("#soal34").css("background","red");
						}
					}
					else if(hasil[0]=="status35")
					{
						if(hasil[1]==1)
						{
							$("#soal35").css("background","red");
						}
					}
					else if(hasil[0]=="status2")
					{
						if(hasil[1]==1)
						{
							$("#soal2").css("background","red");
						}
					}
				}	
			});
		});
	});