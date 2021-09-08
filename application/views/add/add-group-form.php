<?php
isset($_POST['ee-group-name']) ? $url_value = $_POST['ee-group-name'] : $url_value = NULL;
?>

<div class="add-group-form">   
    
    <form 
    action="<?php echo $GLOBALS['site-index'] . "add/" . $gid;?>"  
    method="post" 
    utocomplete="off">
        
        <h1>Add a Group</h1>
        <input 
        class="add-link-input" 
        type="text" 
        name="new-group-name" 
        placeholder="Group name"
        autofocus
        value="<?php echo $url_value;?>">
        
        <input 
        type="hidden" 
        name="mode" 
        value="BROWSE" />
               
        <input 
        type="hidden" 
        name="group-id" 
        value="id" />
        
        <input 
        type="submit" 
        class="link-submit" 
        name="add-group" 
        value="Add">      
        
    </form>

</div>