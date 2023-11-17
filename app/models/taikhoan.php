<?php
function loadall_dstaikhoan()
{
    $sql = "SELECT * FROM users";
    $dstaikhoan = pdo_query($sql);
    return $dstaikhoan;
}
