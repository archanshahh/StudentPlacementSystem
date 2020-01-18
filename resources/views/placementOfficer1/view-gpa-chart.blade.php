@extends('master')
@section('content')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var analytics = <?php echo $student; ?>

        google.charts.load('current', {'packages':['corechart']});

    google.charts.setOnLoadCallback(drawChart);

    function drawChart()
    {
        var data = google.visualization.arrayToDataTable(analytics);
        var options = {
            title : 'Percentage of Total Students by Course'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('column_chart'));
        chart.draw(data, options);
    }
</script>
<main><br><br><br><br>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">GPA per Student</h3>
            </div>
            <div class="panel-body" align="center">
                <div id="column_chart" style="width:750px; height:450px;">

                </div>
            </div>
        </div>

    </div>

</main>
@endsection
