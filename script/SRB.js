$(document).ready(function(){

	$('#submit_data').click(function(){

		var barangay = $('option[name=barangay]:click').val();

		$.ajax({
			url:"StatisticBarangay.php",
			method:"POST",
			data:{action:'insert', barangay:barangay},
			beforeSend:function()
			{
				$('#submit_data').attr('disabled', 'disabled');
			},
			success:function(data)
			{
				$('#submit_data').attr('disabled', false);
				$('#barangay').prop('checked', 'checked');
				$('#barangay').prop('checked', false);




				makechart();
			}
		})

	});
	makechart();
	function makechart()
	{
		$.ajax({
			url:"StatisticBarangay.php",
			method:"POST",
			data:{action:'fetch'},
			dataType:"JSON",
			error: function(e) {
			},
			success:function(data)
			{
				var barangay = [];
				var total = [];
				var color = [];

				for(var count = 0; count < data.length; count++)
				{
					barangay.push(data[count].barangay);
					total.push(data[count].total);
					color.push(data[count].color);
				}

				var chart_data = {
					labels:barangay,
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

				var group_chart1 = $('#barangay');

				var graph2 = new Chart(group_chart1, {
					type:"pie",
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