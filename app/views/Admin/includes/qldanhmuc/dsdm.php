<div class="row">

    <!-- Hiển thị chi tiết nội dung -->
    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
            <!-- tiêu đề -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý hàng hóa</h6>
            </div>
            <!-- nội dung -->
            <div class="card-body">
                <div class="table-responsive">
                    <div class="d-flex flex-column chart-area" style="min-height: 500px;">
                    <a href="index.php?act=adddm"> <input  class="btn btn-primary me-md-2" type="button" value="NHẬP THÊM"></a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Mô tả danh mục</th>
                                <th scope="col">Trạng thái</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dsdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&ctg_id=".$ctg_id;
                                $xoadm="index.php?act=xoadm&ctg_id=".$ctg_id;
                                echo "<tr>
                                        <td > $ctg_id 	</td >
                                        <td > $ctg_name </td >
                                        <td > $ctg_des</td >
                                        <td > $ctg_status </td >
                                        
                                        <td><a href='.$suadm.'><button class='btn btn-primary me-md-2'>Sửa</button></a></td>
                                        <td><a href='.$xoadm.'><button  class='btn btn-primary me-md-2'>Xoa</button></a></td>

                                    </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
