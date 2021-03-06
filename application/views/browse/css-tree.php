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
    
    <input type="checkbox" onClick="toggle(this)" /> Toggle All<br/>
    <br />
    
<ol class="tree">
    <li>
        <label for="folder1">Folder 1</label> <input type="checkbox" id="folder1" /> 
        <ol>
            <li class="file"><a href="document.html.pdf">File 1</a></li>
            <li>
                <label for="subfolder1">Subfolder 1</label> <input type="checkbox" id="subfolder1" /> 
                <ol>
                    <li class="file"><a href="">Filey 1</a></li>
                    <li>
                        <label for="subsubfolder1">Subfolder 1</label> <input type="checkbox" id="subsubfolder1" /> 
                        <ol>
                            <li class="file"><a href="">File 1</a></li>
                            <li>
                                <label for="subsubfolder2">Subfolder 1</label> <input type="checkbox" id="subsubfolder2" /> 
                                <ol>
                                    <li class="file"><a href="">Subfile 1</a></li>
                                    <li class="file"><a href="">Subfile 2</a></li>
                                    <li class="file"><a href="">Subfile 3</a></li>
                                    <li class="file"><a href="">Subfile 4</a></li>
                                    <li class="file"><a href="">Subfile 5</a></li>
                                    <li class="file"><a href="">Subfile 6</a></li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li class="file"><a href="">File 3</a></li>
                    <li class="file"><a href="">File 4</a></li>
                    <li class="file"><a href="">File 5</a></li>
                    <li class="file"><a href="">File 6</a></li>
                </ol>
            </li>
        </ol>
    </li>
    <li>
        <label for="folder2">Folder 2</label> <input type="checkbox" id="folder2" /> 
        <ol>
            <li class="file"><a href="">File 1</a></li>
            <li>
                <label for="subfolder2">Subfolder 1</label> <input type="checkbox" id="subfolder2" /> 
                <ol>
                    <li class="file"><a href="">Subfile 1</a></li>
                    <li class="file"><a href="">Subfile 2</a></li>
                    <li class="file"><a href="">Subfile 3</a></li>
                    <li class="file"><a href="">Subfile 4</a></li>
                    <li class="file"><a href="">Subfile 5</a></li>
                    <li class="file"><a href="">Subfile 6</a></li>
                </ol>
            </li>
        </ol>
    </li>
    <li>
        <label for="folder3">Folder 3</label> <input type="checkbox" id="folder3" /> 
        <ol>
            <li class="file"><a href="">File 1</a></li>
            <li>
                <label for="subfolder3">Subfolder 1</label> <input type="checkbox" id="subfolder3" /> 
                <ol>
                    <li class="file"><a href="">Subfile 1</a></li>
                    <li class="file"><a href="">Subfile 2</a></li>
                    <li class="file"><a href="">Subfile 3</a></li>
                    <li class="file"><a href="">Subfile 4</a></li>
                    <li class="file"><a href="">Subfile 5</a></li>
                    <li class="file"><a href="">Subfile 6</a></li>
                </ol>
            </li>
        </ol>
    </li>
    <li>
        <label for="folder4">Folder 4</label> <input type="checkbox" id="folder4" /> 
        <ol>
            <li class="file"><a href="">File 1</a></li>
            <li>
                <label for="subfolder4">Subfolder 1</label> <input type="checkbox" id="subfolder4" /> 
                <ol>
                    <li class="file"><a href="">Subfile 1</a></li>
                    <li class="file"><a href="">Subfile 2</a></li>
                    <li class="file"><a href="">Subfile 3</a></li>
                    <li class="file"><a href="">Subfile 4</a></li>
                    <li class="file"><a href="">Subfile 5</a></li>
                    <li class="file"><a href="">Subfile 6</a></li>
                </ol>
            </li>
        </ol>
    </li>
    <li>
        <label for="folder5">Folder 5</label> <input type="checkbox" id="folder5" /> 
        <ol>
            <li class="file"><a href="">File 1</a></li>
            <li>
                <label for="subfolder5">Subfolder 1</label> <input type="checkbox" id="subfolder5" /> 
                <ol>
                    <li class="file"><a href="">Subfile 1</a></li>
                    <li class="file"><a href="">Subfile 2</a></li>
                    <li class="file"><a href="">Subfile 3</a></li>
                    <li class="file"><a href="">Subfile 4</a></li>
                    <li class="file"><a href="">Subfile 5</a></li>
                    <li class="file"><a href="">Subfile 6</a></li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
</div>
