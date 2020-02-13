<?PHP

$wisselgeld = (int)$argv[1];

if ($wisselgeld >= 1){
    echo $wisselgeld. " x €1 munten";
}
else if ($wisselgeld == 0){
    echo "Geen wisselgeld";
}

?>