<?php
isset($_POST['ee-url']) ? $url_value = $_POST['ee-url'] : $url_value = NULL;
?>

<div class="add-link-form">   
    
    <form 
    action="<?php echo $GLOBALS['site-index'] . "add/" . $gid;?>"
    method="post" 
    autocomplete="off">
        
        <h1>Add a bookmark</h1>
        
        <input 
        class="add-link-input" 
        type="text" 
        name="add-webmark-title"
        placeholder="Title" 
        autofocus>
        
        <input 
        class="add-link-input" 
        type="text" 
        name="add-webmark-url" 
        placeholder= "URL"
        value="<?php echo $url_value;?>">

        <textarea 
        name="add-webmark-summary" 
        class="add-link-input" 
        placeholder="Summary" 
        style="clear:left; height:54px; width:99%;  margin-top:5px;"></textarea>
        
        <br />

        <textarea 
        name="add-webmark-notes" 
        class="add-link-input" 
        placeholder="Notes" 
        style="clear:left; height:54px; width:99%;  margin-top:5px;"></textarea>
        
        <br />
        
        <input 
        type="hidden" 
        name="mode" 
        value="BROWSE" />
        
        <input 
        type="hidden" 
        name="static" 
        value="true" />
        
        <input 
        type="submit" 
        class="link-submit" 
        name="submit-add-webmark" 
        value="Add">  
        
    </form>
    
    <?php
    if ($webmark_added_bool)
    {
        echo "<br />Webmark added!";
    }
    ?>

</div>