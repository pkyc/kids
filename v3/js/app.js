$(document).ready(function(){
	$.ajax({
		url: "/chartjs/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var password = [];
			var count = [];

			for(var i in data) {
				password.push(data[i].password);
				count.push(data[i].count);
			}

			var chartdata = {
				labels: password,
				datasets : [
					{
						label: 'password',
						backgroundColor: 'rgba(255, 167, 0, 0.75)',
						borderColor: 'rgba(255,167, 0, 0.75)',
						hoverBackgroundColor: 'rgba(255,167,0, 1)',
						hoverBorderColor: 'rgba(0,135,68, 1)',
						data: count
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
