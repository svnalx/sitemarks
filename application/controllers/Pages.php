<?php
/*=======================================
    PAGES CONTROLLER
=======================================*/
class Pages extends CI_Controller {

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('templates/left-panel-1', $data); // quick list
        $this->load->view('templates/left-panel-2', $data); // group tree
        $this->load->view('templates/right-panel-1', $data); // breadcrumb
        $this->load->view('templates/right-panel-2', $data); // suggest link
        $this->load->view('templates/right-panel-3', $data); // easy entry form
        $this->load->view('templates/right-panel-4', $data); // results table
        $this->load->view('templates/footer');  
    }
}
?>