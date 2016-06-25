<?php

class IsUserLogged {

    function isCurrentLoggedUser() {
        if (isset($_SESSION['UserID']) && $_SESSION['LOGIN_STATUS']) {
            echo 'success';
        } else {
            echo 'error';
        }
    }

}

?>
