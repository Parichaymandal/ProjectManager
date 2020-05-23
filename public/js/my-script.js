// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.

if (document.getElementById('pieChart1') !== null) {
	google.charts.setOnLoadCallback(drawChart1);
	google.charts.setOnLoadCallback(drawChart2);
	google.charts.setOnLoadCallback(drawChart3);
}

else {
	google.charts.setOnLoadCallback(drawTeam1);
	google.charts.setOnLoadCallback(drawTeam2);
	google.charts.setOnLoadCallback(drawTeam3);
	google.charts.setOnLoadCallback(drawTeam4);
	google.charts.setOnLoadCallback(drawTeam5);
}




var jobs = document.getElementById("key").valueOf();
console.log(jobs);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.

for(var i = 1; i <= jobs; i++ )
{
	var split = document.getElementById('split'+i).valueOf();
	// for(var j = 1;j <= split; j++)
	// {
	// 	var str = 'completeness' + j;
	// 	var str = document.getElementById('job'+i+'split'+j);
	// }
	function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Topping');
		data.addColumn('number', 'Slices');


			for(var j = 1;j <= split; j++)
			{
				var str = document.getElementById('job'+i+'split'+j).valueOf();

				data.addRow('Team'+j,str);
			}




		// Set chart options
		var options = {'title':'Task Completed',
			'width':300,
			'height':200,
			'chartArea.left':0
		};

		// Instantiate and draw our chart, passing in some options.

		var chart = new google.visualization.PieChart(document.getElementById('pieChart'+i));
		chart.draw(data, options);
	}

}



function drawChart2() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Team 1', 3],
		['Team 2', 1],
		['Team 3', 2],
		['Team 4', 1],
		['Incomplete', 2]
	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('pieChart2'));
	chart.draw(data, options);
}

function drawChart3() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Team 1', 3],
		['Team 2', 1],
		['Team 3', 2],
		['Team 4', 4],
		['Incomplete', 2]
	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('pieChart3'));
	chart.draw(data, options);
}

function drawTeam1() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Completed', 3],
		['Incompleted', 2],

	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('teamChart1'));
	chart.draw(data, options);
}

function drawTeam2() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Colmpleted', 3],
		['InComplete', 4],

	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('teamChart2'));
	chart.draw(data, options);
}

function drawTeam3() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Completed', 3],
		['Incomplete', 7],

	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('teamChart3'));
	chart.draw(data, options);
}

function drawTeam4() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Completed', 5],
		['Inmplete', 1],

	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('teamChart4'));
	chart.draw(data, options);
}

function drawTeam5() {

	// Create the data table.
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Topping');
	data.addColumn('number', 'Slices');
	data.addRows([
		['Completed', 2],
		['Incompleted', 1],

	]);

	// Set chart options
	var options = {'title':'Task Completed',
		'width':300,
		'height':200,
		'chartArea.left':0
	};

	// Instantiate and draw our chart, passing in some options.
	var chart = new google.visualization.PieChart(document.getElementById('teamChart5'));
	chart.draw(data, options);
}