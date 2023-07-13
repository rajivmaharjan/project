<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta http-equiv="refresh" content="15; URL=http://127.0.0.1:8000/npc_dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css\npc_dashboard.css" />
    <title>NPC Dashboard</title>
  </head>

  <body onload="addvalueToarraY();" >
    <header>
      <div class="menu">
        <i class="fa-sharp fa-solid fa-bars togg"></i>
        <img src="Img\Logo-white.PNG" alt="Logo of company" id="logoimage" />

        <div class="navbar navbar-list">
          <ul>
            <li>
              <i
                class="fa-solid fa-house fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_dashboard" class="li-pos">Dashboard</a>
            </li>
            <li>
              <i
                class="fa-solid fa-pen-to-square fa-position"
                style="color: #54545f"
              ></i
              ><a href="preparation" class="li-pos">Preparation</a>
            </li>
            <li>
              <i
                class="fa-solid fa-van-shuttle fa-position"
                style="color: #54545f"
              ></i
              ><a href="distributed" class="li-pos">Distribured</a>
            </li>
            <li>
              <i
                class="fa-solid fa-list-check fa-position"
                style="color: #54545f"
              ></i
              ><a href="validate" class="li-pos">Validate</a>
            </li>

            <hr id="hrline" />
            <li>
              <i class="fa-solid fa-user fa-position" style="color: #54545f"></i
              ><a href="profile" class="li-pos">Profile</a>
            </li>
            <li>
              <i
                class="fa-solid fa-envelope fa-position"
                style="color: #54545f"
              ></i
              ><a href="notification" class="li-pos">Notification</a>
            </li>
            <li>
              <i class="fa-solid fa-gear fa-position" style="color: #54545f"></i
              ><a href="setting" class="li-pos">Setting</a>
            </li>

            <li>
              <i
                class="fa-solid fa-arrow-right-from-bracket fa-position"
                style="color: #54545f"
              ></i
              ><a href="logout" class="li-pos">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <main class="main-container">
      <div class="main-cards">
        <div class="card">
          <div class="card-inner">
            <h3>Region</h3>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <h3>District</h3>
          </div>
        </div>

        <div class="card">
          <div class="card-inner">
            <h3>Petrol Pump</h3>
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
        <div id="value1" value = {{$value_today}}>
            @php   
            echo $value_today;

            @endphp
    </div>

    <div id="value2" value = {{$value_weeks}}>
            @php   
            echo $value_weeks;
            @endphp
    </div>
    <div id="value3" value = {{$value_months}}>
            @php   
            echo $value_months;
            @endphp
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.js"></script>
    <script src="js\npc_dashboard.js"></script>
  </body>
</html>
