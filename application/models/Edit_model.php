<?php
class Edit_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        
	}
    
    public function get_group_tree()
    {
        $query = $this->db->query
        ("
        SELECT CONCAT( REPEAT( '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', (COUNT(parent.g_name) - 1) ), node.g_name) AS g_name,
        node.g_id AS g_id
        FROM groups AS node,
        groups AS parent
        WHERE node.g_left BETWEEN parent.g_left AND parent.g_right
        GROUP BY node.g_name
        ORDER BY node.g_left;
        ");
        return $query->result_array();
    }
    
    public function get_group($gid)
    {
        $query = $this->db->get_where('groups', array('g_id' => $gid));
        return $query->row_array();
    }
    
    public function get_webmarks($gid) {
        $query = $this->db->query
        ("
        SELECT *
        FROM webmarks w
        JOIN junction j ON j.j_w_id = w.w_id
        JOIN groups g ON j.j_g_id = g.g_id
        AND j.j_g_id = '".$gid."'
        ORDER BY w.w_title
        ");
        
        return $query->result_array();
    }
    
}
?>