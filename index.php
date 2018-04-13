<!DOCTYPE html>
<html>
	<head>
		<!-- Setting -->
		<meta charset="UTF-8">

		<!-- Import CSS file-->
		
		<!-- External -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<!-- Internal -->
		<link rel="stylesheet" type="text/css" href="./index.css">
	</head>

	<body>
		<div class="container">
			<div class="settingWrapper">
				<div class="setting row">
					<div class="col-sm-6"><input type="text" class="form-control" id="title" placeholder="차트 이름" /></div>
					<div class="col-sm-2"><button type="button" class="btn btn-secondary" id="btn1">변경</button></div>
				
					<div class="col-sm-2 dropdown-wrapper theme">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Theme
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-item disabled">light1</div>
								<div class="dropdown-item">light2</div>
								<div class="dropdown-item">dark1</div>
								<div class="dropdown-item">dark2</div>
							</div>
						</div>
					</div>
					<div class="col-sm-2 dropdown-wrapper type">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							type
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<div class="dropdown-item disabled">column</div>
								<div class="dropdown-item">bar</div>
								<div class="dropdown-item">area</div>
								<div class="dropdown-item">spline</div>
								<div class="dropdown-item">pie</div>
							</div>	
						</div>
					</div>
				</div>
			</div>

			<div id="chartContainer"></div>

			<div class="contentWrapper">
				<div class="row">
					<div class="row col-sm-6 creater">
						<div class="col-sm-10"><input type="text" class="form-control" placeholder="차트에 추가할 항목 이름"/></div>
						<div class="col-sm-2"><button type="button" class="btn btn-secondary">등록</button></div>
					</div>

					<div class="col-sm-6 data-list"></div>
				</div>
			</div>
		</div>


		<!-- Import Javascript file-->
		
		<!-- External-->
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		
		<!-- Internal -->
		<script src="./index.js"></script>
	</body>
</html>

