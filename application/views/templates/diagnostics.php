<!-- DIAGNOSTICS -->
<div 
style=
"
 position:absolute;
 top:100px;
 right:20px;
 width:400px;
 height:500px;
 background-color:rgba(50,50,250,0.9);
 overflow-y:scroll;
">
    <pre>
    <?php 
        //print_r($get_group_left_right_values_result);
        //print_r($get_subgroup_ids_result); 
        $this->Browse_model->sort_alpha_per_group($group_tree_array);
        print_r($group_tree_array);
    ?>
    </pre>
</div>