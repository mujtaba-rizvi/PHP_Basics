<h1>Words Finder</h1>

<form name="form" action="" method="get">
    <input type="text" name="search" value="">
</form>

<h3>Similar Words:</h3>
<ul>
    <?php
    require("words.php");
    if (isset($_GET['search'])) {
        $ans = $d1->getSimilarWords(htmlspecialchars($_GET['search']));
    }

    foreach ($ans as $word) {
        echo "<li>$word</li>";
    }
    ?>
</ul>