<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI-Kader Gamais ITB</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=$assets;?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=$assets;?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?=$assets;?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?=$assets;?>bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=$assets;?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=$assets;?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		#page-wrapper
		{
			margin: 0 0 0 0;
		}
		
		body
		{
			background-color: white;
		}
		
		.text-green
		{
			color: #00CC00;
		}
		
		.text-blue
		{
			color: #0099CC;
		}

		.text-yellow
		{
			color: #FFCC00;
		}
		
		.text-red
		{
			color: #FF0000;
		}		
	</style>

    <!-- jQuery -->
    <script src="<?=$assets;?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$assets;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=$assets;?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?=$assets;?>bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=$assets;?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	
</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SI-Kader Gamais ITB
						<?php if($current_page == 'seeAllKaderGamais') { ?> 
							<a href="<?=$base_path;?>addKader" class="btn btn-primary btn-sm" style="margin-top: -5px;">
								<span class="glyphicon glyphicon-plus"></span> Tambah Kader
							</a>
						<?php } else if ($current_page == 'updateInfoKader') {?>
							<a href="<?=$base_path;?>seeInfoKader/<?=$id_kader;?>" class="btn btn-primary btn-sm" style="margin-top: -5px;">
								<span class="glyphicon glyphicon-arrow-left"></span> Kembali ke info kader
							</a>
						<?php } else { ?>
							<a href="<?=$base_path;?>seeAllKaderGamais" class="btn btn-primary btn-sm" style="margin-top: -5px;">
								<span class="glyphicon glyphicon-arrow-left"></span> Kembali ke list kader
								<!--<span class="fa fa-users"></span> Lihat Kader Gamais ITB-->
							</a>
						<?php } ?>
						
						<a href="#" data-target="#modal_underdev" data-toggle="modal" class="btn btn-link btn-sm pull-right" style="margin-top: 5px;">
							<span class="fa fa-sign-out fa-fw"></span> Sign Out  
						</a>
						<a href="#" data-target="#modal_underdev" data-toggle="modal" class="btn btn-link btn-sm pull-right" style="margin-top: 5px;">
							<span class="fa fa-cog fa-fw"></span> Ganti Password  
						</a>
					</h1>
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			<div class="modal fade" id="modal_underdev" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Fitur masih dalam pengembangan</h4>
				  </div>
				  <div class="modal-body">
					<p style="font-size: 14em; text-align: center;">:(</p>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
				  </div>
				</div>
			  </div>
			</div>			
			