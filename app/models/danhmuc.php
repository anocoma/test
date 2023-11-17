<?php
function loadall_dsdanhmuc()
{
    $sql = "SELECT * FROM catagory";
    $dsdanhmuc = pdo_query($sql);
    return $dsdanhmuc;
}
function insert_danhmuc($id,$name,$des,$status){
    $sql = "insert into catagory(ctg_id,ctg_name,ctg_des,ctg_status) values('$id','$name','$des','$status')";
    pdo_execute($sql);
}
function delete_danhmuc($ctg_id){
    $sql="delete from catagory where ctg_id=".$ctg_id;
    pdo_execute($sql);
}
function loadone_danhmuc($ctg_id){
    $sql="select * from danhmuc where ctg_id=".$_GET['ctg_id'];
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$name,$des,$status){
    $sql = "update danhmuc set ctg_id='".$id."', ctg_name='"$name"', ctg_des='"$des"', ctg_status='"$status"' where ctg_id=".$ctg_id;
                    pdo_execute($sql);
}