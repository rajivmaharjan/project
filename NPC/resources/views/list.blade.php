<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="2"; URL=http://127.0.0.1:8000/list">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css\npc_dashboard.css" />
    <title>Chart</title>
</head>
<body onload="addvalueToarraY();">     

<div id="value1" value = {{$value_today}}>
            @php   
            echo $value_today;

            @endphp
    </div>

    <div id="value2" value = {{$value_day}}>
            @php   
            echo $value_day;
            @endphp
    </div>
    <div id="value3" value = {{$value_month}}>
            @php   
            echo $value_month;
            @endphp
         </div>

         <main class="main-container">
      <div class="main-cards">
        <div class="card">
          <div class="card-inner">
            <h1>Bagmati Province</h1>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <h1>Kathmandu</h1>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <h1>Balkhu Petrol Pump</h1>
          </div>
        </div>
      </div>
      <div class="charts">
        <div class="charts-card">
          <h2 class="chart-title">Today-Sales</h2>
          <h1 class="chart-title-value">1500L</h1>
          <div id="area-chart"></div>
        </div>

        <div class="charts-card">
          <h2 class="chart-title">Weekly-Sales</h2>
          <h1 class="chart-title-value">9520L</h1>
          <div id="area-chart2"></div>
        </div>
        <div class="charts-card">
          <h2 class="chart-title">Monthly-Sales</h2>
          <h1 class="chart-title-value">30000L</h1>
          <div id="area-chart3"></div>
        </div>
      </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.js"></script>
    <script src="js\java.js"></script>
</body>
</html>