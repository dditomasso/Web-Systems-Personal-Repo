document.getElementById("button1").onclick = function() {getAUD()};
document.getElementById("button2").onclick = function() {getSEK()};
document.getElementById("button3").onclick = function() {getUSD()};
document.getElementById("button4").onclick = function() {getRUB()};
document.getElementById("button5").onclick = function() {getTHB()};

function getAUD(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            docuement.getElementById("AUD");
            this.responseText;
        }
    };
    xhttp.open("GET", 'latest.json', true);
    xhttp.send();
}

function getSEK(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            docuement.getElementById("SEK");
            this.responseText;
        }
    };
    xhttp.open("GET", 'latest.json', true);
    xhttp.send();
}

function getUSD(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            docuement.getElementById("USD");
            this.responseText;
        }
    };
    xhttp.open("GET", 'latest.json', true);
    xhttp.send();
}

function getRUB(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            docuement.getElementById("RUB");
            this.responseText;
        }
    };
    xhttp.open("GET", 'latest.json', true);
    xhttp.send();
}

function getTHB(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            docuement.getElementById("THB");
            this.responseText;
        }
    };
    xhttp.open("GET", 'latest.json', true);
    xhttp.send();
}