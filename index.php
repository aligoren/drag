<!DOCTYPE html>
<html>
<head>
	<title>Drag Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	<div class="jumbotron todo-container">
		<div class="row">
			<div class="col-md-6">
				<h2 class='locationTitle'>Incompleted</h2>
				<input type="text" class="form-control enterNew" name="">
				<div id="left" class="pre-scrollable">
					<li data-id="1" class="list-group-item listItem">
						<p class="taskTitle">T1</p>
						<input class="form-control" type="date" name="txtTaskDate" value="<?=date('Y-m-d')?>">
					</li>
					<li data-id="2" class="list-group-item listItem">T2</li>
					<li data-id="3" class="list-group-item listItem">T3</li>
					<li data-id="4" class="list-group-item listItem">T4</li>
					<li data-id="5" class="list-group-item listItem">T5</li>
					<li data-id="6" class="list-group-item listItem">T6</li>
					<li data-id="7" class="list-group-item listItem">T7</li>
					<li data-id="8" class="list-group-item listItem">T8</li>
					<li data-id="9" class="list-group-item listItem">T9</li>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class='locationTitle'>Completed</h2>
				<div id="right" class="pre-scrollable"></div>
			</div>
		</div>
	</div>
</div>


<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="drag.js"></script>
</body>
</html>