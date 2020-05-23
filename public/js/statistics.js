// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.




var jobs = document.getElementById("key").value;

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
for(var i = 1; i <= jobs; i++ )
{
    var split = document.getElementById('split'+i).value;
    console.log(split);
    console.log("jobs "+jobs);
    // for(var j = 1;j <= split; j++)
    // {
    // 	var str = 'completeness' + j;
    // 	var str = document.getElementById('job'+i+'split'+j);
    // }


        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');


        for(var j = 1;j <= split; j++)
        {
            console.log(i,j);
            var str = document.getElementById('job'+i+'split'+j).value;
            str = Math.floor(str);
            console.log(str);

            data.addRow(['Team'+j,str]);
        }

        var incomp = document.getElementById('incomplete'+i).value;
        incomp = Math.floor(incomp);

        data.addRow(['Incomplete',incomp]);




        // Set chart options
        var options = {'title':'Task Completed',

            'chartArea.left':0
        };

        // Instantiate and draw our chart, passing in some options.

        var chart = new google.visualization.PieChart(document.getElementById('pieChart'+i));
        chart.draw(data, options);
    }

}


