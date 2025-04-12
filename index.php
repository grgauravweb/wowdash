<?php $script = '<script src="assets/js/homeOneChart.js"></script>'; ?>

<?php include './partials/layouts/layoutTop.php' ?>


<style>
    a .card-body {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    a .card-body:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        cursor: pointer;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }
</style>


<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Dashboard</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">AI</li>
        </ul>
    </div>

    <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-2">

        <div class="col">

            <div class="card shadow-none border bg-gradient-start-1 h-20">
                <a href="settings.php">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Settings</p>
                            </div>
                            <div
                                class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="gridicons:multiple-users"
                                    class="text-white text-2xl mb-0"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-2 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">CMS Manager</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            </a>
        </div>

        <div class="col">
            <div class="card shadow-none border bg-gradient-start-5 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Archive Manager</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-red rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="mdi:credit-card-outline"
                                class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-none border bg-gradient-start-5 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Download Manager</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-red rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="mdi:credit-card-outline"
                                class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-none border bg-gradient-start-1 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Dropdown Manager</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="gridicons:multiple-users"
                                class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
                </a>
            </div><!-- card end -->
        </div>

        <div class="col">
            <div class="card shadow-none border bg-gradient-start-2 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Job Manager</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
            </a>
        </div>

        <div class="col">
            <div class="card shadow-none border bg-gradient-start-3 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Jobseeker Manager</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-orange rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="mdi:chart-line" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <div class="col">
            <div class="card shadow-none border bg-gradient-start-4 h-20">
            <a href="settings.php">
            <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium font-bold text-primary-light mb-1 text-xl">Logout</p>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-orange rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="mdi:chart-line" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>


    </div>
</div>

<?php include './partials/layouts/layoutBottom.php' ?>