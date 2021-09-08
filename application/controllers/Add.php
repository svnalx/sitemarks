<?php
/*=======================================
    ADD CONTROLLER
=======================================*/
class Add extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Add_model');
        $this->load->model('Tree_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->session->set_userdata('mode', 'add');        
    }

    public function index()
    {        
    }

    public function view($gid = '1')
    {
        $data['gid'] = $gid;
        
        if (isset($_POST['add-group']))
        {
            $this->Add_model->add_new_group
                (
                $_POST['new-group-name'],
                $gid
                );
        }
        
        $webmark_added_bool = false;
        if (isset($_POST['submit-add-webmark']))
        {
            $webmark_added_bool = $this->Add_model->add_new_webmark
                (
                    $gid, 
                    $_POST['add-webmark-title'], 
                    $_POST['add-webmark-url'], 
                    $_POST['add-webmark-summary'], 
                    $_POST['add-webmark-notes']
                );
        }
        $data['webmark_added_bool'] = $webmark_added_bool;
        
        $data['get_group_result'] = $this->Add_model->get_group($gid);
        $data['get_webmarks_result'] = $this->Add_model->get_webmarks($gid);
        $data['group_tree_array'] = $this->Tree_model->get_group_tree();
        
        if (empty($data['get_group_result']))
        {
            show_404();
        }
        
        $data['title'] = $data['get_group_result']['g_name'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/left-panel-1', $data);
            $this->load->view('browse/group-tree', $data);
        $this->load->view('templates/left-panel-2', $data);
            //$this->load->view('browse/quicklist', $data);
        $this->load->view('templates/right-panel-1', $data);
        $this->load->view('templates/right-panel-2', $data);
        $this->load->view('templates/right-panel-3', $data);
            $this->load->view('browse/breadcrumb', $data);
        $this->load->view('templates/right-panel-4', $data);
            $this->load->view('add/add-webmark-form', $data);
        $this->load->view('templates/footer');    
    }
}
?>