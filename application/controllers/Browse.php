<?php
/*=======================================
    BROWSE CONTROLLER
=======================================*/
class Browse extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('Browse_model');
        $this->load->model('Tree_model');
        $this->load->library('session');
        $this->session->set_userdata('mode', 'browse');        
    }

    public function index()
    {        
    }

    public function view($gid = '1')
    {
        $data['gid'] = $gid;
        
        $data['get_group_result'] = $this->Browse_model->get_group($gid);
        $data['get_group_left_right_values_result'] = $this->Browse_model->get_group_left_right_values($gid);
        $data['get_subgroup_ids_result'] = $this->Browse_model->get_subgroup_ids
            ($data['get_group_left_right_values_result']);
        $data['get_webmarks_result'] = $this->Browse_model->get_webmarks
            ($data['get_subgroup_ids_result']);
        $data['title'] = $data['get_group_result']['g_name'];
        
        if (isset($_POST['add-group']))
        {
            $this->Browse_model->add_new_group
                (
                $_POST['new-group-name'],
                $gid
                );
        }
        
        $data['group_tree_array'] = $this->Tree_model->get_group_tree(); 
        
        $this->load->view('templates/header', $data);
            //$this->load->view('templates/diagnostics', $data);
        $this->load->view('templates/left-panel-1', $data); // quick list
            $this->load->view('browse/group-tree', $data);
        //$this->load->view('templates/left-panel-2', $data); // group tree
        $this->load->view('templates/right-panel-1', $data);
            $this->load->view('browse/breadcrumb', $data);
            $this->load->view('browse/easy-entry-forms', $data);
        $this->load->view('templates/right-panel-2', $data);
            if ( ! empty($data['get_webmarks_result']))
            {
                $this->load->view('browse/results-table', $data);
            } else {
                $this->load->view('browse/results-table', $data);
            }
        $this->load->view('templates/footer');  
    }
}
?>