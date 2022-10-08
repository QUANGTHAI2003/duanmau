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
                    <span class="text">Add Product</span>
                </div>
                <div class="list">
                    <a href="./index.php?btn_list">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">List</span>
                    </a>
                </div>
            </div>
            <div class="add-product">
                <div class="add-product-inner">
                    <div class="add-product-body">
                        <form action="./index.php?btn_update" method="POST" enctype="multipart/form-data">
                            <div class="form" style="display: grid; grid-template-columns: 1fr 1fr">
                                <div class="form-left">
                                    <div class="form-group">
                                        <label for="ten">Mã hàng hóa</label>
                                        <input type="text" name="ma_hh" value="<?= $ma_hh ?>" class="form-control" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Tên hàng hóa</label>
                                        <input type="text" name="ten_hh" value="<?= $ten_hh ?>" class="form-control" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="cate">Tên danh mục</label>
                                        <select name="ma_loai" id="cate" class="form-control" required="required">
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
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Ảnh sản phẩm</label>
                                        <input type="file" name="hinh" id="img" value="<?= $hinh ?>" />
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-group">
                                        <label for="price">Đơn giá</label>
                                        <input type="text" name="don_gia" id="price" value="<?= $don_gia ?>" class="form-control" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Giảm giá</label>
                                        <input type="text" name="giam_gia" id="qty" value="<?= $giam_gia ?>" class="form-control" placeholder="Nhập số lượng sản phẩm">
                                    </div>
                                    <div class="form-group"></div>
                                    <!-- <label for="qty">Hàng đặc biệt</label> -->
                                    <label class="radio-inline"><input type="radio" name="dac_biet" value="0" placeholder="Nhập vào địa chỉ" <?= !$dac_biet ? 'checked' : '' ?>>Bình thường</label>
                                    <label class="radio-inline"><input type="radio" name="dac_biet" value="1" placeholder="Nhập vào địa chỉ" <?= $dac_biet ? 'checked' : '' ?>>Đặc biệt</label>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Mô tả</label>
                                    <textarea type="text" name="mo_ta" value="<?= $mo_ta ?>" rows="3" class="form-control" placeholder="Nhập tên sản phẩm"></textarea>
                                </div>
                                <input type="hidden" name="so_luot_xem" value="<?= $so_luot_xem ?> ">
                            </div>
                    </div>
                    <button type="submit" name="addProduct" class="btn-add">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>