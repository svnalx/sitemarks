<form 
class="ee-form" 
action="<?php echo $GLOBALS['site-index'] . "add/" . $gid;?>"  
method="post" 
autocomplete="off">

  <input type="hidden" name="mode" value="BROWSE" />
  <input type="hidden" name="static" value="true" />

  <label for="ee-url">Add new sitemark to current group: </label>
  <input type="text" name="ee-url">
  <input type="submit" name="addlink" value="Add sitemark">   

</form>