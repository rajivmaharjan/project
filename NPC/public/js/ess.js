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