<?php

require 'vendor/autoload.php';

$roman = new \Acme\RomanNumeralConverter();

?>


    <form action="" method="post">

        <label for="number">Regular Number</label>
        <input type="text" name="number" id="number">

    </form>


<?php

if ( ! empty($_POST)):

    echo 'Roman number: ' . $roman->convert($_POST['number']);

endif;

?>