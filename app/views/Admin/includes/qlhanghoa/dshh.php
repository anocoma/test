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
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên hàng hóa</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tồn kho</th>
                                <th scope="col">Trạng thái</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dshanghoa as $hanghoa) {
                                extract($hanghoa);

                                $hinhpath = "../../../../../uploads/" . $pdt_img;
                                if (is_file($hinhpath)) {
                                    $img = "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $img = "no photo";
                                }
                                echo "<tr>
                                        <td > $pdt_id 	</td >
                                        <td > $pdt_name </td >
                                        <td > $pdt_price</td >
                                        <td > $pdt_des </td >
                                        <td > $pdt_ctg</td >
                                        <td > $img</td >
                                        <td > $product_stock</td >
                                        <td > $pdt_status</td >
                                        <td><button class='btn btn-primary me-md-2'>Sửa</button></td>
                                        <td><button class='btn btn-danger me-md-2'>Xóa</button></td>
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
