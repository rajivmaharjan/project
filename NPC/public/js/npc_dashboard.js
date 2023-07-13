const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
/*for admin */
let toggle_bar = document.querySelector(".togg");
let sidebar = document.querySelector(".navbar");
if (localStorage.getItem("data_1" && "data_2" && "data_3") == null) {
    var datavalues1 = [];
    var datavalues2 = [];
    var datavalues3 = [];
} else {
    datavalues1 = JSON.parse(localStorage.getItem("data_1"));
    datavalues2 = JSON.parse(localStorage.getItem("data_2"));
    datavalues3 = JSON.parse(localStorage.getItem("data_3"));
}

function addvalueToarraY() {
    datavalues1.push(
        parseInt(document.getElementById("value1").getAttribute("value"))
    );
    datavalues2.push(
        parseInt(document.getElementById("value2").getAttribute("value"))
    );
    datavalues3.push(
        parseInt(document.getElementById("value3").getAttribute("value"))
    );
    localStorage.setItem("data_1", JSON.stringify(datavalues1));
    localStorage.setItem("data_2", JSON.stringify(datavalues2));
    localStorage.setItem("data_3", JSON.stringify(datavalues3));
    if (datavalues1.length > 7) {
        window.localStorage.clear();
    }
}

console.log(datavalues1);
console.log(datavalues2);
console.log(datavalues3);

toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    });
});

toggle_bar.addEventListener("click", function () {
    sidebar.classList.toggle("navbaractive");
});

var areaChartOptions1 = {
    series: [
        {
            data: datavalues1,
        },
    ],
    chart: {
        type: "area",
        background: "transparent",
        height: 350,
        stacked: false,
        toolbar: {
            show: false,
        },
    },
    colors: ["#00ab57"],
    labels: [
        "00:00 - 3:00",
        "3:00 - 6:00",
        "6:00 - 9:00",
        "9:00 - 12:00",
        "12:00 - 15:00",
        "15:00 - 20:00",
        "20:00 - 23:59",
    ],
    dataLabels: {
        enabled: false,
    },
    fill: {
        gradient: {
            opacityFrom: 0.4,
            opacityTo: 0.1,
            shadeIntensity: 1,
            stops: [0, 100],
            type: "vertical",
        },
        type: "gradient",
    },
    grid: {
        borderColor: "#55596e",
        yaxis: {
            lines: {
                show: true,
            },
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
    legend: {
        labels: {
            colors: "#f5f7ff",
        },
        show: true,
        position: "top",
    },
    markers: {
        size: 6,
        strokeColors: "#1b2635",
        strokeWidth: 3,
    },
    stroke: {
        curve: "smooth",
    },
    xaxis: {
        axisBorder: {
            color: "#55596e",
            show: true,
        },
        axisTicks: {
            color: "#55596e",
            show: true,
        },
        labels: {
            offsetY: 5,
            style: {
                colors: "#f5f7ff",
            },
        },
    },
    yaxis: [
        {
            labels: {
                style: {
                    colors: ["#f5f7ff"],
                },
            },
        },
    ],
    tooltip: {
        shared: true,
        intersect: false,
        theme: "dark",
    },
};
var areaChartOptions2 = {
    series: [
        {
            data: datavalues2,
        },
    ],
    chart: {
        type: "area",
        background: "transparent",
        height: 350,
        stacked: false,
        toolbar: {
            show: false,
        },
    },
    colors: ["#00ab57"],
    labels: ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"],
    dataLabels: {
        enabled: false,
    },
    fill: {
        gradient: {
            opacityFrom: 0.4,
            opacityTo: 0.1,
            shadeIntensity: 1,
            stops: [0, 100],
            type: "vertical",
        },
        type: "gradient",
    },
    grid: {
        borderColor: "#55596e",
        yaxis: {
            lines: {
                show: true,
            },
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
    legend: {
        labels: {
            colors: "#f5f7ff",
        },
        show: true,
        position: "top",
    },
    markers: {
        size: 6,
        strokeColors: "#1b2635",
        strokeWidth: 3,
    },
    stroke: {
        curve: "smooth",
    },
    xaxis: {
        axisBorder: {
            color: "#55596e",
            show: true,
        },
        axisTicks: {
            color: "#55596e",
            show: true,
        },
        labels: {
            offsetY: 5,
            style: {
                colors: "#f5f7ff",
            },
        },
    },
    yaxis: [
        {
            labels: {
                style: {
                    colors: ["#f5f7ff"],
                },
            },
        },
    ],
    tooltip: {
        shared: true,
        intersect: false,
        theme: "dark",
    },
};
var areaChartOptions3 = {
    series: [
        {
            data: datavalues3,
        },
    ],
    chart: {
        type: "area",
        background: "transparent",
        height: 350,
        stacked: false,
        toolbar: {
            show: false,
        },
    },
    colors: ["#00ab57"],
    labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ],
    dataLabels: {
        enabled: false,
    },
    fill: {
        gradient: {
            opacityFrom: 0.4,
            opacityTo: 0.1,
            shadeIntensity: 1,
            stops: [0, 100],
            type: "vertical",
        },
        type: "gradient",
    },
    grid: {
        borderColor: "#55596e",
        yaxis: {
            lines: {
                show: true,
            },
        },
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
    legend: {
        labels: {
            colors: "#f5f7ff",
        },
        show: true,
        position: "top",
    },
    markers: {
        size: 6,
        strokeColors: "#1b2635",
        strokeWidth: 3,
    },
    stroke: {
        curve: "smooth",
    },
    xaxis: {
        axisBorder: {
            color: "#55596e",
            show: true,
        },
        axisTicks: {
            color: "#55596e",
            show: true,
        },
        labels: {
            offsetY: 5,
            style: {
                colors: "#f5f7ff",
            },
        },
    },
    yaxis: [
        {
            labels: {
                style: {
                    colors: ["#f5f7ff"],
                },
            },
        },
    ],
    tooltip: {
        shared: true,
        intersect: false,
        theme: "dark",
    },
};

var areaChart = new ApexCharts(
    document.querySelector("#area-chart"),
    areaChartOptions1
);
areaChart.render();

var areaChart = new ApexCharts(
    document.querySelector("#area-chart2"),
    areaChartOptions2
);
areaChart.render();

var areaChart = new ApexCharts(
    document.querySelector("#area-chart3"),
    areaChartOptions3
);
areaChart.render();
