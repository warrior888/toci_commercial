<?php
    function random_id()
    {
        return '1010'.rand(1, 9).'0'.rand(100000000, 999999999);
    }

    function show_users($users)
    {
        $array_lenght = sizeof($users);
        for($i = 0; $i < $array_lenght; $i++)
        {
            echo 'Numer konta: '.$users[$i][0].' posiada '.$users[$i][1].'$ i nalezy do '.banks_name($users[$i][0])."\n";
        }
    }

    function banks_name($id)
    {
        $names = array(
            '1010' => 'Bank 1',
            '1020' => 'Bank 2',
            '1030' => 'Bank 3',
            '1040' => 'Bank 4',
            '1050' => 'Bank 5',
            '1060' => 'Bank 6',
            '1070' => 'Bank 7',
            '1080' => 'Bank 8',
        );
        $key = substr($id, 2, 4);
        if(isset($names[$key]))
        {
            return $names[$key];
        }
        return 'Nieznany bank';
    }

    $users = array(
        //      nr konta            , kwota
        array(random_id(), rand(1, 500)),
        array(random_id(), rand(1, 500)),
        array(random_id(), rand(1, 500)),
        array(random_id(), rand(1, 500)),
        array(random_id(), rand(1, 500)),
        array(random_id(), rand(1, 500)),
        array(random_id(), rand(1, 500)),
    );

    show_users($users);
    
/*
    function ZrobPrzelew($listaPrzelewow) // $listaPrzelewow parametr
    {
        $nazwyBankow = array(
            '1020' => 'Banka 1',
            '1030' => 'Banka 2',
            '1040' => 'Banka 3',
            '1050' => 'Banka 4',
        );
        for($i = 0; $i < count($listaPrzelewow); $i++)
        {
            //echo $listaPrzelewow[$i]."\n";
            $id = WytnijIdentyfikator($listaPrzelewow[$i]);
            if(isset($nazwyBankow[$id]))
            {
                echo $nazwyBankow[$id]."\n";
            }
            else
            {
                echo "Nieznany bank\n";
            }
            
        }
    }

    function WytnijIdentyfikator($nrkonta)
    {
        return substr($nrkonta, 2, 4);
    }

    ZrobPrzelew(
        array(
            '10102023425365435345',
            '10103023425365435345',
            '10102023425365435345',
            '10104023425365435345',
            '10105023425365435345',
            '10105023425365435345',
            '10106023425365435345',
            '10107023425365435345',
            '10108023425365435345',
            '10106023425365435345',
            '10109023425365435345',
        )
    );*/