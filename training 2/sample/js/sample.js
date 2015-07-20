
var x = 5;

//hoisting, iife - immediately invoked function expression
(function () {
    console.log(x);
    var x = 10;
    console.log(x);
})();

var a = 1;

function four() {
    //alert(a);
    if (true) {
        var a = 4;
    }

    alert(a); // alerts '4', not the global value of '1'
}

//four();

function ExceptionsScope() {
    
    var e = 5;
    console.log(e);
    try {
        throw 6;
    } catch (e) {
        console.log(e, typeof (e));
    } finally {
        console.log('I am finally');
    }
    console.log(e);
}

ExceptionsScope();


function f(a) {
    g(a + 1);
}

	 

function g(a) {
   
    var dsaf = undefined;

    dsaf.dsafad = 432;
}

///http://www.javascriptkit.com/javatutors/trycatch2.shtml
try {
    f(1);
} catch (e) {
    console.log(typeof (e), e instanceof ReferenceError);
    console.log(e.stack);
}

function Attributes() {

    var container = document.getElementById('mainContent');

    container.setAttribute('style', 'color: red;');

    console.log('id test', container.getAttribute('id'));

}

document.addEventListener('DOMContentLoaded', function() { setTimeout(Attributes, 1500); });


var Figure = function() {

    this.circuit = 0;
};

var Square = function() {
    //Figure.call(this);
    this.side = 0;
};


//Square.prototype = Figure;

//Square.prototype = Object.create(Figure);

//Square.prototype.circuit = Figure.c;


var test = new Square();

//alert(test.side);
//alert(test.circuit);

ShowObjectContent(test);
ShowObjectContent(Bank);
//var test234 = new Bank("gfds", "vgj");
//ShowObjectContent(test234);

//console.log(Bank, typeof (Bank), typeof (test234));

function ShowObjectContent(obj) {
    
    for (var item in obj) {
        console.log(item, obj[item]);
    }
}



var Person = function () {
    this.canTalk = true;
};

Person.prototype.greet = function () {
    if (this.canTalk) {
        console.log('Hi, I am ' + this.name);
    }
};

var Employee = function (name, title) {
    Person.call(this);
    this.name = name;
    this.title = title;
};

Employee.prototype = Object.create(Person.prototype);
Employee.prototype.constructor = Employee;

Employee.prototype.greet = function () {
    if (this.canTalk) {
        console.log('Hi, I am ' + this.name + ', the ' + this.title);
    }
};

var Customer = function (name) {
    Person.call(this);
    this.name = name;
};

Customer.prototype = Object.create(Person.prototype);
Customer.prototype.constructor = Customer;

var Mime = function (name) {
    Person.call(this);
    this.name = name;
    this.canTalk = false;
};

Mime.prototype = Object.create(Person.prototype);
Mime.prototype.constructor = Mime;

var bob = new Employee('Bob', 'Builder');
var joe = new Customer('Joe');
var rg = new Employee('Red Green', 'Handyman');
var mike = new Customer('Mike');
var mime = new Mime('Mime');

bob.greet();
// Hi, I am Bob, the Builder

joe.greet();
// Hi, I am Joe

rg.greet();
// Hi, I am Red Green, the Handyman

mike.greet();
// Hi, I am Mike

mime.greet();