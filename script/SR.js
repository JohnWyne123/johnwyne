
$(document).ready(function(){

	$('#submit_data').click(function(){

		var status = $('option[name=Status]:click').val();

		$.ajax({
			url:"Statistic.php",
			method:"POST",
			data:{action:'insert', status:status},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#submit_data').attr('disabled', false);

				$('#Status1').prop('checked', 'checked');

				$('#Status2').prop('checked', false);

				$('#Status3').prop('checked', false);

				$('#Status4').prop('checked', false);


				makechart();
			}
		})

	});
	makechart();

	function makechart()
	{
		$.ajax({
			url:"Statistic.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			error: function(e) {
			},
			success:function(data)
			{
				var status = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					status.push(data[count].status);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:status,
					datasets:[
						{
							backgroundColor:color,
							data:total
						}
					]
				};

				var options = {
					responsive:true,
					scales:{
						yAxes:[{
							ticks:{
								min:0
							}
						}]
					}
				};

				var group_chart1 = $('#pie_chart');

				var graph1 = new Chart(group_chart1, {
					type:"pie",
					data:chart_data
				});

				//var group_chart2 = $('#doughnut_chart');

				//var graph2 = new Chart(group_chart2, {
				//	type:"doughnut",
				//	data:chart_data
				//});

				//var group_chart3 = $('#bar_chart');

				//var graph3 = new Chart(group_chart3, {
				//	type:"bar",
				//	data:chart_data,
				//	options:options
				//});
			}
		})
	}

});
