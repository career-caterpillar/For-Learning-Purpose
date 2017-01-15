<div id="submitpage"> <!-- Div container for the submit page wizard contents. -->

	<body> <!-- Doubtful if body tag is appropriate or necessary here. -->

		<ul class="progressbar"> <!-- The list used for the progress bar across the top of each page. -->
			<li>personal details</li>
			<li>about me</li>
			<li>work & education</li>
			<li>referees</li>
			<li class="active">cv</li>
		</ul>

		<div id = "cvRefreash"> <!-- A div container for the imported php/html example of the CV. The typo has been carried through to other sections of the app. -->

			<?php
				include "CVHTML.php" //Includes the contents of the file CVHTML.php as part of the page.
				//There are security issues here as CVHTML contains user input that could be valid php code.
			?>

		</div>



	</body>

</div>
