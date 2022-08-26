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
    labels: ["KPS", "MFK", "TKRS"],
    datasets: [{
    	label: '',
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
    	],
    	backgroundColor: [
    	'rgba(255, 99, 132, 0.2)',
    	'rgba(54, 162, 235, 0.2)',
    	'rgba(255, 206, 86, 0.2)'
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
