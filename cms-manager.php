<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">CMS Manager</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">CMS Manager</li>
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
        <th scope="col">Title</th>
        <th scope="col">Parent Category</th>
        <th scope="col">Sub Category</th>
        <th scope="col">Order By</th>
        <th scope="col">Status</th>
        <th scope="col">Front</th>
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
        <td>A. S. EDUTECH HR Consultant<br><small class="text-muted">( Alias: a-s-edutech-hr-consultant )</small></td>
        <td>About Us, Slider</td>
        <td>Mission & Vision</td>
        <td>1</td>
        <td><span class="text-danger">&#10060;</span></td>
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
        <td>ENGINEERING & CONSTRUCTION<br><small class="text-muted">( Alias: engineering-construction- )</small></td>
        <td>Slider</td>
        <td>--</td>
        <td>2</td>
        <td><span class="text-success">&#10060;</span></td>
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
        <td>International Recruitment Services<br><small class="text-muted">( Alias: international-recruitment-services )</small></td>
        <td>Services</td>
        <td>International Recruitment Services</td>
        <td>2</td>
        <td><span class="text-success">&#10060;</span></td>
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
        <td>APPROVED FROM MINISTRY OF EDUCATION-KSA<br><small class="text-muted">( Alias: approved-from-ministry-of-health-ksa )</small></td>
        <td>Slider</td>
        <td>--</td>
        <td>3</td>
        <td><span class="text-success">&#10060;</span></td>
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