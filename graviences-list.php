<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Graviences List</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Graviences List</li>
                </ul>
            </div>

            <div class="card basic-data-table">
                <div class="card-header">
                    <h5 class="card-title mb-0">Default Datatables</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-neutral-900 text-base radius-8 px-20 py-11">Delete Record</button>
</div>
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
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Passport</th>
        <th scope="col">EQUAMA No.</th>
        <th scope="col">Employer's Name</th>
        <th scope="col">Date of Submission</th>
        <th scope="col">View</th>
        <th scope="col">Reply</th>
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
        <td>Akram husin</td>
        <td>hashmiakram07531@gmail.com</td>
        <td>M7960237</td>
        
        <td>
        Not
        </td>
        <td>Coffee shop Motaib mazal alsarah Ar Ar ksa</td>
        <td>07 January 2022</td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-mail-unread-line"></iconify-icon>
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
        <td>MARY MAMATHA</td>
        <td>drdmmamatha@gmail.com</td>
        <td>N8122708</td>
        
        <td>
        IQAMA NO
        </td>
        <td>XXXXXXXX</td>
        <td>29 March 2019</td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-mail-open-line"></iconify-icon>
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
        <td>Cablogo</td>
        <td>nakhan014@gmail.com</td>
        <td>452638</td>
        
        <td>
        cccccc
        </td>
        <td>Noor</td>
        <td>06 February 2018</td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-eye-line"></iconify-icon>
            </a>
        </td>
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-mail-open-line"></iconify-icon>
            </a>
        </td>
    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<?php include './partials/layouts/layoutBottom.php' ?>