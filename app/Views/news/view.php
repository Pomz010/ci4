
<?php
    foreach($news as $data) {
        echo "<h2>" . esc($data['title']) . "</h2>";
        echo "<p>" . esc($data['body']) . "</p>";
    }
?>
