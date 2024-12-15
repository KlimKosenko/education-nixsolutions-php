<div style="border: 4px ridge;border-color: grey;display: inline-block;padding:2px">
<?php
    for ($i = 1; $i <= 10; $i++): ?>
        <?php if($i == 6)
        {
            echo "<br>";
        }
        ?>
        <div style="height:350px;width:100px;border: 1px solid;padding: 1px 6px 2px 10px;margin:1px 0;display: inline-block;">
        <?php for ($j = 1; $j <= 10; $j++): ?>
                <p style="">
                    <?php echo "$i x $j = ".($i * $j) ?>
                </p>
        <?php endfor; ?>
        </div>
        <?php endfor;
?>
</div>