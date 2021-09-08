<?php
class Add_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        $this->load->library('session');        
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
        FROM `webmarks` w
        JOIN `junction` j ON j.j_w_id = w.w_id
        JOIN `groups` g ON j.j_g_id = g.g_id
        AND j.j_g_id = '".$gid."'
        ORDER BY w.w_title
        ");
        
        return $query->result_array();
    }
    
    public function add_new_webmark($gid, $title = NULL, $url = NULL, $notes = NULL, $summary = NULL) {
        
        $sql1 = 
        "INSERT INTO `webmarks`
        (w_title, w_url, w_notes, w_summary)
        VALUES (?,?,?,?);";
        $this->db->query($sql1, array($title, $url, $summary, $notes));
        
        $sql2 = 
        "SELECT LAST_INSERT_ID() from `webmarks`;";
        $qry = $this->db->query($sql2);
        $result = $qry->result_array();
        $wid = $result['0'];
        
        $sql3 =
        "INSERT into `junction`
        (j_g_id, j_w_id)
        VALUES
        (?,?);";
        
        if
        (
            $this->db->query($sql3, array($gid, $wid))
        )
        {
            return true;
        } else {
            return false;
        }
    }
}
?>