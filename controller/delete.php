<?php
include 'config.php';

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

    $query = $conn->prepare("DELETE FROM users WHERE id = ?");
    $query->bind_param('i', $id);

    if ($query->execute()) {
        echo 1;
    } else {
        echo 0;
    }
?>
