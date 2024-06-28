<h1>Words Sorting</h1>

<?php
    require("words.php");
    $d1->sortWords();
    foreach ($d1->words as $word) {
        echo "<li>$word</li>";
    }
?>