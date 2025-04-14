<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Employee Manager</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Employee Manager</li>
                </ul>
            </div>

            <div class="card basic-data-table">
                <div class="card-header">
                    <h5 class="card-title mb-0">Default Datatables</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11">Add Record</button>
                        <button type="button" class="btn btn-warning-600 radius-8 px-20 py-11">Change Status</button>
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
        <th scope="col">Name / Email ID</th>
        <th scope="col">Login Details</th>
        <th scope="col">User Type</th>
        <th scope="col">Register Date</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
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
        <td>Arshad,      arshadrsd@gmail.com</td>
        <td>User Name: arshadrsd1      Pass: 591748</td>
        <td>Employee</td>
        <td>05 Jun 2018</td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
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
        <td>Habib,      h.rahman@c9soft.com</td>
        <td>User Name: rahman      Pass: 142536</td>
        <td>Employee</td>
        <td>22 May 2018</td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
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
        <td>Yogendra Kumar,      yogi@c9soft.com</td>
        <td>User Name: yogihr      Pass: 142536</td>
        <td>Employee</td>
        <td>22 May 2018</td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
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
        <td>Farman,      jobs@asedutech.com</td>
        <td>User Name: jobs1      Pass: 123456</td>
        <td>Employee</td>
        <td>22 May 2018</td>
        <td><span class="text-success">&#10004;</span></td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="lucide:edit"></iconify-icon>
            </a>
        </td>
    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php include './partials/layouts/layoutBottom.php' ?>