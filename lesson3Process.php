<?php
    function mb_strrev(string $string, string $encoding = null): string
    {
        $chars = mb_str_split($string, 1, $encoding ?: mb_internal_encoding());
        return implode('', array_reverse($chars));
    }

    $message = $_GET["message"];
    echo "<p><b>".mb_strrev($message)."</b></p>";
?>
<a href="lesson3.php"><button>Повернутися</button></a>