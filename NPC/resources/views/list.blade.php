<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="15; URL=http://127.0.0.1:8000/list">
    <title>Document</title>
</head>
<body onload="addvalueToarraY();">
        
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

    

<script src="js\java.js"></script>
</body>
</html>