

function UruchomZOpoznieniem(mojCustomowyKomunikat) {

    setTimeout(PokazKomunikat, 1000, mojCustomowyKomunikat);
    /*setTimeout(function() {
        PokazKomunikat('');
    }, 4000, 'to ja')};*/
}

var interval, counter = 0;

function PokazKomunikat(mojCustomowyKomunikat) {

    //alert(mojCustomowyKomunikat);

    console.log(mojCustomowyKomunikat, counter++);

    if (counter > 200) {
        // clearInterval(interval);
        return false;
    }

    return true;
}

function UruchomCyklicznie() {
    //interval = setInterval(PokazKomunikat, 500, 'z interwalu');

    UruchomWatki(40, 400, PokazKomunikat, 'ala ma kota');
}


var intervals = {};

function UruchomWatki(ileWatkow, delay, callback, param) {

    for (var i = 0; i < ileWatkow; i++) {
        intervals[i] = setInterval(multiThreadCallbackWrapper, delay, callback, param + i, i);
    }
}

function multiThreadCallbackWrapper(callback, param, index) {
    
    if (callback(param) === false) 
    {
        clearInterval(intervals[index]);
    }
}


function RunAnimation() {
    setInterval(FunWithDivAnimate, 100, 'divAnimate', 1);
    setInterval(FunWithDivAnimate, 100, 'divAnimate2', 2);
    setInterval(FunWithDivAnimate, 100, 'divAnimate3', 3);
    setInterval(FunWithDivAnimate, 100, 'divAnimate4', 4);
    setInterval(FunWithDivAnimate, 100, 'divAnimate5', 5);
    setInterval(FunWithDivAnimate, 100, 'divAnimate6', 6);
    setInterval(FunWithDivAnimate, 100, 'divAnimate7', 7);
    setInterval(FunWithDivAnimate, 100, 'divAnimate8', 8);
}

var margin = {};

function FunWithDivAnimate(elementId, id) {

    if (margin[id] === undefined) {
        margin[id] = 0;
    } else {
        margin[id]++;
    }
    

    //console.log('2 wątek', elementId);
    document.getElementById(elementId).style = 'margin: ' + margin[id] + 'px; opacity: ' + (margin[id] / 100) + '; color: rgb(' + margin[id] + ', 200, 200);';

    //return 'dzialam ' + elementId;
}


function MultiThreadUsage() {

    var multiThread = new Multithread(2);

    var threadId = multiThread.process(function () { return document.getElementById('divAnimate').style = 'margin: 50px; opacity: 0.8; color: rgb(100, 200, 200);'; }, function (result) { console.log('powrot z watku', result); })();

    console.log('thread id', threadId);
}
