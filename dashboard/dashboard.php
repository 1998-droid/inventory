<?php
    include_once "../_header.php";
?>


<script type="text/javascript" src="../assets/js/Chart.js"></script>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
<h1 class="mt-4">Dashboard</h1>
<hr>
<div class="box">
<div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
</div>

</div>
</div>
</main>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
    	type: 'bar',
    	data: {
    labels: ["KPS(Total = 20 file)", "MFK(Total = 20 file)", "TKRS(Total = 20 file)",
	"PMKP(Total = 20 file)", "MRMIK(Total = 20 file)", "PPI(Total = 20 file)", "PPK(Total = 20 file)", "AKP(Total = 20 file)", "HPK(Total = 20 file)",
	"PP(Total = 20 file)", "PAP(Total = 20 file)", "PAB(Total = 20 file)", "PKPO(Total = 20 file)", "KE(Total = 20 file)", "SKP(Total = 20 file)", "KIA(Total = 20 file)",
	"TBC(Total = 20 file)", "HIV(Total = 20 file)", "Stunting(Total = 20 file)", "KB(Total = 20 file)",],
    datasets: [{
    	label: 'Data File Program Kerja',
    	data: [
    	<?php 
    	$jumlah_teknik = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='KPS'");
    	echo mysqli_num_rows($jumlah_teknik);
    	?>, 
    	<?php 
    	$jumlah_ekonomi = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='MFK'");
    	echo mysqli_num_rows($jumlah_ekonomi);
    	?>, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='TKRS'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PMKP'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='MRMIK'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PPI'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PPK'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='AKP'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='HPK'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PP'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PAP'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PAB'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='PKPO'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='KE'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='SKP'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='KIA'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='TBC'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='HIV'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='Stunting'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
		, 
    	<?php 
    	$jumlah_fisip = mysqli_query($koneksi,"SELECT kategori FROM tb_data where kategori='KB'");
    	echo mysqli_num_rows($jumlah_fisip);
    	?>
    	],
    	backgroundColor: [
    	'rgba(240, 15, 255, 1.0)',
    	'rgba(250, 174, 215, 1.0)',
    	'rgba(0, 15, 255, 1.0)', 
    	'rgba(127, 255, 212, 1.0)'//mulai dari sini
		,'rgba(240, 15, 255, 1.0)'
		,'rgba(245, 95, 220, 1.0)'
		,'rgba(0, 0, 255, 1.0)'
		,'rgba(138, 162, 226, 1.0)'
		,'rgba(229, 82, 42, 1.0)'
		,'rgba(222, 235, 135, 1.0)'
		,'rgba(95, 249, 160, 1.0)'
		,'rgba(127, 255, 0, 1.0)'
		,'rgba(210, 38, 30, 1.0)',
		'rgba(255, 247, 80, 1.0)',
		'rgba(100, 73, 237, 1.0)',
		'rgba(220, 193, 60, 1.0)',
		'rgba(189, 219, 107, 1.0)',
		'rgba(139, 176, 139, 1.0)',
		'rgba(242, 32, 130, 0.5)',
		'rgba(240, 14, 140, 1.0)'

    	],
    	borderColor: [
    	'rgba(255,99,132,1)',
    	'rgba(54, 162, 235, 1)',
    	'rgba(255, 206, 86, 1)',
    	],
    	borderWidth: 1
    }]
    	},
    	options: {
    scales: {
    	yAxes: [{
    ticks: {
    	beginAtZero:true
    }
    	}]
    }
    	}
    });
</script>

<?php
    include_once "../_footer.php";
?>
