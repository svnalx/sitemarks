<div class="group-tree-header-container">

    <p class="groups-heading">Add a new group to the current group.</span></p>

    <form 
    class="gt-create-group-form" 
    action="<?php echo $GLOBALS['site-index'] . "browse/" . $gid;?>"
    method="post" 
    autocomplete="off">

        <input type="hidden" name="mode" value="BROWSE" />
        <input type="hidden" name="static" value="true" />

        <input 
        class="gt-create-group-name" 
        type="text" 
        name="new-group-name">
        
        <input 
        type="submit" 
        class="gt-create-group-button" 
        name="add-group" 
        value="Add group">

    </form>

    
</div>

<div class="scroll-container">

    <label id="toggleBtn" for="toggle-all" class="toggle">Collapse</label><input type="checkbox" id="toggle-all" onClick="toggle(this)" checked /> 

    <?php 
    // initialize left value
    $l_pos = 1;
    ?>
    
    <?php 
    $url_info = array();
    
    foreach ($group_tree_array as $group):
    
        // determine if current group ID is active or not
        if ($group['g_id'] == $gid)
        {
            $url_info['if_active'] = " class=\"active-group\"";
        } else {
            $url_info['if_active'] = NULL;
        }

        // make url
        $url_info['url'] = 
            $GLOBALS['site-index'] . 
            $this->session->userdata('mode') .
            "/" .
            $group['g_id'];
    
    endforeach;
    
    $output = "<div id=\"groupTree\">";
    $output .= $this->Tree_model->build_tree($group_tree_array, $url_info, $gid);
    $output .= "</div>";
    echo $output;
    ?>


</div>