<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
        <form method="GET">
            <button type="submit">
                <i class="uil uil-search"></i>
            </button>
            <input type="text" name="name" value="" placeholder="Search here...">
            <small></small>
        </form>
    </div>
</div>
<div class="dash-content">
    <div class="overview">
        <div class="activity">
            <div class="activity-header">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Add Categories</span>
                </div>
                <div class="list">
                    <a href="./index.php?btn_list">
                        <i class="uil uil-clock-three" style="color: white;"></i>
                        <span class="text">Danh sách</span>
                    </a>
                </div>
            </div>
            <div class="add-user">
                <div class="add-user-inner" style="width: 500px;">
                    <div class="add-user-body">
                        <?= $msg ?>
                        <form action="./index.php?btn_insert" id="form" method="POST" enctype="multipart/form-data">
                            <div class="form_user">
                                <div class="form-left">
                                    <div class="form-control form-group">
                                        <label for="ten">Username</label>
                                        <input type="text" name="ma_kh" id="ma_kh" placeholder="Nhập vào username">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Họ và tên</label>
                                        <input type="text" name="ho_ten" id="ho_ten" placeholder="Nhập tên khách hàng">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Mật khẩu</label>
                                        <input type="password" name="mat_khau" id="mat_khau" placeholder="Nhập tên mật khẩu">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Xác nhận mật khẩu</label>
                                        <input type="password" name="mat_khau2" id="mat_khau2" placeholder="Xác nhận mật khẩu">
                                        <small></small>
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-control form-group">
                                        <label for="ten">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Nhập vào email">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Hình</label>
                                        <input type="file" name="hinh">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Kích hoạt</label>
                                        <div class="form-check">
                                            <label class="radio-inline"><input type="radio" name="kich_hoat" value="0" placeholder="Nhập vào địa chỉ">Chưa kích hoạt</label>
                                            <label class="radio-inline"><input type="radio" name="kich_hoat" value="1" placeholder="Nhập vào địa chỉ" checked>Đã kích hoạt</label>
                                        </div>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Vai trò</label>
                                        <div class="form-check">
                                            <label class="radio-inline"><input type="radio" name="vai_tro" value="1" placeholder="Nhập vào địa chỉ">Khách hàng</label>
                                            <label class="radio-inline"><input type="radio" name="vai_tro" value="0" placeholder="Nhập vào địa chỉ" checked>Nhân viên</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="addCategory" class="btn-add" id="btnSubmit">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= $CONTENT_URL ?>/js/app.js"></script>
<script>
    form.addEventListener('keyup', function(e) {
        e.preventDefault();
        checkEmptyError(ma_kh, mat_khau, mat_khau2, email, ho_ten);
        checkEmailError(email);
        checkLength(ma_kh, 5, 15);
        checkLength(mat_khau, 8, 20);
        checkLength(ho_ten, 5, 20);
        checkMatchPasswordError(mat_khau, mat_khau2);
    });


</script>