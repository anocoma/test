<?php
session_start();
include "../../models/pdo.php";
include "../../models/taikhoan.php";
include "../../models/hanghoa.php";
include "../../models/danhmuc.php";
include "../../models/feedback.php";

include "includes/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dstaikhoan':
            $dstaikhoan = loadall_dstaikhoan();
            include "includes/qltaikhoan/dstk.php";
            break;
        case 'dshanghoa':
            $dshanghoa = loadall_dshanghoa();
            include "includes/qlhanghoa/dshh.php";
            break;

            // Quản lý danh mục

        case 'dsdanhmuc':
            $dsdanhmuc = loadall_dsdanhmuc();
            include "includes/qldanhmuc/dsdm.php";
            break;
        case "adddm":
                // kiem tra xem nguoi dung co click vao nut add k
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id = $_POST['ctg_id'];
                $name = $_POST['ctg_name'];
                $des = $_POST['ctg_des'];
                $status = $_POST['ctg_status'];
                insert_danhmuc($id,$name,$des,$status);
                $thongbao = "Them Thanh Cong";
            }
            include "includes/qldanhmuc/adddm.php";
            break;
        case "xoadm":
            if(isset($_GET['ctg_id'])&&($_GET['ctg_id']>0)){
                delete_danhmuc($ctg_id);
            }
            $sql="select * from catagory order by ctg_id";
            $dsdanhmuc=pdo_query($sql);
            include "includes/qldanhmuc/xoadm.php";
            break; 
        case 'suadm':
                if(isset($_GET['ctg_id']) &&($_GET['ctg_id']>0) ){
                    $dm=loadone_danhmuc($_GET['ctg_id']);
                }
                include "danhmuc/updatedm.php";
            break;
        case'updatedm':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $id = $_POST['ctg_id'];
                    $name = $_POST['ctg_name'];
                    $des = $_POST['ctg_des'];
                    $status = $_POST['ctg_status'];
                    update_danhmuc($id,$name,$des,$status);
                    $thongbao = "Cap Nhap Thanh Cong";
    
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/dsdm.php";
            break;
        case 'feedback':
            $dsfeedback = loadall_dsfeedback();
            include "includes/qlfeedback/dsfb.php";
            break;
    }
} else {
    include "includes/home.php";
}
include "includes/footer.php";
?>