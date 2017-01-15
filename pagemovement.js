/**
	Implements the functionality for moving between sections/pages
	and sets up the initial display state
*/

$(document).ready(function(){

  // we have 5 pages
	// 1: personal details
	// 2: about me
	// 3: outside skills
	// 4: referees
	// 5: submit
	var curpage = 1;

	/**
		should be performed when application is first loaded
		sets up the initial state, hiding all pages but the first
	*/
  function setup() {

    $("#toprevbtn").hide();
    $("#aboutmepage").hide();
    $("#outsideskillspage").hide();
    $("#refereespage").hide();
    $("#submitpage").hide();
    $("#cvCreate").hide();

  }

	/** displays personal details section, sets up interactive components */
	function personaldetailssetup() {

		$("p").hide();

		$("#emailhelp").click(function(){
			if ($("#emailhint").is(":visible")) {
				$("#emailhint").fadeOut();
			} else {
				$("#emailhint").fadeIn();
			}
		});



		$("#dlhelp").click(function(){
			if ($("#dlhint").is(":visible")) {
				$("#dlhint").fadeOut();
			} else {
				$("#dlhint").fadeIn();
			}
		});

		$("#schoolhelp").click(function(){
			if ($("#schoolhint").is(":visible")) {
				$("#schoolhint").fadeOut();
			} else {
				$("#schoolhint").fadeIn();
			}
		});

	}

	/** displays about me section, sets up interactive components */
	function aboutmesetup() {

		$("#pqhint").show();

		$("#pshelp").click(function(){
			if ($("#pshint").is(":visible")) {
				$("#pshint").fadeOut();
			} else {
				$("#pshint").fadeIn();
			}
		});

		$("#achievehelp").click(function(){
			if ($("#achievehint").is(":visible")) {
				$("#achievehint").fadeOut();
			} else {
				$("#achievehint").fadeIn();
			}
		});

	}

	/** displays ouside skills section, sets up interactive components */
	function outsideskillssetup() {

		$("#employmenthelp").click(function(){
			if ($("#employmenthint").is(":visible")) {
				$("#employmenthint").fadeOut();
			} else {
				$("#employmenthint").fadeIn();
			}
		});

		$("#educationhelp").click(function(){
			if ($("#educationhint").is(":visible")) {
				$("#educationhint").fadeOut();
			} else {
				$("#educationhint").fadeIn();
			}
		});

		$("#extracurrichelp").click(function(){
			if ($("#extracurrichint").is(":visible")) {
				$("#extracurrichint").fadeOut();
			} else {
				$("#extracurrichint").fadeIn();
			}
		});

	}

	/** sets up functionality for referees hint button */
	function refereeshintsetup() {

		$("#refereeshelp").click(function(){
			if ($("#refereeshint").is(":visible")) {
				$("#refereeshint").fadeOut();
			} else {
				$("#refereeshint").fadeIn();
			}
		});

	}

  setup();
	personaldetailssetup();
	aboutmesetup();
	outsideskillssetup();
	refereeshintsetup();

	//  hides current section and displays the next section when the user clicks the next button
	$("#tonextbtn").click(function() {

		// hide current page and show next page
		switch (curpage) {
			case 1:
				$( "#personaldetailspage").hide();
				$( "#aboutmepage").show();
				$("#toprevbtn").show();
				curpage++;
				break;

			case 2:
				$("#aboutmepage").hide();
				$("#outsideskillspage").show();
				curpage++;
				break;

			case 3:
				$("#outsideskillspage").hide();
				$("#refereespage").show();
				curpage++;
				break;

			case 4:
				$("#refereespage").hide();
				$("#submitpage").show();
				$("#tonextbtn").hide();
				$("#cvCreate").show();
				$('#cvRefreash').load("CVHTML.php");
				curpage++;
				break;

			default:
				break;
		}

	});

	// hides current section and displays the previous section when the user clicks the back button
	$("#toprevbtn").click(function() {

		// hide current page and show previous page
		switch (curpage) {
			case 2:
				$("#aboutmepage").hide();
				$("#toprevbtn").hide();
				$("#personaldetailspage").show();
				curpage--;
				break;

			case 3:
				$("#outsideskillspage").hide();
				$("#aboutmepage").show();
				curpage--;
				break;

			case 4:
				$("#refereespage").hide();
				$("#outsideskillspage").show();
				curpage--;
				break;

			case 5:
				$("#submitpage").hide();
				$("#refereespage").show();
				$("#tonextbtn").show();
				$("#cvCreate").hide();
				curpage--;
				break;


			default:
				break;
		}
	});
});
