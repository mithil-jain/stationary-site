<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="Addons/home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form>
		<div class="form-group col-sm-6">
			<label for="Email">Email address</label>
			<input type="text" class="form-control" id="Email" placeholder="Enter email">
		</div>

		<div class="form-group col-sm-6">
			<label for="UserId">Smart Card</label>
			<input type="text" class="form-control" id="UserId" placeholder="Smart Card Id">
		</div>

		<div class="form-group col-sm-6">
			<label for="Pass">Password</label>
			<input type="password" class="form-control" id="Pass" placeholder="Password">
		</div>

		<div class="form-group col-sm-6">
			<label for="Name">Name</label>
			<input type="text" class="form-control" id="Name" placeholder="Full Name">
		</div>

		<div class="form-group">
			<label for="group">Year</label>
			<div class="group">
				<div class="form-check form-check-inline">
					<label class="form-check-label" for="inlineCheckbox1">1</label>
					<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
				</div>

				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
				  <label class="form-check-label" for="inlineCheckbox2">2</label>
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-primary" style="margin: 15px 0 0 15px">Submit</button>
	</form>
</body>
</html>