<?php
	class Pages extends CI_Controller {

    function _remap($method)
    {
        is_file(APPPATH.'views/pages/'.$method.'.php') OR show_404();
        $this->load->view("pages/$method");
    }

}
?>
