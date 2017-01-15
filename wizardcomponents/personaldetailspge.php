<html>
    <head>
        <link rel="stylesheet" type="text/css" href="progressbar.css">
    </head>
    <body>
        <div id=”personaldetails”>
            <ul class="progressbar">
                    <li class="active">personal details</li>
                    <li>about me</li>
                    <li>work & education</li>
                    <li>referees</li>
                    <li>cv</li>
            </ul>
        </div>
        <h1 align="center">Curriculum Vitae</h1>
        <?php
    		$fileexists = false;
    		if(file_exists("cvcontent/personaldetails.php")){
    			$fileexists = true;
    			include "cvcontent/personaldetails.php";
    		}
    	?>
        <!-- Form begins here -->
        <form name="myForm1" action="wizardcomponents/personaldetailspgehandler.php" method="post" id = "personaldetailsform" onsubmit="return validateForm1();">
            <!-- Form personal details subsection begins here -->
            <fieldset>
                 <legend>Personal Details (COMPULSORY)</legend>
                 <div class = "row">
                     <div class="col-lg-8 col-lg-offset-2">
                         <h2>Name </h2>
                         <input type="text" name="name" value="<?php if($fileexists == true && empty($name) == false){echo $name;} ?>" required placeholder="Franco Frankenstein">
                         <h2>Address</h2>
                         <h3>Street Address</h3>
                         <input type="text" name="street_add" value="<?php if($fileexists == true && empty($street_add) == false){echo $street_add;} ?>" required placeholder="123 MyHome Ave">
                         <h3>Suburb</h3>
                         <input type="text" name="suburb_add" value="<?php if($fileexists == true && empty($suburb_add) == false){echo $suburb_add;} ?>" required placeholder="Te Aro">
                         <h3>City</h3>
                         <input type="text" name="city_add" value="<?php if($fileexists == true && empty($city_add) == false){echo $city_add;} ?>" required placeholder="Wellington">
                         <h2>Phone</h2>
                         <input type="text" name="phone" value="<?php if($fileexists == true && empty($phone) == false){echo $phone;} ?>" required placeholder="(04) MYHOMEPHONENUMBER">
                         <h2>Mobile</h2>
                         <input type="text" name="mobile" value="<?php if($fileexists == true && empty($mobile) == false){echo $mobile;} ?>" required placeholder="021 MYMOBILE">
                         <h2>Email</h2>
                          <!-- Hint -->
                         <img id="emailhelp" src="helpicon.png"/>
                         <p id="emailhint" style="color:red; font-style: italic;">Make sure you choose an email address that is professional, not ilovetequila@hotmail.com. If possible, create one that contains both your first and last names </p>
                         <input type="email" name="email" value="<?php if($fileexists == true && empty($email) == false){echo $email;} ?>" required placeholder="my.email@blueprint.co.nz">
                         <div id="languages">
                             <h2>Languages </h2>
                             <input type="text" name="lang[]" value="<?php if($fileexists == true && empty($lang[0]) == false){echo $lang[0];} ?>" required placeholder="French">
                             <?php

                 		    if ($fileexists == true)	{
                 		    	if(empty($arrsizeLang)==false && $arrsizeLang>1){

                 		    	for($i=1; $i < $arrsizeLang; $i++){
                 			    	if(empty($lang[$i]) == false){
                 			    		print	"<input type='text' value ='".  $lang[$i] . "' name='lang[]'><br>";
                 			    	}
                 		    	}
                 		     }
                 		    }
                 		    ?>
                         </div>
                         <input type="button" class = "btn btn-primary btn-outline btn-sm" value="Add another language" onClick="addLanguageInput('languages');">
                         <h2>Driver's License</h2>
                         <!-- HINT -->
                         <img id="dlhelp" src="helpicon.png"/>
                         <p id="dlhint" style="color:red;font-style:italic;"> Having a drivers licence is very important, it can get you an interview over those who don't. If you dont start the process <a  target = "_blank" href = "https://www.nzta.govt.nz/driver-licences/getting-a-licence/licences-by-vehicle-type/cars/"> here </a></p>
                         <input type="text" name="drivers" value="<?php if($fileexists == true && empty($drivers) == false){echo $drivers;} ?>" required placeholder="Full License">
                         <h2>School</h2>
                         <!-- HINT -->
                         <img id="schoolhelp" src="helpicon.png"/>
                         <p id="schoolhint" style="color:red; font-style:italic;"> New Zealand is a very small place and it is very easy to make connections, having your school down on your CV is just one way to do this</p>
                         <input type="text" name="school_name" value="<?php if($fileexists == true && empty($school_name) == false){echo $school_name;} ?>" required placeholder="My School">
                     </div>
                 </div>
            </fieldset>
        </form>
    </body>
</html>
