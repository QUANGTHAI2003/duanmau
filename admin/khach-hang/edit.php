<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
        <form method="GET">
            <button type="submit">
                <i class="uil uil-search"></i>
            </button>
            <input type="text" name="name" value="" placeholder="Search here...">
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
                        <i class="uil uil-clock-three"></i>
                        <span class="text">List</span>
                    </a>
                </div>
            </div>
            <div class="add-user">
                <div class="add-user-inner" style="width: 500px;">
                    <div class="add-user-body">
                        <form action="./index.php?btn_update" method="POST" enctype="multipart/form-data">
                            <div class="form_user" style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="form-left">
                                    <div class="form-group">
                                        <label for="ten">Username</label>
                                        <input type="text" name="ma_kh" value="<?= $ma_kh ?>" class="form-control" placeholder="Nhập vào username">
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Họ và tên</label>
                                        <input type="text" name="ho_ten" value="<?= $ho_ten ?>" class="form-control" placeholder="Nhập tên khách hàng">
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Mật khẩu</label>
                                        <input type="text" name="mat_khau" value="<?= password_verify($mat_khau, PASSWORD_DEFAULT) ?>" class="form-control" placeholder="Nhập tên mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Xác nhận mmật khẩu</label>
                                        <input type="text" name="mat_khau2" value="<?= password_verify($mat_khau, PASSWORD_DEFAULT) ?>" class="form-control" placeholder="Xác nhận mật khẩu">
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-group">
                                        <label for="ten">Email</label>
                                        <input type="email" name="email" value="<?= $email ?>" class="form-control" placeholder="Nhập vào email">
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Hình</label>
                                        <input type="file" name="hinh" class="form-control" value="<?= $hinh ?>">
                                        (<?= $hinh ?>)
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Kích hoạt</label>
                                        <div class="form-control-status">
                                            <label class="radio-inline"><input type="radio" name="kich_hoat" value="0" placeholder="Nhập vào địa chỉ" <?= !$kich_hoat ? 'checked' : '' ?> >Chưa kích hoạt</label>
                                            <label class="radio-inline"><input type="radio" name="kich_hoat" value="1" placeholder="Nhập vào địa chỉ" <?= $kich_hoat ? 'checked' : '' ?> >Đã kích hoạt</label>
                                        </div>
                                    </div>
                                    <div class="form-group role">
                                        <label for="ten">Vai trò</label>
                                        <div class="form-control-role">
                                            <label class="radio-inline"><input type="radio" name="vai_tro" value="0" placeholder="Nhập vào địa chỉ" <?= $vai_tro ? 'checked' : '' ?> >Khách hànghàng</label>
                                            <label class="radio-inline"><input type="radio" name="vai_tro" value="1" placeholder="Nhập vào địa chỉ" <?= !$vai_tro ? 'checked' : '' ?> >Nhân viên</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="addCategory" class="btn-add">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>