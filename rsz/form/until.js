function RoutingNumberI(number)
{
    if(number.length == 26)
    {
        return number.substring(2,4);
    }
    return "";
    
}