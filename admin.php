<?php
    if (isset($_POST['Submit'])) {
        $username = $_POST['usernam'];
        $email = $_POST['email'];
        $password = $_POST['password']

        echo $username . $email . $password
    }