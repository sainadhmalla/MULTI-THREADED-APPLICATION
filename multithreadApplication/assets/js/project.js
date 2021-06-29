var Project = "";
var Description = "";

Handlebars.registerHelper("inc", function (value, options) {
	return parseInt(value) + 1;
});
$(document).ready(function () {
	console.log(type);
	console.log(zone);
	console.log(division);
	console.log(department);

	if (type == "Department") {
		var form = new FormData();
		form.append("zone_id", zone);
		form.append("project", "true");
		form.append("division_id", division);
		form.append("category_id", department);
		var settings = {
			url:
				"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
			method: "POST",
			timeout: 0,
			processData: false,
			mimeType: "multipart/form-data",
			contentType: false,
			data: form,
		};

		$.ajax(settings).done(function (response) {
			var projects = {
				objects: JSON.parse(response),
			};
			console.log(response);
			console.log(projects);
			var template = $("#projectsTemplate").html();
			// Compile the template data into a function
			var templateScript = Handlebars.compile(template);
			var html = templateScript(projects);
			// console.log(html);
			// Insert the HTML code into the page
			$("#table").append(html);
			$(".btnEdit").on("click", function () {
				$("#modalEdit").modal("show");
			});
			$(".btnDelete").on("click", function () {
				var id = $(this).parent().parent().attr("id");
				console.log(id);
				swal({
					title: "Are you sure?",
					text:
						"Once deleted, you will not be able to recover this project!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				}).then((willDelete) => {
					if (willDelete) {
						var form = new FormData();
						form.append("delete_project", "true");
						console.log(id);
						form.append("id", id);

						var settings = {
							url:
								"https://internship.aicte-india.org/internshipinindianrailways/src/php/main.php",
							method: "POST",
							timeout: 0,
							processData: false,
							mimeType: "multipart/form-data",
							contentType: false,
							data: form,
						};

						$.ajax(settings).done(function (response) {
							console.log(response);
							if (response == "success") {
								swal("Project has been deleted!", {
									icon: "success",
								});
								$("#" + id).remove();
							}
						});
					}
				});
			});
		});
	}
	if (type == "division") {
		var form = new FormData();
		form.append("project_category", "true");
		form.append("division_name", division);
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
			$("#selectCategory").append(html);
			$("#selectCategory").on("change", function () {
				department = $(this).val();
				Project = "";
				$("#tblProjects").find("tr").remove();
				// console.log(Category);
				// showProjects();
				var form = new FormData();
				form.append("zone_id", zone);
				form.append("project", "true");
				form.append("division_id", division);
				form.append("category_id", department);

				var settings = {
					url:
						"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
					method: "POST",
					timeout: 0,
					processData: false,
					mimeType: "multipart/form-data",
					contentType: false,
					data: form,
				};

				$.ajax(settings).done(function (response) {
					var projects = {
						objects: JSON.parse(response),
					};
					//console.log(projects);
					var template = $("#projectsTemplate").html();
					// Compile the template data into a function
					var templateScript = Handlebars.compile(template);
					var html = templateScript(projects);
					// console.log(html);
					// Insert the HTML code into the page
					$("#table").append(html);
					$(".btnEdit").on("click", function () {
						$("#modalEdit").modal("show");
					});
					$(".btnDelete").on("click", function () {
						var id = $(this).parent().parent().attr("id");
						console.log(id);
						swal({
							title: "Are you sure?",
							text:
								"Once deleted, you will not be able to recover this project!",
							icon: "warning",
							buttons: true,
							dangerMode: true,
						}).then((willDelete) => {
							if (willDelete) {
								var form = new FormData();
								form.append("delete_project", "true");
								console.log(id);
								form.append("id", id);

								var settings = {
									url:
										"https://internship.aicte-india.org/internshipinindianrailways/src/php/main.php",
									method: "POST",
									timeout: 0,
									processData: false,
									mimeType: "multipart/form-data",
									contentType: false,
									data: form,
								};

								$.ajax(settings).done(function (response) {
									console.log(response);
									if (response == "success") {
										swal("Project has been deleted!", {
											icon: "success",
										});
										$("#" + id).remove();
									}
								});
							}
						});
					});
				});
			});
		});
	}
	if (type == "Zone") {
		$("#selectDivision").find("option").remove();
		$("#selectDivision").append(
			'<option value="" disabled selected>Select Division or Workshop</option>'
		);
		$("#selectCategory").find("option").remove();
		$("#selectCategory").append(
			'<option value="" disabled selected>Select Department</option>'
		);
		var form = new FormData();
		form.append("new_zone", true);
		form.append("zone_id", zone);

		var settings = {
			url:
				"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
			method: "POST",
			timeout: 0,
			processData: false,
			mimeType: "multipart/form-data",
			contentType: false,
			data: form,
		};

		$.ajax(settings).done(function (response) {
			var divisionsAndWorkshops = JSON.parse(response);
			// console.log(divisionsAndWorkshops);
			var template = $("#divisionTemplate").html();
			// Compile the template data into a function
			var templateScript = Handlebars.compile(template);
			var html = templateScript(divisionsAndWorkshops);
			// console.log(html);
			$("#selectDivision").append(html);
			$("#selectDivision").on("change", function () {
				division = $(this).val();
				category = "";
				Project = "";
				var type =
					$(this).find(":selected").attr("class") === "divisionOption"
						? "division"
						: "workshop";
				// console.log($(this).find(":selected").attr("class"));
				// console.log(type);
				$("#selectCategory").find("option").remove();
				var form = new FormData();
				form.append("project_category", "true");
				form.append("division_name", division);
				form.append("type", type);

				var settings = {
					url:
						"https://internship.aicte-india.org/internshipinindianrailways/api_request.php",
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
					$("#selectCategory").append(html);
					$("#selectCategory").on("change", function () {
						department = $(this).val();
						Project = "";
						$("#tblProjects").find("tr").remove();
						// console.log(Category);
						// showProjects();
						var form = new FormData();
						/*form.append("zone_id", zone);
						form.append("project", "true");
						form.append("division_id", division);
						form.append("category_id", department); */
						form.append("zone_id", 'CR');
						form.append("project", "true");
						form.append("division_id", 'Mumbai');
						form.append("category_id", '3');

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
							var projects = {
								objects: JSON.parse(response),
							};
							//console.log(projects);
							var template = $("#projectsTemplate").html();
							// Compile the template data into a function
							var templateScript = Handlebars.compile(template);
							var html = templateScript(projects);
							// console.log(html);
							// Insert the HTML code into the page
							$("#table").append(html);
							$(".btnEdit").on("click", function () {
								$("#modalEdit").modal("show");
							});
							$(".btnDelete").on("click", function () {
								var id = $(this).parent().parent().attr("id");
								console.log(id);
								swal({
									title: "Are you sure?",
									text:
										"Once deleted, you will not be able to recover this project!",
									icon: "warning",
									buttons: true,
									dangerMode: true,
								}).then((willDelete) => {
									if (willDelete) {
										var form = new FormData();
										form.append("delete_project", "true");
										console.log(id);
										form.append("id", id);

										var settings = {
											url:"./src/php/main.php",
											method: "POST",
											timeout: 0,
											processData: false,
											mimeType: "multipart/form-data",
											contentType: false,
											data: form,
										};

										$.ajax(settings).done(function (
											response
										) {
											console.log(response);
											if (response == "success") {
												swal(
													"Project has been deleted!",
													{
														icon: "success",
													}
												);
												$("#" + id).remove();
											}
										});
									}
								});
							});
						});
					});
				});
			});
		});
	}

	$("#btnNewModal").on("click", function () {
		console.log(zone);
		console.log(division);
		console.log(department);
		if (zone != "" && division != "" && department != "") {
			$("#modalNew").modal("show");
		} else {
			alert("Please select Zone, Division and Department");
		}
	});
	$("#btnAdd").on("click", function () {
		var nature = $("#chkNature").prop("checked") ? "Online" : "Offline";
		var name = $("#txtNewProject").val().trim();
		var description = $("#txtNewDescription").val().trim();
		console.log(nature, name, description);
		var form = new FormData();
		form.append("zone_id", zone);
		form.append("division_id", division);
		form.append("category_id", department);
		form.append("project_nature", nature);
		form.append("project_name", name);
		form.append("project_description", description);
		form.append("add_project", "true");
		for (var pair of form.entries()) {
			console.log(pair[0] + " - " + pair[1]);
		}
		var settings = {
			url:"./src/php/main.php",
			method: "POST",
			timeout: 0,
			processData: false,
			mimeType: "multipart/form-data",
			contentType: false,
			data: form,
		};

		$.ajax(settings).done(function (response) {
			console.log(response);
			if (response == "success") {
				swal("Project has been added!", {
					icon: "success",
				});
				$("#modalNew").modal("hide");
			}
		});
	});
});
