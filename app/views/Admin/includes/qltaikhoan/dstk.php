<div class="row">

    <!-- Hiển thị chi tiết nội dung -->
    <div class="col-xl-12 col-lg-11">
        <div class="card shadow mb-4">
            <!-- tiêu đề -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý tài khoản</h6>
            </div>
            <!-- nội dung -->
            <div class="card-body">
                <div class="table-responsive">
                    <div class="d-flex flex-column chart-area" style="min-height: 500px;">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên tài khoản</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mật khẩu</th>
                                <th scope="col">SĐT</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Quyền</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Ngày chỉnh sửa</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dstaikhoan as $taikhoan) {
                                extract($taikhoan);
                                echo "<tr>
                                        <td > $user_id</td >
                                        <td > $user_name </td >
                                        <td > $user_firstname $user_lastname</td >
                                        <td > $user_email </td >
                                        <td > $user_password</td >
                                        <td > $user_mobile</td >
                                        <td > $user_address</td >
                                        <td > $user_roles</td >
                                        <td > $created_at</td >
                                        <td > $modified_at</td >
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
