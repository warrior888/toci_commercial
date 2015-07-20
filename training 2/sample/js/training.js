
var globalVariable = 6;


function Uruchom() {

    //console.log('etykieta', globalVariable);

    if (2 == 3) {
        //var globalVariable = 7;
    }

    //console.log('etykieta', globalVariable);

    globalVariable = 8;
}

Uruchom();

//console.log('etykieta', globalVariable);

function RzucaWyjatek() {
    notexist;
}


function Wyjatki() {
    try {
        //return;
        //RzucaWyjatek();

        throw new Uruchom();

    } catch (e) {
        // ReferenceError
        //e = 5;

        console.log('typeof', typeof(e), e);

        if (e instanceof Uruchom) {
            console.log('inst', e);
        }

        if (e instanceof TypeError) {

        }
    } finally {
        console.log('zawsze');
    }
}

Wyjatki();

