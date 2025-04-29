<div id="layoutSidenav_nav">
            <?php
            if (session()->get('role') == 'admin' || session()->get('role') == 'user') {
            ?>
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="keranjang">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Keranjang
                            </a>
                            <?php
                            if (session()->get('role') == 'admin') {
                            ?>
                            <a class="nav-link" href="produk">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Produk
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)
                    </div>
                </nav>
            <?php
            }
            ?>
</div>