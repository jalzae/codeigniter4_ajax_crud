<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- STYLES -->


	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body id="row">

	<div class="container">
		<div id="replaceform">

		</div>
		<br />
		<br />

		<div id="replacer">


		</div>


	</div>

	<script type="text/javascript">
		function reloadtable() {
			$.ajax({
				type: "post",
				url: "<?= base_url('home/reload') ?>",
				success: function(response) {
					$("#replacer").html(response);
				}
			});
		}

		function loadformadd() {
			$.ajax({
				type: "post",
				url: "<?= base_url('home/formadd') ?> ",
				success: function(response) {
					$("#replaceform").html(response);

				}
			});
		}


		$(document).ready(function() {
			loadformadd();
			reloadtable();

		});
	</script>

	<!-- -->

</body>

</html>