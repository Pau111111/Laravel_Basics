window.onload = function () {
    setInterval(function () {
        var liFather = document.getElementsByClassName("li_father");

        updateTime(liFather);
        updateParameter(liFather);
    }, 5000);
};

function updateTime(liFather) {
    for (i = 0; i < liFather.length; i++) {
        var liElement = liFather[i].querySelector(".date");
        var dataSet = liElement.dataset["date"];
        // console.log("DATASET: " + dataSet);

        var date = new Date(dataSet + " UTC");
        // console.log("DATE: " + date);

        liElement.innerHTML = diffForHumans(date);
    }
}

function updateParameter(liFather) {
    fetch('http://127.0.0.1:8000/api/messages')
        .then(function (response) {
            return response.json();
        })
        .then(function (response) {
            for (i = 0; i < liFather.length; i++) {
                liFather[i].querySelector(".title").innerHTML = response[i].title;
            }
        });
}
