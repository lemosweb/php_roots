<?php
        require '../models/User.php';

        $inputVars = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $usr = new User();

        var_dump($usr->getName());
