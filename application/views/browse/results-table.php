<table id="results">
    <thead>
    <tr>
        <th class="show-row"> </th>
        <th class="group">Group</th>
        <th class="starred"> </th>
        <th class="title">← Title →</th>
        <th class="summary">← Summary →</th>
        <th class="notes">Notes</th>
        <th class="date">Date</th>
        <th class="modify"></th>
    </tr>
    </thead>

    <tbody>

    <?php 
    // used in starred field
    $bool = true;
    
    foreach ($get_webmarks_result as $webmark): ?>
    <tr id="<?php echo "row_for_" . $webmark['w_id'];?>">
        
<!-- SHOW ROW -->
        <td> 
            <span>
                <button class="button-row-expand" 
                onclick="showRow(<?php echo "row_for_" . $webmark['w_id'];?>)">+</button>
            </span>
        </td>
        
<!-- LABEL -->
        <td style="text-align:center;"> 
            <span class="groupDisplay">
                <?php echo $webmark['g_name'];?>
            </span>
        </td>

<!-- STARRED -->
        <?php 
        if ($bool) {
            echo "<td><span style=\"color:darkorange;font-size:16px;\">&#9733;</span></td>";
            $bool = false;
        } else {
            echo "<td><span style=\"color:#4d4e53;font-size:16px;\">&#9734;</span></td>";
            $bool = true;
        }?>

<!-- TITLE -->
        <td>
            <a href="<?php echo $webmark['w_url'];?>"
            class="webmark-title" 
            target="_blank">
            <!--<img src="http://www.google.com/s2/favicons?domain=<?php //echo $webmark['w_url'];?>" 
            height="16" 
            width="16">-->
            <?php echo $webmark['w_title'];?></a>
        </td>

<!-- SUMMARY -->
        <td>
            <?php echo $webmark['w_summary'];?>
        </td>

<!-- NOTES -->
        <td>
            <?php echo $webmark['w_notes'];?>
        </td>
        
<!-- DATE ADDED -->
        <td>
            <?php 
            $timestamp = strtotime($webmark['w_date']);
            echo date("m-d-y", $timestamp);
            ?>
        </td>

<!-- MODIFY -->
        <td>
            <form method="get" action="index.php">
            <input type="hidden" name="bmID" value="<?php echo "bmID";?>">
            <input type="hidden" name="edit" value="true">
                <button type="send">
                    <img 
                    src="<?php echo $GLOBALS['site'] . "images/icon-edit.png";?>" 
                    name="edit-submit" 
                    value="true" 
                    style="width:16px; height:16px;"/>
                </button>
            
                <button type="send">
                    <img 
                    src="<?php echo $GLOBALS['site'] . "images/icon-delete.png";?>" 
                    name="delete-submit" 
                    value="true" 
                    style="width:16px; height:16px;"/>
                </button>
            </form>
        </td>
    </tr>

    <?php endforeach; ?>        
                
    </tbody>
</table>