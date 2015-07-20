function RoutingNumber(number)
{
    const startPosition = 2;
    const numberLength =4;
    return number.substring(startPosition,numberLength);
}
function NumberIsValid(number)
{
    var check = false;
    if(number.length==26)check=true;
    return chcek;
}
function ChcekNumber(number)
{
    if(NumberIsValid(number)==true)
    {
        return RoutingNumber(number)
    }
    else
    {
    alert("Invalid number");
    }
}