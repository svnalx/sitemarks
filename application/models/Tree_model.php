<?php
class Tree_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        $this->load->library('session');        
	}
    
    public function build_tree(&$gt_array, &$url_info, $gid, $position = 2, $init = true)
    {        
        // initialize array to store checkbox preferences
        $gt_checks = array();
        
        // begin output of order list
        if 
        ( $init )
        {
            $output = "<ol class=\"gt-ol\"><li>";
        } else {
            $output = "<ol><li>";
        }
        
        foreach ($gt_array as $group)
        {        
            $href_url = $GLOBALS['site-index'] . "browse/" . $group['g_id'];
            
            $gt_checks[$group['g_id']] = $group['g_chk'];
            
            
            
            // test for active group and apply CSS class
            if
                ( $group['g_id'] == $gid )
                {
                    $if_active_class = "class=\"active-group\"";
                } else {
                    $if_active_class = "";
                }
            
            // test internal position against g_left
            // if this group is at position
            // output html ol, li, label, input
            // recursively run build_tree with position + 1
            // when it reaches the end of a sup group
            // sets the position to node_right + 1
            // continues looping through entire array
            if 
            ( $group['g_left'] == $position )
            {
                if 
                ( $group['g_right'] == ($group['g_left'] + 1) )
                {
                    $if_eol_class = "class=\"end-of-line\"";
                } else {
                    $if_eol_class = "";
                }
                            
                $output .= <<< ENDOUTPUT
                <ol><li>
                <label {$if_eol_class} for="{$group['g_id']}">
                <a {$if_active_class} href="{$href_url}">{$group['g_name']}</a>
                </label>
                <input type="checkbox" id="{$group['g_id']}" checked />
ENDOUTPUT;
                $node_left = $group['g_left'];
                $node_right = $group['g_right'];
                
                $output .= $this->Tree_model->build_tree($gt_array, $url_info, $gid, $position + 1, false);
                $output .= "</li></ol>";
                
                $position = $node_right + 1;
            }
        }
        
        $output .= "</li></ol>";
        
        echo "<pre>";
        //print_r($gt_checks);
        echo "</pre>";
        
        return $output;
    }
    
    public function get_group_tree()
    {    
        // Select all data from groups table and return as array
        $query1 = $this->db->query(
        "
        select
            *
        from
            `groups` as g
        where
            g.g_id != '1'
        order by g.g_left;
        ");
        $results1 = $query1->result_array();
        
        return $results1;
    }
}
?>