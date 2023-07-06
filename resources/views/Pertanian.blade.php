<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{background-color :rgb(17, 17, 17)} 
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: rgb(253, 232, 37);
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #FF4500;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #FF4500;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>
<script>
			alert("Selamat Datang Di Juasha Parfume Store");
		</script>
		<script>
		var nama = prompt("Pilihlah Produk yang anda cari");
		document.write;
	</script>
<div class="header">
  <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwKY9HG-vXlODdHkfU9nmqbZqmgLpW68q1ow&usqp=CAU=" style="width:1300px;height:500px">
	<h1>JUANSHA PROFESIONAL PARFUME</h1>
   Alamat :
   Jl. Dr. Wahidin Sudirohusodo No.4, Klitren, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55211<br>
  </p>
</div>

<div class="topnav">

  <a href="https://shopee.co.id/juansha.parfum">Semua Produk</a>
  <a href= "https://cf.shopee.co.id/file/d508c86611ced9a267a47387449ed24e">Produk Terbaru</a>
  <a href="https://cf.shopee.co.id/file/a7bd4127963fb2bc96299e83de2cd043">Produk Terlaris</a>
  <a href="https://images.tokopedia.net/img/cache/1200/BgtCLw/2022/8/20/388ff7e6-485c-46a9-b538-4901dae85bf1.jpg?ect=4g">Produk Terjual</a>
  <li><a href="{{url('/page')}}">SPK</a></li>


  
</div>
<div class="row">
  <div class="column side">
    <h2 style="color:white ;">Produk Terlaris</h2>
    <img src="https://cf.shopee.co.id/file/a7bd4127963fb2bc96299e83de2cd043" alt="Ortus" style="width:200px;height:200px;">
	<p style="color:white ;">PARFUME FEMINIM</p>
    <h1 style="color:white ;">Harga</h1>
	<h2 style="color:white ;">Rp.990.000,00</h2>
	<h3 style="color:white ;">Cari Produk</h3>
	<script>
		function cari (){
			var kata = document.formcari.keyword.value;
			var hasil = "https://shopee.co.id/juansha.parfum;
			windows.open(hasil, 'shopee', config='height=60, width=50,scrollbars=yes location=yes')
			}
	</script>
	<form name="formcari" onSubmit= "cari()" style="color:white ;">Cari:
	<input name="keyword" size="30" type="text">
	<input type="submit" value="Cari">
	</form>
  </div>
  <div class="column middle">
    <h2 style="color:white ;">Semua Produk Ortuseight</h2>
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwGWeBv7_MWlwJNS0bNjpovMN6AvPF25EqxiLwZM9iHw8_wGJhMaPxTRlRmAUpV5lknQc&usqp=CAU" alt="Logo" style="width:200px;height:200px;">
	 <img src="https://id-test-11.slatic.net/p/50ba3e62e438c859baae5770a9a5eeb7.jpg" alt="Logo" style="width:200px;height:200px;">
	 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuLoto9QY5Ai5OGD-cmZpgbxBRhNiVQ0shHw&usqp=CAU" alt="Logo" style="width:200px;height:200px;">
	 <img src="https://cf.shopee.co.id/file/d508c86611ced9a267a47387449ed24e" alt="Logo" style="width:200px;height:200px;">
	 <img src="https://cf.shopee.co.id/file/1bd677955b39e7153bd8b61a86f7a079" alt="Logo" style="width:200px;height:200px;">
	 <img src="https://cf.shopee.co.id/file/a7bd4127963fb2bc96299e83de2cd043" alt="Logo" style="width:200px;height:200px;">
	 
    <h2 style="color:white ;">Varian Rasa</h2>
	 <img src="https://s1.bukalapak.com/img/68215939012/large/data.jpeg" alt="Logo" style="width:200px;height:200px;">
     <h1 style="color:white ;">Rp.419.000,00</h1>
	 <h4 style="color:white ;">Produk yang dicari :</h4>
	  <script>
			function daftar(){
			var nama = document.formdaftar.nama.value;
			if(nama == ""){
				alert("nama tidak boleh kosong");
				}
			}	
		</script>
		<form name="formproduk" style="color:white ;"> 
			Nama Produk: 
			<input name = "nama produk" size = "40" type = "text">
		</form>
  </div>
  
  <div class="column side">
    <h2 style="color:white ;">Toko Kami:</h2>
    
    <img src="data:image/jpeg;base64,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" alt="toko.png" style="width:300px;height:200px;">
    <p style="color:white ;">Alamat :  Jl. Dr. Wahidin Sudirohusodo No.4, Klitren, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55211</p>
	<p style="color:white ;">Jam : Buka Jam 09.00 WIB - Jam 21.00 WIB</p>
	<p style="color:white ;">Telepon : 0895-0805-4133</p>
	<p style="color:white ;">Provinsi : DKI JAKARTA</p>
  </div>
</div>
 
<div class="footer">
  <p style="color:white ;">Copyright ©Juasha_Parfumes All Right Reserved</p>
</div>
  
</body>
</html>