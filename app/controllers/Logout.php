<?php 

    class Logout extends Controller {

        public function index() {
            
            clearstatcache();
		    session_destroy();
            header("location:".BASE_URL."/login");
        }
    }
?>