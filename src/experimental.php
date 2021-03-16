<?php

// fw = for who remplacé par customer
function order_pizza($pizzatype, $customer)
{

    $type = $pizzatype;
    echo 'Creating new order... <br>';
    $toPrint = 'A '. $pizzatype;
    $p = calcul_costs($type);

    $address = 'unknown';
    if ($customer == 'koen') {
        $address = 'a peniche in Liège';
    } elseif ($customer == 'nico') {
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .= ' pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $p . '.<br>';
    echo "Order finished.<br><br>";
}

function calcul_costs($pizza_type)
{
    $cost = 'unknown';

    if ($pizza_type == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizza_type == 'golden') {
            $cost = 100;
        } else {

            if ($pizza_type == 'calzone') {
                $cost = 10;
            } else {
                if ($pizza_type == 'hawai') {
                    throw new Exception('Computer says no');
                }
            }
        }
    }

    return $cost;
}

function order_pizza_all()
{
    order_pizza('calzone', 'nico');
    order_pizza('marguerita', 'nick');
    order_pizza('golden', 'students');
}

function make_Allhappy($do_it)
{
    if ($do_it) {
        order_pizza_all();
    }
}

make_Allhappy(true);