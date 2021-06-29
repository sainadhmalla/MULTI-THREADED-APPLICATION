var Zone = "";
var Division = "";
var Category = "";

Handlebars.registerHelper("inc", function (value, options) {
	return parseInt(value) + 1;
});

$(document).ready(function () {
	var wrapper = "";
	var form = new FormData();
	form.append("new", "true");

	var settings = {
		url:"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
		method: "POST",
		timeout: 0,
		processData: false,
		mimeType: "multipart/form-data",
		contentType: false,
		data: form,
	};
	$.ajax(settings).done(function (response) {
		wrapper = { objects: JSON.parse(response) };
		// console.log(wrapper);
		// Retrieve the template data from the HTML (jQuery is used here).
		var template = $("#zoneTemplate").html();
		// Compile the template data into a function
		var templateScript = Handlebars.compile(template);
		// Generate html for all zones in array from compiled template
		var html = templateScript(wrapper);
		// console.log(html);
		// Insert the HTML code into the page
		$("#railway_zone").append(html);
		$("#railway_zone").on("change", function () {
			// console.log($(this).val());
			Zone = $(this).val();
			Division = "";
			Category = "";
			$("#railway_organization").find("option").remove();
			$("#railway_organization").append('<option value="" disabled selected>Select Division or Workshop</option>');
			$("#railway_department1").find("option").remove();
			$("#ailway_department1").append(
				'<option value=""disabled selected>Select Department</option>'
			);
			var form = new FormData();
			form.append("new_zone", true);
			form.append("zone_id", Zone);

			var settings = {
				url:"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
				method: "POST",
				timeout: 0,
				processData: false,
				mimeType: "multipart/form-data",
				contentType: false,
				data: form,
			};

				$.ajax(settings).done(function (response) {
				var divisionsAndWorkshops = JSON.parse(response);
				///* console.log(divisionsAndWorks); */
				var wrapper = "";
				var type = $('#railway_organisation').val();
				var template="";
				if(type == 'Division'){
					template = $("#divisionTemplate").html();		
					wrapper = {objects : divisionsAndWorkshops.division};
				}
				else if(type == 'Workshop')
				{
					template = $("#divisionTemplate").html();		
					wrapper = {objects : divisionsAndWorkshops.workshop};
				}
				else{
					template = $("#divisionTemplate1").html();
					wrapper = divisionsAndWorkshops;
				}					
				
				//c* console.log(wrar); */
				// Compile the template data into a function
				var templateScript = Handlebars.compile(template);
				var html = templateScript(wrapper);
				// console.log(html);
				$("#railway_organization").append(html);
				$("#railway_organization").on("change", function () {
					
					Division = $(this).val();
					Category = "";
					var type =
						$(this).find(":selected").attr("class") ===
						"divisionOption"
							? "division"
							: "workshop";
					// console.log($(this).find(":selected").attr("class"));
					// console.log(type);
					$("#railway_department1").find("option").remove();
					var form = new FormData();
					form.append("project_category", "true");
					form.append("division_name", Division);
					form.append("type", type);
					var settings = {
						url:"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
						method: "POST",
						timeout: 0,
						processData: false,
						mimeType: "multipart/form-data",
						contentType: false,
						data: form,
					};

					$.ajax(settings).done(function (response) {
						var departments = { categories: JSON.parse(response) };
						//console.log(departments);
						var template = $("#categoryTemplate").html();
						// Compile the template data into a function
						var templateScript = Handlebars.compile(template);
						// Generate html for all zones in array from compiled template
						var html = templateScript(departments);
						// Insert the HTML code into the page
						$("#railway_department1").find("option").remove();
						$("#railway_department1").append(html);
						$("#railway_department1").on("change", function () {
							Category = $(this).val();
						});
					});
				});
			});
		});
	});
});
