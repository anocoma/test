<?php
function loadall_dsfeedback()
{
    $sql = "SELECT * FROM customer_feedback";
    $dsfeedback = pdo_query($sql);
    return $dsfeedback;
}
