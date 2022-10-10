<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="Search here...">
    </div>
</div>
<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text">Dashboard</span>
        </div>

        <div class="boxes">
            <div class="box box1">
                <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop" state="hover-nodding" colors="primary:#121331,secondary:#000" style="width:50px;height:50px;font-weight:bold">
                </lord-icon>
                <span class="text">Total User</span>
                <span class="number">10</span>
                </span>
            </div>
            <div class="box box2">
                <lord-icon src="https://cdn.lordicon.com/nlzvfogq.json" trigger="loop" colors="primary:#121331,secondary:#000" style="width:50px;height:50px">
                </lord-icon>
                <span class="text">Total Product</span>
                <span class="number">
                    10
                </span>
            </div>
            <div class="box box3">
                <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop" colors="primary:#121331,secondary:#000" style="width:50px;height:50px">
                </lord-icon>
                <span class="text">Total Order</span>
                <span class="number">
                    10
                </span>
            </div>
        </div>
    </div>
    <div class="info-chart">
        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recent Activity</span>
            </div>
            <div class="activity-user">
                <div class="title-user-main">
                    <div class="title-pro name">Tên người dùng</div>
                    <div class="title-pro email">Email</div>
                    <div class="title-pro date">Đăng nhập lần cuối</div>
                    <div class="title-pro status">Trạng thái</div>
                </div>
                <?php foreach ($items_kh as $kh) { ?>
                    <div class="list-user-main">
                        <div class="name"><?= $kh['ho_ten'] ?></div>
                        <div class="email"><?= $kh['email'] ?></div>
                        <div class="date">22/09/2022</div>
                        <div class="status">Offline</div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="chart-layout">
            <div class="chart-container">
                <div class="chart-layout__item" style="--percent: <?= 2 * 8; ?>px">
                    <?= 2; ?>
                </div>
                <div class="name">User</div>
            </div>
            <div class="chart-container">
                <div class="chart-layout__item" style="--percent: <?= 3 * 8; ?>px"><?= 3; ?>
                </div>
                <div class="name">Product</div>
            </div>
            <div class="chart-container">
                <div class="chart-layout__item" style="--percent: <?= 4 * 8; ?>px">
                    <?= 4; ?>
                </div>
                <div class="name">Order</div>
            </div>
        </div>
    </div>
</div>
