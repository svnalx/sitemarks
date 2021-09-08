<h1 style="color:#e6f2ff;">Quicklist</h1>
<br />

<div class="scroll-container quicklist">   
    
<?php
$quicklist = array("list 1", "list 2");
?>
    
<?php foreach ($quicklist as $quickie): ?>

	<h3>
        <a href="http://localhost/webmarks/index.php/browse/<?php echo $quickie; ?>">
        <?php echo $quickie; ?>
        </a>
    </h3>

<?php endforeach; ?>
    
</div>