<?php
    function query($query) {
        require_once("get_db.php");
        $st = $db->query($query);
        $success = $st->fetchAll(PDO::FETCH_ASSOC);
        require_once("exit.php");
        return $success;
    }
	
	function logged_in() {
        return isset($_SESSION['logged_in_user_id']);
    }
	
	function logged_is_as($type) {
		if ($type == $_SESSION['type']) 
			return 1; 
				else return 0;
	}
?>
