<?php $script = '    <script>
       let table = new DataTable("#dataTable", {
        responsive: true,
        scrollX: true
    });
    </script>';?>

<?php include './partials/layouts/layoutTop.php' ?>

        <div class="dashboard-main-body">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Media Manager</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Media Manager</li>
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
                        <button type="button" class="btn btn-info-600 radius-8 px-20 py-11">Front Status</button>
                        <button type="button" class="btn btn-success-600 radius-8 px-20 py-11">Change Visiblity</button>
                        <button type="button" class="btn btn-neutral-900 text-base radius-8 px-20 py-11">Delete Record</button>
</div>
<table class="table table-bordered mb-0" id="dataTable" data-page-length='10'>
        <thead>
            <tr>
                <th scope="col">
                    <div class="form-check style-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label ms-1">SNo</label>
                    </div>
                </th>
                <th scope="col">Media</th>
                <th scope="col">Title</th>
                <th scope="col">Parent Title</th>
                <th scope="col">Order By</th>
                <th scope="col">Status</th>
                <th scope="col">Front</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-check style-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label ms-1">1</label>
                    </div>
                </td>
                <td><img src="http://asedutech.com/images/img_gallery/reee86.png" style="width:141px; height:95px;"></td>
                <td>reee</td>
                <td>--</td>
                <td><input type="number" class="form-control" style="width: 60px;"></td>
                <td><span class="text-success">&#10004;</span></td>
                <td><span class="text-success">&#10004;</span></td>
                <td>
                    <a href="javascript:void(0)" class="text-primary">
                        <iconify-icon icon="lucide:edit"></iconify-icon>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check style-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label ms-1">2</label>
                    </div>
                </td>
                <td>
                    <iframe src="http://www.youtube.com/embed/0pnPV7XfWHI" width="140" height="115" frameborder="0" allowfullscreen></iframe>
                </td>
                <td>New Video</td>
                <td>--</td>
                <td><input type="number" class="form-control" style="width: 60px;"></td>
                <td><span class="text-success">&#10004;</span></td>
                <td><span class="text-success">&#10004;</span></td>
                <td>
                    <a href="javascript:void(0)" class="text-primary">
                        <iconify-icon icon="lucide:edit"></iconify-icon>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check style-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label ms-1">3</label>
                    </div>
                </td>
                <td><img src="http://asedutech.com/images/img_gallery/Gallery1182.png" style="width:141px; height:95px;"></td>
                <td>Gallery 1.1</td>
                <td>--</td>
                <td><input type="number" class="form-control" style="width: 60px;"></td>
                <td><span class="text-success">&#10004;</span></td>
                <td><span class="text-success">&#10004;</span></td>
                <td>
                    <a href="javascript:void(0)" class="text-primary">
                        <iconify-icon icon="lucide:edit"></iconify-icon>
                    </a>
                </td>
            </tr>
            <tr></tr>
        </tbody>
    </table>
                </div>
            </div>
        </div>

<?php include './partials/layouts/layoutBottom.php' ?>