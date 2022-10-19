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
            <?= $msg ?>
            <div class="add-user">
                <div class="add-user-inner" style="width: 500px;">
                    <div class="add-user-body">
                        <form action="./index.php?btn_update" id="form" method="POST" enctype="multipart/form-data">
                            <div class="form_user">
                                <div class="form-left">
                                    <div class="form-control form-group">
                                        <label for="ten">Username</label>
                                        <input type="text" id="ma_kh" name="ma_kh" value="<?= $ma_kh ?>" class="form-control" placeholder="Nhập vào username">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Họ và tên</label>
                                        <input type="text" id="ho_ten" name="ho_ten" value="<?= $ho_ten ?>" class="form-control" placeholder="Nhập tên khách hàng">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Mật khẩu</label>
                                        <input type="text" id="mat_khau" name="mat_khau" value="<?= password_verify($mat_khau, PASSWORD_DEFAULT) ?>" class="form-control" placeholder="Nhập tên mật khẩu">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Xác nhận mmật khẩu</label>
                                        <input type="text" id="mat_khau2" name="mat_khau2" value="<?= password_verify($mat_khau, PASSWORD_DEFAULT) ?>" class="form-control" placeholder="Xác nhận mật khẩu">
                                        <small></small>
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-control form-group">
                                        <label for="ten">Email</label>
                                        <input type="email" id="email" name="email" value="<?= $email ?>" class="form-control" placeholder="Nhập vào email">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Hình</label>
                                        <input type="hidden" name="hinh" class="form-control" value="<?= $hinh ?>">
                                        <small></small>
                                        <input type="file" name="up_hinh" class="form-control">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="ten">Kích hoạt</label>
                                        <div class="form-control-status">
                                            <label class="radio-inline"><input type="radio" name="kich_hoat" value="0" placeholder="Nhập vào địa chỉ" <?= !$kich_hoat ? 'checked' : '' ?> >Chưa kích hoạt</label>
                                            <label class="radio-inline"><input type="radio" name="kich_hoat" value="1" placeholder="Nhập vào địa chỉ" <?= $kich_hoat ? 'checked' : '' ?> >Đã kích hoạt</label>
                                        </div>
                                    </div>
                                    <div class="form-control form-group role">
                                        <label for="ten">Vai trò</label>
                                        <div class="form-control-role">
                                            <label class="radio-inline"><input type="radio" name="vai_tro" value="0" placeholder="Nhập vào địa chỉ" <?= !$vai_tro ? 'checked' : '' ?> >Khách hàng</label>
                                            <label class="radio-inline"><input type="radio" name="vai_tro" value="1" placeholder="Nhập vào địa chỉ" <?= $vai_tro ? 'checked' : '' ?> >Nhân viên</label>
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