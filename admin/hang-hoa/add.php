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
                        <i class="uil uil-clock-three" style="color: white;"></i>
                        <span class="text">Danh sách</span>
                    </a>
                </div>
            </div>
            <div class="add-product">
                <div class="add-product-inner">
                    <div class="add-product-body">
                        <form action="./index.php?btn_insert" method="POST" enctype="multipart/form-data">
                            <div class="form" style="display: grid; grid-template-columns: 1fr 1fr">
                                <div class="form-left">
                                    <div class="form-group">
                                        <label for="ten">Tên hàng hóa</label>
                                        <input type="text" name="ten_hh" id="ten" class="form-control" placeholder="Nhập tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="cate">Tên danh mục</label>
                                        <select name="ma_loai" id="cate" class="form-control" required="required">
                                            <option value="">Tên danh mục</option>
                                            <?php
                                            foreach ($loai_hang as $loai) {
                                                extract($loai);
                                                echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Ảnh sản phẩm</label>
                                        <input type="file" name="hinh" id="img" />
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-group">
                                        <label for="price">Đơn giá</label>
                                        <input type="text" name="don_gia" id="price" class="form-control" placeholder="Nhập giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Giảm giá</label>
                                        <input type="text" name="giam_gia" id="qty" class="form-control" placeholder="Nhập giảm giá">
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Hàng đặc biệt</label>
                                        <div class="form-check">
                                            <label class="radio-inline"><input type="radio" name="dac_biet" value="0" placeholder="Nhập vào địa chỉ" checked>Bình thường</label>
                                            <label class="radio-inline"><input type="radio" name="dac_biet" value="1" placeholder="Nhập vào địa chỉ">Đặc biệt</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc">Mô tả</label>
                                <textarea type="text" name="mo_ta" id="ten" rows="3" class="form-control" placeholder="Nhập mô tả sản phẩm"></textarea>
                            </div>
                            <button type="submit" name="addProduct" class="btn-add">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>