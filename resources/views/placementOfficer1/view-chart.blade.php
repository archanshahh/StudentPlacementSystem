@extends('master')
@section('content')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var analytics = <?php echo $course; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : 'Percentage of Total Students by Course'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
    <main><br><br><br><br>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Percentage of Total Students by Course</h3>
                </div>
                <div class="panel-body" align="center">
                    <div id="pie_chart" style="width:750px; height:450px;">

                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
