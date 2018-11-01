$(document).ready(function(){
	$(".login").submit(function(){
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:$(this).serialize(),
			error:function(){
				toastr.error('Terjadi kesalahan koneksi','Warning');
			},
			beforeSend:function(){
				$("html,body").css("cursor","wait");
			},
			success:function(response){
				$("html,body").css("cursor","default");
				if(response==1)
				{
					document.location.href="home.php";
				}
				else
				{
					toastr.error(response,'Warning');
				}
			}
		});
		return false;
	});
	$(".crud").submit(function(){
		urlData=$("input[name='urlData']").val();
		urlProses=$("input[name='urlProses']").val();
		action=$("input[name='action']").val();
		if(action=="add")
		{
			status="Tambah data berhasil";
		}
		else
		{
			status="Update data berhasil";
		}
		
		$.ajax({
			url:urlProses,
			type:$(this).attr("method"),
			data:$(this).serialize(),
			error:function(){
				toastr.error('Terjadi kesalahan koneksi','Warning');
			},
			beforeSend:function(){
				$("html,body").css("cursor","wait");
			},
			success:function(response){
				$("html,body").css("cursor","default");
				if(response==1)
				{
					$("#modalTambah").modal("hide");
					toastr.success(status,'Success');
					//Tambahkan ajax yang terakhir kali
					$.ajax({
						url:urlData,
						type:"POST",
						data:"action=action",
						success:function(response){
							$(".isiData").html(response);
							jumlahData(1);
						}
					});
				}
				else
				{
					toastr.error(response,'Warning');
				}
			}
		});
		return false;
	});
	$(".updateNilai").submit(function(){
		urlData=$("input[name='urlData']").val();
		urlProses=$("input[name='urlProses']").val();
		data=$(this).serialize()
		$.ajax({
			url:urlProses,
			type:$(this).attr("method"),
			data:data,
			async:false,
			error:function(){
				toastr.error('Terjadi kesalahan koneksi','Warning');
			},
			beforeSend:function(){
				$("html,body").css("cursor","wait");
			},
			success:function(response){
				$("html,body").css("cursor","default");
				if(response==1)
				{
					$("#modalNilai").modal("hide");
					toastr.success("Penggantian nilai berhasil",'Success');
					mapel=$("select[name='mapel']").val();
					kelas=$("select[name='kelas']").val();
					data2="mapel="+mapel+"&kelas="+kelas;
					//Tambahkan ajax yang terakhir kali
					$.ajax({
						url:urlData,
						type:"POST",
						data:data2,
						async:false,
						success:function(response){
							$(".isiData").html(response);
						}
					});
				}
				else
				{
					toastr.error(response,'Warning');
					
				}
			}
		});
		return false;
	});
	$(".gantiPassword").submit(function(){
		password=$("input[name='password']").val();
		ulangi=$("input[name='ulangi']").val();
		if(password!=ulangi)
		{
			toastr.error("Password dan perulangan tidak sama",'Warning');
		}
		else
		{
			$.ajax({
				url:"action/gantiPassword.php",
				type:"POST",
				data:$(this).serialize(),
				success:function(response){
					$("#modalProfile").modal("hide");
					toastr.success("Penggantian password berhasil",'Success');
				}
			});
		}
		return false;
	});
});
function profile(){
	$("#modalProfile").modal();
	$("input[type='password']").val("");
}
function logout(){
	$("#modalLogout").modal();
}
function tambahBaru(val)
{
	urlForm=$("input[name='urlForm']").val();
	$.ajax({
		url:urlForm,
		error:function(){
			toastr.error('Terjadi kesalahan koneksi','Warning');
		},
		beforeSend:function(){
			$("html,body").css("cursor","wait");
		},
		success:function(response){
			$("html,body").css("cursor","default");
			$("#modalTambah").modal();
			$(".isiForm").html(response);
			$("form").prop("action",action);
		}
	});
}
function edit(val)
{
	kode=val.getAttribute("id");
	urlForm=$("input[name='urlForm']").val();
	$.ajax({
		data:"kode="+kode,
		type:"POST",
		url:urlForm,
		error:function(){
			toastr.error('Terjadi kesalahan koneksi','Warning');
		},
		beforeSend:function(){
			$("html,body").css("cursor","wait");
		},
		success:function(response){
			$("html,body").css("cursor","default");
			$("#modalTambah").modal();
			$(".isiForm").html(response);
			$(".crud").attr("action",action);
		
		}
	});
}

function editNilai(val)
{
	kode=val.getAttribute("id");
	urlForm=$("input[name='urlForm']").val();
	$.ajax({
		data:"kode="+kode,
		type:"POST",
		url:urlForm,
		error:function(){
			toastr.error('Terjadi kesalahan koneksi','Warning');
		},
		beforeSend:function(){
			$("html,body").css("cursor","wait");
		},
		success:function(response){
			$("html,body").css("cursor","default");
			$("#modalNilai").modal();
			$(".isiForm").html(response);
		}
	});
}
function logoutAplikasi(){
	document.location.href="action/logout.php";
}

function cariSiswa(){
	mapel=$("select[name='mapel']").val();
	kelas=$("select[name='kelas']").val();
	data="mapel="+mapel+"&kelas="+kelas;
	$.ajax({
		url:"guru/kelas/cariSiswa.php",
		type:"POST",
		data:data,
		error:function(){
			alert("asd");
		},
		success:function(){
			$.ajax({
				url:"guru/kelas/data.php",
				type:"POST",
				data:data,
				error:function(){
					alert("asd");
				},
				success:function(response){
					$(".isiData").html(response);
				}
			});
		}
	});
}

function cetakRaport(val){
	var url = val.getAttribute('id');
	window.open(url,'scrollwindow','top=200,left=350,width=800,height=800');
}

function jumlahData(val)
{
	if(!val)
	{
		page=1;
	}
	else
	{
		page=val;
	}
	urlJmlData=$("input[name='urlJmlData']").val();
	$.ajax({
		url:urlJmlData,
		success:function(response){
			$('#paging').bootpag({
				paginationClass: 'pagination pagination-sm',
				next: '&raquo;',
				prev: '&laquo;',
				total: response,
				page: val,
				maxVisible: 5
			}).on('page', function(event, num){
				//Ajax request disini
				urlData=$("input[name='urlData']").val();
				$.ajax({
					url:urlData,
					type:"POST",
					data:"no="+num,
					success:function(response){
						$(".isiData").html(response);
					}
				});
			});
		}
	});
}

function previewLoker(val)
{
	kode=val.getAttribute("id");
	$.ajax({
		url:"isiLoker.php",
		type:"POST",
		data:"no="+kode,
		success:function(response){
			$("#modal_loker").modal();
			$("#isiLoker").html(response);
		}
	});
	
}