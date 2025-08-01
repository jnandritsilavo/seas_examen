<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*******************************
 _____ _   _ _____ __  __ _____ 
|_   _| | | | ____|  \/  | ____|
  | | | |_| |  _| | |\/| |  _|  
  | | |  _  | |___| |  | | |___ 
  |_| |_| |_|_____|_|  |_|_____|
*******************************/
class Theme {
    private $CI;
    private $output = '';
    private $config = '';
    private $menu = '';
    private $theme = 'projet';
    function __construct() {
        date_default_timezone_set('Africa/Nairobi');
        setlocale(LC_TIME, 'fra_fra');
        $this->CI = get_instance();
        $this->CI->load->model('statics');

        defined('__UNIQID__') or define('__UNIQID__', $this->CI->session->userdata('uniqid'));
        defined('__FIRST_NAME__') or define('__FIRST_NAME__', $this->CI->session->userdata('first_name'));
        defined('__NAME__') or define('__NAME__', $this->CI->session->userdata('name'));
        defined('__EMAIL_ADDRESS__') or define('__EMAIL_ADDRESS__', $this->CI->session->userdata('email_address'));
        defined('__LEVEL__') or define('__LEVEL__', $this->CI->session->userdata('level'));
        defined('__CODE_STUDENT__') or define('__CODE_STUDENT__', $this->CI->session->userdata('code_student'));
        defined('__LOGGEDIN__') or define('__LOGGEDIN__', $this->CI->session->userdata('loggedin'));
        defined('__PASSWORD__') or define('__PASSWORD__', $this->CI->session->userdata('change_password'));
    }

    function view($name, $data = array())
    {
        $this->var['output'] = $this->CI->load->view($name, $data, TRUE);
        return $this->CI->load->view('../themes/' . $this->theme, $this->var);
    }

    function views($name, $data = array())
     {
        $this->output = $this->CI->load->view($name, $data, TRUE);
        return $this;
    }


    function config($name)
     {
         $this->var['config'] = $name;
        return TRUE;
    }

    function menu($name, $data = array())
    {
      if (is_string($name) AND !empty($name))
      {
       $this->var['menu'] = $this->CI->load->view($name, $data, TRUE);
       return $this;
      }
     return FALSE;
  }


    function set_titre($titre)
     {
        if (is_string($titre) AND !empty($titre))
         {
            $this->var['titre'] = $titre;
            return TRUE;
        }
        return FALSE;
    }

    function set_icon($icon)
     {
        if (is_string($icon) AND !empty($icon))
         {
            $this->var['icon'] = $icon;
            return TRUE;
        }
        return FALSE;
    }

}
