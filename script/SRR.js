$(document).ready(function(){

	$('#submit_data').click(function(){

		var room = $('option[name=Room]:click').val();

		$.ajax({
			url:"StatisticRoom.php",
			method:"POST",
			data:{action:'insert', room:room},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#submit_data').attr('disabled', false);
				$('#room').prop('checked', 'checked');
				$('#room').prop('checked', false);





				makechart();
			}
		})

	});
	makechart();
	function makechart()
	{
		$.ajax({
			url:"StatisticRoom.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			error: function(e) {
			},
			success:function(data)
			{
				var room = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					room.push(data[count].room);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:room,
					datasets:[
						{
							label:'vote',
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

				//var group_chart1 = $('#pie_chart');

				//var graph1 = new Chart(group_chart1, {
				//	type:"pie",
				//	data:chart_data
				//});

				var group_chart1 = $('#Room');

				var graph1 = new Chart(group_chart1, {
					type:"doughnut",
					data:chart_data
				});

				//var group_chart3 = $('#barangay');

				//var graph3 = new Chart(group_chart3, {
				//	type:"bar",
				//	data:chart_data,
				//	options:options
				//});
			}
		})
	}

});