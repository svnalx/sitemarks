<div class="ee-form-field">
    <!--<h2 class="ee-heading">Quick Add</h2>-->

    <form 
    class="ee-form-link" 
    action="<?php echo $GLOBALS['site-index'] . "add/" . $gid;?>"  
    method="post" 
    autocomplete="off">

        <label>Quick add: </label>
        <input class="ee-url" type="text" name="ee-url">


        <input type="hidden" name="mode" value="BROWSE" />
        <input type="hidden" name="static" value="true" />

        <input type="submit" class="ee-link-submit" name="addlink" value="Add">          
    </form>
</div>