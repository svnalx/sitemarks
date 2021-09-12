<?php
class Browse_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
        $this->load->library('session');        
	}
        
    public function sort_alpha_per_group($array)
    {     
        $new_array = array();
        
        foreach ($array as $group)
        {
            $gid = $group['g_id'];
            $char = $group['g_name'][0];
            
            foreach ($array as $test)
            {
                $compare = strcmp($char, $test['g_name'][0]);

            }
        }
        
        return $new_array;
    }
    
    public function get_group($gid)
    {
        $query = $this->db->get_where('groups', array('g_id' => $gid));
        return $query->row_array();
    }
    
    public function get_group_left_right_values($gid) 
    {
        $query = $this->db->query
        ("
        select
            g.g_left,
            g.g_right
        from
            `groups` as g
        where
            g.g_id = ?;
        ", $gid);
        
        return $query->row_array();
    }
    
    public function get_subgroup_ids($gid_array) 
    {
        $left = $gid_array['g_left'];
        $right = $gid_array['g_right'];
        
        $sql1 =
        "
        select
            g.g_id
        from
            `groups` as g
        where g.g_left between '".$left."' and '".$right."';
        ";
        
        $query = $this->db->query($sql1);

        return $query->result_array();
    }
    
    public function get_webmarks($gid_array) 
    {
        /*
        Custom implode
        */
        $gid_arg = "";
        $array_count = count($gid_array);
        $i = 0;

        foreach ($gid_array as $sg)
        {
            $i++;
            $gid_arg .= $sg['g_id'];
            if ($i < $array_count)
            {
                $gid_arg .= "', '";
            }
        }
        
        $query = $this->db->query
        ("
        SELECT *
        FROM `webmarks` w
        JOIN `junction` j ON j.j_w_id = w.w_id
        JOIN `groups` g ON j.j_g_id = g.g_id
        AND j.j_g_id in ('".$gid_arg."')
        ORDER BY w.w_title
        ");
        
        return $query->result_array();
    }
    
    public function add_new_group($newGroupName, $parentID)
    {
        $parentInfo = $this->get_group($parentID);
        
        $sql1 =
        "SELECT g_right 
        FROM `groups`
        WHERE g_name = ?;";

        $query1 = $this->db->query($sql1, $parentInfo['g_name']);
        $result1 = $query1->result_array();
        $myRight = $result1[0]['g_right'];
        
        $sql2 =
        "UPDATE `groups`
        SET g_right = g_right + 2 
        WHERE g_right >= '".$myRight."';";
        
        $sql3 =
        "UPDATE `groups` 
        SET g_left = g_left + 2 
        WHERE g_left >= '".$myRight."';";

        $sql4 = 
        "INSERT INTO `groups`
        (
            g_name, 
            g_left, 
            g_right
        ) 
        VALUES
        (
            ?, 
            '".$myRight."', 
            '".$myRight."' + 1
        )";
        
        if
        (
            $this->db->query($sql2, $newGroupName) &&
            $this->db->query($sql3, $newGroupName) &&
            $this->db->query($sql4, $newGroupName)
        )
        {
            return true;
        } else {
            echo "error";
            return false;
        }
    }
    
    public function __destruct()
    {
        
    }
}
?>