// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Asset', 'Asset in stock'],
        ['Computers', 200],
        ['Furniture', 255],
        ['Vehicles', 70],
        ['Others', 15],
        ['Damages', 24]
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'Assets Chart', 'width':450, 'height':450};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}