<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sanjay Mandani</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="en_US" property="og:locale">
	<!--<meta content='https://' name='og:url' />-->


	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />


	<!-- STYLE -->
	<link rel="stylesheet" href="css/site.css?d=<?= time(); ?>" />

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- MAIN JS FILE -->
	<script src="js/site.js?d=<?= time(); ?>" type="text/javascript"></script>

</head>

<body>
	<div class="container-fluid">
		<h4>Select Sequence</h4>

		<form id="tlseq">
			<div class="d-flex justify-content-between">
				<div class="d-flex flex-column align-items-center">
					<div>A</div>

					<div id="l0" class="lights rounded-circle my-2"></div>

					<input name="l0" class="form-control" min="1" max="4" type="number" value="1" />
				</div>

				<div class="d-flex flex-column align-items-center">
					<div>B</div>

					<div id="l1" class="lights rounded-circle my-2"></div>

					<input name="l1" class="form-control" min="1" max="4" type="number" value="2" />
				</div>

				<div class="d-flex flex-column align-items-center">
					<div>C</div>

					<div id="l2" class="lights rounded-circle my-2"></div>

					<input name="l2" class="form-control" min="1" max="4" type="number" value="3" />
				</div>

				<div class="d-flex flex-column align-items-center">
					<div>D</div>

					<div id="l3" class="lights rounded-circle my-2"></div>

					<input name="l3" class="form-control" min="1" max="4" type="number" value="4" />
				</div>
			</div>
		</form>

		<div class="mt-4">
			<h4>Select Interval (in seconds)</h4>

			<div class="form-group row">
				<label for="green" class="col-sm-2 col-form-label">Green Light Interval</label>
				<div class="col-sm-10">
					<input id="green" name="green" class="form-control" min="1" max="120" type="number" value="30" />
				</div>
			</div>

			<div class="form-group row">
				<label for="green" class="col-sm-2 col-form-label">Yellow Light Interval</label>
				<div class="col-sm-10">
					<input id="yellow" name="green" class="form-control" min="1" max="120" type="number" value="3" />
				</div>
			</div>
		</div>

		<div class="d-flex justify-content-center">
			<button class="btn btn-primary me-2" onclick="start();">START</button>
			<button class="btn btn-primary" onclick="stop();">STOP</button>
		</div>
	</div>
</body>

</html>