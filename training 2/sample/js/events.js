

function MyszNadElementem(obj) {

    obj.value = 'text cokolwiek';

    console.log('MyszNadElementem', this);
}

function ZarejestrujEventy() {

    document.getElementById('nowy').addEventListener('keypress', function (cok) { console.log(cok, 'klikam w klawiature', this); });
    document.getElementById('nowy').addEventListener('mouseover', function (ev) { this.value = 'mouse over';  console.log(ev, 'listener nowy mouse oveer keyCode', this); });
    document.getElementById('nowy').addEventListener('mouseover', function (ev) { this.value = 'mouse over 2';  console.log(ev, 'kolejny mouse over keyCode', this); });
    document.getElementById('nowy').addEventListener('focus', function () { this.value = 'teraz focus'; console.log('listener nowy', this); });
    document.getElementById('nowy').addEventListener('blur', function () { this.value = 'teraz blur';
        alert('blur z add event');
    });
    document.getElementById('nowy').addEventListener('click', function () { this.value = 'teraz click'; console.log('listener nowy', this); });


    TakSieNieRobi();
}

document.addEventListener('DOMContentLoaded', ZarejestrujEventy);


function WyczyscPole(obj) {
    obj.value = '';

    obj.setAttribute('class', '');
}


function TakSieNieRobi() {

    //document.getElementById('nowy').onblur = function () { this.value = 'blur tak sie nie robi'; };

    //setTimeout
}


var EventManager = function() {

    var eventsStack = {};

    var registerEvent = function(eventName, eventCallback) {

        if (eventsStack[eventName] == undefined) {
            eventsStack[eventName] = new Array();
        }

        eventsStack[eventName].push(eventCallback);
    };

    var runEvent = function(eventName) {

        if (eventsStack[eventName] == undefined) {
            return;
        }

        for (var i = 0; i < eventsStack[eventName].length; i++) {
            eventsStack[eventName][i]();
        }
    };

    return {
        RegisterEvent: registerEvent,
        RunEvent: runEvent
    };
};

var manager = new EventManager();

//manager.Ru
