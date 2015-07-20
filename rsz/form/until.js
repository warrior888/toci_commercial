function RoutingNumberI(number)
{
        return number.substring(2,4);
}
function CheckLength(number)
{
    var check = false;
    if(number.legth==26)check=true;
    
    return check;
}