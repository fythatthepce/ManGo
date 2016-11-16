<?php

    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        if($_POST['username'] == 'guest' && $_POST['password'] == 'guest')
        {
            echo '
              <h1>Hello Guest,</h1>

             ';
            return;
        }
        else
        {
            echo 'Login Error!!!!';
            return;
        }
    }
    else
    {
          echo 'Login Error!!!!';
        return;
    }
?>
