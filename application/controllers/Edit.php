<?php
/*=======================================
    EDIT CONTROLLER
=======================================*/
class Edit extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Edit_model');
        $this->load->helper('url_helper');
        
    }

    public function index()
    {        
    }

    public function view($gid = '1')
    {
        $data['get_group_result'] = $this->Edit_model->get_group($gid);
        $data['get_webmarks_result'] = $this->Edit_model->get_webmarks($gid);
        
        if (empty($data['get_group_result']))
        {
            show_404();
        }
        
        $data['title'] = $data['get_group_result']['g_name'];
        $data['groupTree'] = $this->Edit_model->get_group_tree();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/left-panel-1', $data);
            $this->load->view('browse/quicklist');
        $this->load->view('templates/left-panel-2', $data);
            $this->load->view('browse/group-tree', $data);
        $this->load->view('templates/right-panel-1', $data);
        $this->load->view('templates/right-panel-2', $data);
        $this->load->view('templates/right-panel-3', $data);
        $this->load->view('templates/right-panel-4', $data);
            $this->load->view('edit/edit-webmark-form', $data);
        $this->load->view('templates/footer');    
    }
}
?>