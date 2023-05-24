<?php
include("database.php");
$sql = "SELECT * FROM `MSG`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="bloggerspice bserror bstext" style="margin-left:20px">' . "\n";
        echo '<div class="message-wrapper">' . "\n";
        echo '<div class="headertext" style="white-space: pre-line; max-width: 400px;">' . "\n";
        echo 'From ' . $row["name"] . ' at ' . $row["date"] . ' and you can contact him at ' . $row["email"] . '</div>' . "\n";
        echo $row["text"] . '</div>' . "\n";
        echo '</div>';
    }
} else {
    echo 'No messages found.';
}
?>
