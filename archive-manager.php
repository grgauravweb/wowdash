<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Archive Manager</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Archive Manager</li>
                </ul>
            </div>

            <div class="card basic-data-table">
                <div class="card-header">
                    <h5 class="card-title mb-0">Default Datatables</h5>
                </div>
                <div class="card-body">
<div class="table-responsive">                    
<table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                    <thead>
    <tr>
        <th scope="col">
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">SNo</label>
            </div>
        </th>
        <th scope="col">Document Type</th>
        <th scope="col">Date</th>
        <th scope="col">Front Side</th>
        <th scope="col">Back Side</th>
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
        <td> TEENA ELZA JJOHN</td>
        <td>24 May 2022</td>
        <td></td>
        
        <td></td>
    </tr>
    <tr>
    <td>
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">2</label>
            </div>
        </td>
        <td>Alam Khan</td>
        <td>19 Dec 2017</td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-download-line"></iconify-icon>
            </a>
        </td>
        <td></td>
    </tr>
    <tr>
    <td>
            <div class="form-check style-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">3</label>
            </div>
        </td>
        <td> Kumar Kshitij</td>
        <td>15 Dec 2017</td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-download-line"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-download-line"></iconify-icon>
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
        <td> Kumar Kshitij</td>
        <td>15 Dec 2017</td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-download-line"></iconify-icon>
            </a>
        </td>
        <td></td>
    </tr>
    <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<?php include './partials/layouts/layoutBottom.php' ?>