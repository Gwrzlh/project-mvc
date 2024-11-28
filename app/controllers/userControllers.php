<?php
require_once 'app/model/user.php';

class userController {
    public function showUser () {
        $user = new User();
        $data = $user->getUserData();
        include 'app/view/user.php';
    }
}
?>