<div style="border: 4px ridge;border-color: grey;display: inline-block;padding:2px;">
<?php
    function colorDigit($numb)
    {
        if($numb>9)
        {
            $lastDigit = $numb%10;
            return colorDigit(intdiv($numb,10)).colorDigit($lastDigit);
        }
        switch($numb)
        {
            case 1:
                return '<span style="color:red;">1</span>';
            case 2:
                return '<span style="color:green;">2</span>';
            case 3:
                return '<span style="color:#FFC72C;">3</span>';
            case 4:
                return '<span style="color:blue;">4</span>';
            default:
                return $numb;
        }
    }
    for ($i = 1; $i <= 10; $i++): ?>
        <?php if($i == 6)
        {
            echo "<br>";
        }
        ?>
        <div style="height:350px;width:100px;border: 1px solid;padding: 1px 6px 2px 10px;margin:1px 0;display: inline-block;">
        <?php for ($j = 1; $j <= 10; $j++): ?>
                <p style="">
                    <?php echo colorDigit($i)." x ".colorDigit($j)." = ".colorDigit($i * $j) ?>
                </p>
        <?php endfor; ?>
        </div>
        <?php endfor;
?>
</div>