<?php include('header.php'); ?>

<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Laporan Pemantauan per 2016'
        },
        subtitle: {
            //text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pemantau'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Jumlah laporan pemantau: <b>{point.y:.1f}</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Januari', 40],
                ['Februari', 15],
                ['Maret', 27],
                ['April', 38],
                ['Mei', 24],
                ['Juni', 15],
                ['Juli', 29],
                ['Agustus', 19],
                ['September', 11],
                ['November', 5],
                ['Desember', 9]
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                //format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }],
        credits: { enabled: false }
    });
});
</script>

	<div class="main-content" style="padding-right:30px;">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
				<div class="dashboard-stats">
					<div class="left">
						<h3 class="flatBluec counter" data-to="7684" data-speed="4000">7684</h3>
                    	<h4>Project</h4>
                	</div>
                	<div class="right flatBlue"><i class="icon ti-pencil-alt"></i></div>
            	</div>
        	</div>
        	<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
	            <div class="dashboard-stats">
    	            <div class="left">
                    	<h3 class="flatGreenc counter" data-to="6433" data-speed="4000">6433</h3>
                    	<h4>Pemantau</h4>
                	</div>
                	<div class="right flatGreen"><i class="icon ti-user"></i></div>
            	</div>
        	</div>
        	<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
	            <div class="dashboard-stats">
                	<div class="left">
	                    <h3 class="flatRedc counter" data-to="4532" data-speed="4000">4532</h3>
                    	<h4>Pengadilan</h4>
                	</div>
                	<div class="right flatRed"><i class="icon ti-stamp"></i></div>
            	</div>
        	</div>
        	<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
	            <div class="dashboard-stats">
                	<div class="left">
	                    <h3 class="flatOrangec counter" data-to="345" data-speed="8000">345</h3>
                    	<h4>Laporan</h4>
                	</div>
                	<div class="right flatOrange"><i class="icon ti-bar-chart"></i></div>
            	</div>
        	</div>

	        <div class="col-md-12 nopad-right">
    	        <!-- panel -->
            	<div class="panel panel-piluku">
	                <div class="panel-heading">
                    	<h3 class="panel-title">Laporan Pemantauan</h3>
              		</div>
      				<div class="panel-body">
        				<div id="container" style="width:100%;"></div>
        				<!-- /row -->
    				</div>
        		</div>
        		<!-- /panel -->
    		</div>
    		<!-- col-md-6 -->

			<!-- col-md-3 -->


<?php include('footer.php'); ?>