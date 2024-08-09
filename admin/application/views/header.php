<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BumiBaru</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<style>
		@font-face {
            font-family: 'PoppinsRegular';
            src: url('<?php echo base_url('./fonts/Poppins-Regular.ttf'); ?>') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
		body {
			font-family: 'PoppinsRegular', sans-serif;
		}
		.dropdown {
			position: relative;
		}
		.dropdown-toggle {
			cursor: pointer;
		}
		.dropdown-menu {
			position: absolute;
			top: 100%;
			left: 0;
			display: none;
			background-color: #f9f9f9;
			border: 1px solid #ccc;
			padding: 10px;
		}
		.dropdown-menu li {
			margin-bottom: 10px;
			margin-left: 20px;
		}
		.dropdown-menu li:last-child {
			margin-bottom: 0;
		}
		.dropdown-menu a {
			text-decoration: none;
			color: #333;
		}
		.dropdown-menu a:hover {
			text-decoration: none;
			color: grey;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg pt-4 pb2">
    	<div class="container">
    		<a href="" class="navbar-brand"><strong>BumiBaru</strong></a>
    		<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
    				<span class="navbar-toggler-icon"></span>
    			</button>
    		<div class="collapse navbar-collapse" id="naff">
    			<ul class="navbar-nav me-auto">
		    		<li class="nav-item">
		    			<a href="<?php echo base_url("home") ?>" class="nav-link">Home</a>
		    		</li>
		    		<li class="nav-item">
		    			<a href="<?php echo base_url("kategori") ?>" class="nav-link">Kategori</a>
		    		</li>
					<li class="nav-item">
		    			<a href="<?php echo base_url("komentar") ?>" class="nav-link">Komentar</a>
		    		</li>
					<li class="nav-item">
		    			<a href="<?php echo base_url("jadwal") ?>" class="nav-link">Jadwal</a>
		    		</li>
					<li class="nav-item">
		    			<a href="<?php echo base_url("artikel") ?>" class="nav-link">Artikel</a>
		    		</li>
					<li class="nav-item">
		    			<a href="<?php echo base_url("karyawan") ?>" class="nav-link">Karyawan</a>
		    		</li>
					<li class="nav-item">
		    			<a href="<?php echo base_url("akun") ?>" class="nav-link">
		    				<?php echo $this->session->userdata("nama") ?>
		    			</a>
		    		</li>
					<li class="nav-item">
		    			<a href="<?php echo base_url("logout") ?>" class="nav-link">Logout</a>
		    		</li>
				</ul>
    		</div>
    	</div>
    </nav>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
	<script>
  		const dropdownToggle = document.querySelector('.dropdown-toggle');
		const dropdownMenu = document.querySelector('.dropdown-menu');
		dropdownToggle.addEventListener('click', () => {
  		dropdownMenu.classList.toggle('show');
	});
</script>
</body>
</html>