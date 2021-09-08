<div class="group-tree-header-container">

    <h1 class="groups-heading">Groups</h1>

    <form 
    class="gt-create-group-form" 
    action="<?php echo $GLOBALS['site-index'] . "browse/" . $gid;?>"
    method="post" 
    autocomplete="off">

        <input type="hidden" name="mode" value="BROWSE" />
        <input type="hidden" name="static" value="true" />
        
        <input 
        type="submit" 
        class="gt-create-group-button" 
        name="add-group" 
        value="Create">

        <input 
        class="gt-create-group-name" 
        type="text" 
        name="new-group-name">

    </form>
</div>

<div class="scroll-container">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    function toggle(source) {
      checkboxes = document.getElementsByTagName('input');
      for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
      }
    }
    </script>

    <label for="toggle-all" class="toggle">TOGGLE ALL</label><input type="checkbox" id="toggle-all" onClick="toggle(this)" />

    <?php 
    // initialize left value
    $l_pos = 2;
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
    
    $output = $this->Tree_model->build_tree($group_tree_array, $url_info, $gid);
    echo $output;
    ?>


</div>