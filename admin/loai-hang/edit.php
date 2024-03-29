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
                        <i class="uil uil-clock-three" style="color: white;"></i>
                        <span class="text">Danh sách</span>
                    </a>
                </div>
            </div>
            <div class="add-cate">
                <div class="add-cate-inner" style="width: 500px;">
                    <div class="add-cate-body">
                        <?= $msg ?>
                        <form action="./index.php?btn_update&ma_loai=<?= $ma_loai ?>" method="POST">
                            <div class="form_cate">
                                <div class="form-group">
                                    <label for="ten">Tên danh mục</label>
                                    <input type="text" name="ten_loai" class="form-control" value="<?= $ten_loai ?>" placeholder="Nhập tên danh mục">
                                </div>
                            </div>
                            <button type="submit" name="addCategory" class="btn-add">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>