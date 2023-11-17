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
                                <th scope="col">ID khách hàng</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">ID sản phẩm</th>
                                <th scope="col">Bình luận</th>
                                <th scope="col">Thời gian bình luận</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dsfeedback as $feedback) {
                                extract($feedback);
                                echo "<tr>
                                        <td > $id 	</td >
                                        <td > $user_id </td >
                                        <td > $user_name</td >
                                        <td > $pdt_id </td >
                                        <td > $comment </td >
                                        <td > $comment_date </td >
                                        
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
