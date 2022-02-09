<?php

    echo "Hello world :)";

    $dict = array('Hello', 'world', 'François', 'temporarry');  
    var_dump ($dict);

    $i = 0;
    foreach ($dict as $word) {
        if ( $i%2 == 0 ) {
            echo '<br>'.$word;
        }
        $i += 1;
    }

    //“\$temp\$ here comes the name \$name\$“, dict [“temp”, “temporary”] [“name”, “John Doe”], output : “temporary here comes the name John Doe”
    $dict = array(['temp', 'temporary'], ['name', 'John Doe']);
    var_dump ($dict);

    foreach ($dict as $tab) {
        echo '<br> index : '.$tab[0].' , value : '.$tab[1];
    }

    echo '<br><br> Longueur de la chaîne \$temp\$ : '.strlen('\$temp\$');

    echo '<br><br> array([temp, temporary])';
    $dict = array(['temp', 'temporary']);
    foreach ($dict as $tab) {
        echo '<br>'.$tab[0];
    }    

    echo '<br><br>Fonction explode';
    $input = '\$temp\$ here comes the name \$name\$';
    $explode = explode (" ", $input);
    var_dump($explode);
    foreach ($explode as $word) {
        echo '<br>'.$word;
    }

?>