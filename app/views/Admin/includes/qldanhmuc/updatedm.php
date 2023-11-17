<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
</header>
        <div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">

           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")  ) echo $name; ?>" placeholder="nhập vào tên">
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)  ) echo $id; ?>" >
         <input class="mr20" type="submit" name="capnhap" value="CẬP NHẬP">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=dsdanhmuc"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao) && ($thongbao!=""))  echo $thongbao;
           ?>
          </form>
         </div>
        </div>
 
     <!-- END HEADER -->