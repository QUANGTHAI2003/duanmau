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
                    <span class="text">Add Product</span>
                </div>
                <div class="list">
                    <a href="./index.php?btn_list">
                        <i class="uil uil-clock-three" style="color: white;"></i>
                        <span class="text">Danh sách</span>
                    </a>
                </div>
            </div>
            <div class="add-product">
                <div class="add-product-inner">
                    <div class="add-product-body">
                        <?= $msg ?>
                        <form action="./index.php?btn_update&ma_hh=<?= $ma_hh ?>" id="form" method="POST" enctype="multipart/form-data">
                            <div class="form" style="display: grid; grid-template-columns: 1fr 1fr">
                                <div class="form-left">
                                    <div class="form-control form-group">
                                        <label for="ten">Tên hàng hóa</label>
                                        <input type="text" id="ten_hh" name="ten_hh" value="<?= $ten_hh ?>" placeholder="Nhập tên sản phẩm">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="cate">Tên danh mục</label>
                                        <select name="ma_loai" id="danh_muc" required="required">
                                            <option value="">Tên danh mục</option>
                                            <?php
                                            foreach ($items_loai as $loai) {
                                                if ($loai['ma_loai'] == $ma_loai) {
                                                    echo "<option value='{$loai['ma_loai']}' selected>{$loai['ten_loai']}</option>";
                                                } else {
                                                    echo "<option value='{$loai['ma_loai']}'>{$loai['ten_loai']}</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="img">Ảnh sản phẩm</label>
                                        <input type="hidden" name="hinh" id="img" value="<?= $hinh ?>" />
                                        <small></small>
                                        <input type="file" name="up_hinh" id="img" accept=".jpg, .jpeg, .png, .svg, .webp" />
                                        <small></small>
                                        (<?= $hinh ?>)
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-control form-group">
                                        <label for="price">Đơn giá</label>
                                        <input type="number" name="don_gia" id="don_gia" value="<?= $don_gia ?>" placeholder="Nhập giá sản phẩm">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group">
                                        <label for="qty">Giảm giá</label>
                                        <input type="number" name="giam_gia" id="giam_gia" value="<?= $giam_gia ?>" placeholder="Nhập số lượng sản phẩm">
                                        <small></small>
                                    </div>
                                    <div class="form-control form-group"></div>
                                    <!-- <label for="qty">Hàng đặc biệt</label> -->
                                    <label class="radio-inline"><input type="radio" name="dac_biet" value="0" placeholder="Nhập vào địa chỉ" <?= !$dac_biet ? 'checked' : '' ?>>Bình thường</label>
                                    <label class="radio-inline"><input type="radio" name="dac_biet" value="1" placeholder="Nhập vào địa chỉ" <?= $dac_biet ? 'checked' : '' ?>>Đặc biệt</label>
                                </div>
                                <input type="hidden" name="so_luot_xem" value="<?= $so_luot_xem ?> ">
                                <small></small>
                            </div>
                            <div class="form-control form-group">
                                <label for="desc">Mô tả</label>
                                <textarea type="text" name="mo_ta" value="<?= $mo_ta ?>" rows="3" placeholder="Nhập tên sản phẩm"></textarea>
                            </div>
                            <button type="submit" name="addProduct" class="btn-add" id="btnSubmit">Sửa</button>
                        </form>
                    </div>
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
        checkEmptyError(ten_hh, danh_muc, don_gia);
        checkSelected(danh_muc);
        checkInputNumber(don_gia);
        checkInputNumber(giam_gia);
    });
</script>