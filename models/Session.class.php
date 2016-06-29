<?php
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out

// Keep in mind when working with sessions that it is generally 
// inadvisable to store DB-related objects in sessions

class Session {
	
    private $logged_in=false;
    public $user_id;
    
    /**
     * Session class instatiate 
     * Verify if user is logged in and open a session if $logged_is is true
     * 
     */
    function __construct() {
        session_start();
	$this->check_login();
        if($this->logged_in) {
                $session_duration = 3600;
                $expire_time = substr($_SESSION['user_id'], 0,strlen($_SESSION['user_id'])-5) + $session_duration;
            if (time() > $expire_time){
             //   log_action("Delogare automata", "Sesiunea userului cu id:".$this->user_id." a fost inchisa in urma inactivitatii.");
                $this->logout();
            } else {
              $_SESSION['user_id'] = $this->ecryptId($this->decryptId($_SESSION['user_id']));
            }

        } else {
          // actions to take right away if user is not logged in
        }
    }
    
    /**
     * Verify if session atribute logged_in is true 
     * @return boolean $logged_in atribute
     */
    public function is_logged_in() {
        return $this->logged_in;
    }
    
    /**
     * Start the session for logged in user with encrypted id
     * @param object $user user instantiated object
     */
    public function login($user) {
    // database should find user based on username/password
        if($user){
          $_SESSION['user_id'] = $this->ecryptId($user);
          $this->user_id = $user;
          $this->logged_in = true;
        }
    }
 
    /**
     * Destroy the session when logout
     */
    public function logout() {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->logged_in = false;
    }
    
    /**
     * Verify if session exists and set the logged_in atribute to true and set the user id to decrypted id from session
     */
    private function check_login() {
        if(isset($_SESSION['user_id'])) {
            $this->user_id = $this->decryptId($_SESSION['user_id']);
            $this->logged_in = true;
        } else {
            unset($this->user_id);
            $this->logged_in = false;
        }
    }
    
    /**
     * Encrypt the id for session, algoritm based on time and last four digits are random
     * @param int $id
     * @return int Ecrypted_id
     */
    private function ecryptId ($id) {
        return time().$id.rand(1000, 9999);
    }
    
    private function decryptId ($id){
        $s = substr($id, strlen(time()));
        $d = substr($s, 0,  strlen($s)-4);
        return $d;
    }

  
}

