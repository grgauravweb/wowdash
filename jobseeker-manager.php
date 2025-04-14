<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Jobseeker Manager</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Jobseeker Manager</li>
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
                    <button type="button" class="btn btn-success-600 radius-8 px-20 py-11">Send SMS</button>
                <button type="button" class="btn btn-info-600 radius-8 px-20 py-11">Send Email</button>
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
        <th scope="col">Personal Details</th>
        <th scope="col">Other Details</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
        <th scope="col">View</th>
        <th scope="col">Print</th>
        <th scope="col">Download</th>
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
        <td>Name : Khan Ayesha Tazeen<br>
Jobseeker Id : EDPR042510586 ( Created By: SELF )<br>
Email : Pathanashi65@gmail.com [ December1990 ]<br>
Contact :<br>
Creation Date : 15 Apr 2025</td>
        <td>Parent Category : Education / Teaching / Training<br>
Sub Category : Professor / Asso. Professor / Asst. Professor / Lecturer<br>
Specialisation : Teacher Education<br>
Qualification : Senior secondary, B.Pharma, M.Pharma, Ph.D/Doctorate<br>
Experience : 2 Year(s) 10 Month(s)</td>
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
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-archive-line"></iconify-icon>
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
                <label class="form-check-label">2</label>
            </div>
        </td>
        <td>Name : LALITHA MARY JEBAMANI<br>
Jobseeker Id : HENU042534951 ( Created By: SELF )<br>
Email : shanayawyn@gmail.com [ Lalipaul@0302 ]<br>
Contact :<br>
Creation Date : 14 Apr 2025</td>
        <td>Parent Category : Healthcare<br>
Sub Category : Nursing<br>
Specialisation : Neonatal ICU<br>
Qualification : Senior secondary, Diploma,<br>
Experience : 12 Year(s) 9 Month(s)</td>
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
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-archive-line"></iconify-icon>
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
                <label class="form-check-label">3</label>
            </div>
        </td>
        <td>Name : LALITHA MARY JEBAMANI<br>
Jobseeker Id : HEDI042531048 ( Created By: SELF )<br>
Email : lalijaici@gmail.com [ Lalipaul@0302 ]<br>
Contact : 9080189252<br>
Creation Date : 14 Apr 2025</td>
        <td>Parent Category : Healthcare<br>
Sub Category : Diploma<br>
Specialisation : Neonatal ICU<br>
Qualification :<br>
Experience : </td>
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
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-archive-line"></iconify-icon>
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
        <td>Name : Christo Nanattu ponnachan<br>
Jobseeker Id : HENU042551408 ( Created By: SELF )<br>
Email : christojeromenanattu@gmail.com [ Jesus@1234 ]<br>
Contact : 8590894617<br>
Creation Date : 13 Apr 2025</td>
        <td>Parent Category : Healthcare<br>
Sub Category : Nursing<br>
Specialisation : Casualty<br>
Qualification :<br>
Experience : </td>
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
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-archive-line"></iconify-icon>
            </a>
        </td>
        
        <td>
            <a href="javascript:void(0)" class="text-primary">
                <iconify-icon icon="ri-download-line"></iconify-icon>
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