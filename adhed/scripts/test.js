/**
 * Created by Adam on 2015-07-16.
 */

function Bike(wheelSize, frameSize, model) {
    this.wheelSize = wheelSize;
    this.frameSize = frameSize;
    this.model = model;
}

var romet = new Bike(26,16,"Romet Tool");
var kross = new Bike(29,17,"Kross B10+");

var bikes = [];

bikes.push(romet);
bikes.push(kross);

console.log(bikes.length);

for(var i = 0; i < bikes.length; i++) {
    document.write(i+1 + "# Bike: " + bikes[i].model + " | frame size: " + bikes[i].frameSize + " | wheel size: " + bikes[i].wheelSize + "<br />");
}

