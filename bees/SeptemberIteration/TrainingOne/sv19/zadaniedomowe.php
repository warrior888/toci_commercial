 <?php
$sum =0;
for ($i=1; $i<=100; $i++) 
{
    if ($i % 2 === 0) 
    {
       echo"$i \n";
    }
}
for ($i = 1; $i <= 100; $i++) 
{
    if ($i % 2 === 0) 
    {
        $sum+=$i;
    }
}

echo "Suma liczb wynosi $sum \n";

for($i=1; $i<=100; $i++)
{
   if ($i > 19 && $i <31 )//&& $i % 2 === 0) 
    {   
      echo "$i \n";
    }        
}