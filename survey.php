<html lang="en">

<?php include 'app.php';
$Components->head('Survey'); ?>
<body>

<body>
<?php $Components->header(); ?>

	<main>
		<!-- https://www.w3schools.com/html/html_form_input_types.asp -->


		<form action="process.php" method="post" onsubmit="return validateForm()">

			<div id="headingquestion">
				<h2 class="underline">
					<!-- add bottom border to this -->
					Please tell us about your visit to Northern California
				</h2>
			</div>
			<div>
				<h3> Enter your name
				</h3>
				<input type="text" id="visitor" name="visitor" >
				<span class="astric"> * </span>
			</div>

			<!-- Group number form-->
			<div>
				<h3> How many people in your group:</h3>
				<input type="number" name="groupNum" min="0" max="100" step="1" value="6" style="margin-bottom: 20px;">
			</div>

			<!-- Date documenting when they visited -->
			<div>
				<h3> When did you visit?</h3>
				<input type="date" id="visitDate" name="vdate" />
				<span class="astric"> * </span><br />
				<p id="errorMessage"></p>
			</div>

			<legend>Choose Where you Went :</legend>
			<input type="checkbox" name="place" value="San Francisco" id="san"><label for="san">San Francisco</label><br>
			<input type="checkbox" name="place" value="Lost Coast" id="lc"><label for="lc">Lost Coast</label><br>
			<input type="checkbox" name="place" value="Glass Beach" id="gb"><label for="gb">Glass Beach</label><br>


			<!-- Field Set for favorite place -->

			<legend>Pick Your Favorite Place</legend>
			<input type="radio" name="fplace" value="San Francisco" id="san"><label for="san">San Francisco</label><br>
			<input type="radio" name="fplace" value="Lost Coast" id="lc"><label for="lc">Lost Coast</label><br>
			<input type="radio" name="fplace" value="Glass Beach" id="gb"><label for="gb">Glass Beach</label><br>



			<!-- Scrollbar for town raiting -->
			<br>Please rate your Trip<br>
			<p>0
				<input type="range" name="rating" min="0" max="10" step="1" list="set">
				<datalist id="set">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</datalist>
				10
			</p>



			<div id="button">
				<input type="submit">
			</div><!-- end of div for submit button -->
		</form>

	</main>
</body>

</html>