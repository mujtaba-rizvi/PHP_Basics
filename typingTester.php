<?php
require ("words.php");
$totalWords = count($d1->words);

$correct = "";

for ($i = 0; $i < $totalWords; $i++) {
    $correct .= $d1->words[$i] . ' ';
}

echo "<h4>$correct</h4>";

echo '
    <form action="" method="POST">
        <textarea placeholder="Type Here" id="inputText" name="inputText" rows="5" cols="100"></textarea>
        <br>
        <br>
        <button type="Submit">Done</button>
    </form>
    ';

$inputText = htmlspecialchars($_POST['inputText']);

$inputLength = strlen($inputText);
$i = $j = $correctCharCount = 0;

$correctLength = strlen($correct);

while ($i < $inputLength) {
    if ($j < $correctLength && $inputText[$i] == $correct[$j]) {
        // Print correct matching characters in green color
        echo "<span style='color:green'>$inputText[$i]</span>";
        $correctCharCount++;
    } else {
        // Print non-matching characters in red color
        echo "<b style='color:red'>$inputText[$i]</b>";
    }
    $i += 1;
    $j += 1;
}

$accuracy = $correctCharCount / $correctLength * 100;

echo "<h3>Accuracy: " . sprintf("%.2f", $accuracy);