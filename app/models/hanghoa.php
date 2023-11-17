<?php
function loadall_dshanghoa()
{
    $sql = "SELECT * FROM products";
    $dshanghoa = pdo_query($sql);
    return $dshanghoa;
}
