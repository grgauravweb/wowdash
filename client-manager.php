<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Client Manager</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Client Manager</li>
                </ul>
            </div>

            <div class="card basic-data-table">
                <div class="card-header">
                    <h5 class="card-title mb-0">Default Datatables</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                    <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11">Add Record</button>
                    <button type="button" class="btn btn-lilac-600 radius-8 px-20 py-11">Change Order</button>
                    <button type="button" class="btn btn-success-600 radius-8 px-20 py-11">Change Visiblity</button>
                <button type="button" class="btn btn-info-600 radius-8 px-20 py-11">Display in Front</button>
                        <button type="button" class="btn btn-neutral-900 text-base radius-8 px-20 py-11">Delete Record</button>
</div>
                    <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                    <thead>
    <tr>
        <th scope="col">
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">SNo</label>
            </div>
        </th>
        <th scope="col">Client Name</th>
        <th scope="col">Logo</th>
        <th scope="col">Website</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Order By</th>
        <th scope="col">Status</th>
        <th scope="col">Front</th>
        <th scope="col">Edit</th>
        <th scope="col">View</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">1</label>
            </div>
        </td>
        <td>Client Name</td>
        <td><img src="http://asedutech.com/images/client/8_client_logo.png" style="height:85px; width:110px"></td>
        <td>http://c9soft.com/</td>
        <td>29 January 2018</td>
        <td><input type="number" class="form-control" style="width: 60px;"></td>
        <td><span class="text-success">&#10004;</span></td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
    </tr>
    <tr>
    <td>
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">2</label>
            </div>
        </td>
        <td>Client Name</td>
        <td><img src="http://asedutech.com/images/client/7_client_logo.png" style="height:85px; width:110px"></td>
        <td></td>
        <td>29 January 2018</td>
        <td><input type="number" class="form-control" style="width: 60px;"></td>
        <td><span class="text-success">&#10004;</span></td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
    </tr>
    <tr>
    <td>
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">3</label>
            </div>
        </td>
        <td>Client3</td>
        <td><img src="http://asedutech.com/images/client/6_client_logo.png" style="height:85px; width:110px"></td>
        <td></td>
        <td>29 January 2018</td>
        <td><input type="number" class="form-control" style="width: 60px;"></td>
        <td><span class="text-success">&#10004;</span></td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
    </tr>
    <tr>
    <td>
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">4</label>
            </div>
        </td>
        <td>Client1</td>
        <td><img src="http://asedutech.com/images/client/5_client_logo.jpg" style="height:85px; width:110px"></td>
        <td></td>
        <td>29 January 2018</td>
        <td><input type="number" class="form-control" style="width: 60px;"></td>
        <td><span class="text-success">&#10004;</span></td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php include './partials/layouts/layoutBottom.php' ?>