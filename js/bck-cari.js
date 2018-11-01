var host="http://localhost/gema/php/";

//Menampilkan peta pertama kali
function initialize() {
	lat=-7.558672;
	longi=110.76821
	var mapProp = {
		center:new google.maps.LatLng(lat,longi),
		zoom:17,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	//Membuat peta
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var arrayLat=[-7.558653,-7.558633];
	var arrayLong=[110.76811,110.76851];
	var arrayContent=["<h3 style='display:inline;'>Kos 1 </h3>","Kos 2"];
	var arrayGambar=["<img src='images/kos/kos1.jpg' width='50px' height='50px'>","<img src='images/kos/kos2.jpg' width='50px' height='50px'>"];
	for(i=0;i<=1;i=i+1)
	{
		//Marker dari lokasi
		var myCenter=new google.maps.LatLng(arrayLat[i],arrayLong[i]);
		var marker=new google.maps.Marker({
		  position:myCenter,
		});
		//Proses pemberian marker
		marker.setMap(map);
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				var infowindow = new google.maps.InfoWindow({
						content:arrayGambar[i]+" "+arrayContent[i]
					});
					infowindow.open(map,marker);
			}
		})(marker, i));
	}
	map.fitBounds(bounds);
	var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
		this.setZoom(14);
		google.maps.event.removeListener(boundsListener);
    });
}
function checkStatus(val){
	if(val=="sukses")
	{
		var status="sukses";
		toastr.success('Anda berhasil login ','Sukses');
		$(".nav-login").addClass("disabled");
	}
}

function showBubble(){
	$(".bubble").toggle();
}
function cariKos(){
	nama_kos=$("input[name='nama_kos']").val();
	data="nama_kos="+nama_kos+"&action=cariNamaKos";
	$.ajax({
		url:host+"cari.php",
		type:"POST",
		data:data,
		dataType: 'jsonp',
		jsonp: 'jsoncallback',
		async:false,
		error:function(){
			alert("error");
		},
		success:function(data){
			var arrayLat=[];
			var arrayLong=[];
			var arrayContent=[];
			var arrayGambar=[];
			$.each(data, function(i,item){
				arrayContent.push(item.nama_kos);
				arrayLat.push(item.lat);
				arrayLong.push(item.longi);
				arrayGambar.push(item.gambar1);
				alert(arrayContent[i]);
				//Marker dari lokasi
				var myCenter=new google.maps.LatLng(arrayLat[i],arrayLong[i]);
				var marker=new google.maps.Marker({
				  position:myCenter,
				});
				//Proses pemberian marker
				marker.setMap(map);
				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						var infowindow = new google.maps.InfoWindow({
								content:arrayGambar[i]+" "+arrayContent[i]
							});
							infowindow.open(map,marker);
					}
				})(marker, i));		
			});
			map.fitBounds(bounds);
			var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
				this.setZoom(14);
				google.maps.event.removeListener(boundsListener);
			});
		}
	});
}
function register(){	
	$("#pesanRegister").html("");
	$("#notifikasiRegister").fadeOut();
	username =$("input[name='usernameRegister']").val();
	password =$("input[name='passwordRegister']").val();
	ulangi =$("input[name='ulangiPassword']").val();
	nama =$("input[name='nama']").val();
	alamat =$("input[name='alamat']").val();
	if(password!=ulangi)
	{
		$("#pesanRegister").html("Password dan ulangi password tidak sama");
		$("#notifikasiRegister").fadeIn();
	}
	else
	{	
		if(username=="" || password=="" && nama=="" && alamat=="")
		{
			$("#pesanRegister").html("Silahkan lengkapi form");
			$("#notifikasiRegister").fadeIn();
		}
		else
		{
			data="username="+username+"&password="+password+"&nama="+nama+"&alamat="+alamat;
			$.ajax({
				url:host+"register.php",
				type:"POST",
				data:data,
				beforeSend:function(){
					$("#pesanRegister").html("");
					$("#notifikasiRegister").fadeOut();
				},
				success:function(response){
					if(response==1)
					{
						$("#modal_register").modal('hide');
						toastr.success('Selamat anda telah berhasil mendaftar,silahkan login','Sukses');
					}
					else
					{
						$("#pesanRegister").html(response);
						$("#notifikasiRegister").fadeIn();
					}
				}
			});
		}
	}
}

function login(){
	username =$("input[name='username']").val();
	password =$("input[name='password']").val();
	data='username='+username+"&password="+password;
	$.ajax({
		url:host+"login.php",
		type:"POST",
		data:data,
		beforeSend:function(){
			$("#pesanLogin").html("");
			$("#notifikasiLogin").fadeOut();
		},
		success:function(response){
			if(response==1)
			{
				$("#modal_login").modal('hide');
				toastr.success('Selamat anda telah berhasil mendaftar,silahkan login','Sukses');
				document.location.href="index.php?status=sukses";;
				
			}
			else
			{
				$("#pesanLogin").html(response);
				$("#notifikasiLogin").fadeIn();
			}
		}
	});
}