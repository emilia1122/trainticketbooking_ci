<?php
    
    if (!function_exists('isLoggedIn')) {
    
        function isLoggedIn()
        {
            //you can not use the $this keyword to access the CI’s object
            $CI = & get_instance();  
            $id = $CI->session->userdata('user_id');

            if($id) {
                return true;
            } else {
                return false;
            }
               
            
        }
    }
        
?>
