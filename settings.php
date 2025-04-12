<?php include './partials/layouts/layoutTop.php' ?>

<div class="dashboard-main-body">

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Input Form</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="index.php" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Input Form</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="card-title mb-0">Default Group</h6>
                    <button class="btn btn-primary-600 toggleFormBtn" data-target="formBody1">Show</button>
                </div>
                <div id="formBody1" class="card-body d-none">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Basic Input</label>
                            <input type="text" name="basic_input" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Input with Placeholder</label>
                            <input type="text" name="placeholder_input" class="form-control"
                                placeholder="info@gmail.com">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Input with Phone</label>
                            <input type="text" class="form-control" placeholder="+1 (555) 253-08515">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Input Date</label>
                            <input type="date" name="date_input" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Input with Payment</label>
                            <div class="input-group">
                                <span class="input-group-text bg-base">
                                    <img src="assets/images/card/payment-icon.png" alt="image">
                                </span>
                                <input type="text" class="form-control" placeholder="Card number">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->

            <!-- Input Group -->
            <div class="card mt-24">
            <div class="card-header d-flex align-items-center justify-content-between">
      <h6 class="card-title mb-0">Input Group</h6>
      <button class="btn btn-primary-600 toggleFormBtn" data-target="formBody2">Show</button>
    </div>
                 <div id="formBody2" class="card-body d-none">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">With Icon</label>
                            <div class="input-group">
                                <span class="input-group-text bg-base">
                                    <iconify-icon icon="mynaui:envelope"></iconify-icon>
                                </span>
                                <input type="text" class="form-control" placeholder="info@gmail.com">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Prefix Select</label>
                            <div class="input-group">
                                <select class="form-select input-group-text w-90-px">
                                    <option>US</option>
                                    <option>UK</option>
                                    <option>IN</option>
                                </select>
                                <input type="text" class="form-control" placeholder="example">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Suffix Select</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="example">
                                <select class="form-select input-group-text w-90-px">
                                    <option>US</option>
                                    <option>UK</option>
                                    <option>IN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">URL Input</label>
                            <div class="input-group">
                                <span class="input-group-text bg-base">http://</span>
                                <input type="text" class="form-control" placeholder="www.example.com">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Copy Field</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="www.example.com">
                                <button type="button" class="input-group-text bg-base">
                                    <iconify-icon icon="lucide:copy"></iconify-icon> Copy
                                </button>
                            </div>
                            <p class="text-sm mt-1 mb-0">This is a hint text to help user.</p>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>

        <div class="col-md-6">
            <!-- Input Sizes -->
            <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
      <h6 class="card-title mb-0">Input Group</h6>
      <button class="btn btn-primary-600 toggleFormBtn" data-target="formBody3">Show</button>
    </div>
                 <div id="formBody3" class="card-body d-none">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Input Large</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Large input">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Input Medium</label>
                            <input type="text" class="form-control" placeholder="Medium input">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Input Small</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Small input">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->

            <!-- File Inputs -->
            <div class="card mt-24">
            <div class="card-header d-flex align-items-center justify-content-between">
      <h6 class="card-title mb-0">Input Group</h6>
      <button class="btn btn-primary-600 toggleFormBtn" data-target="formBody4">Show</button>
    </div>
                 <div id="formBody4" class="card-body d-none">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Large File Input</label>
                            <input class="form-control form-control-lg" type="file">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Medium File Input</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Small File Input</label>
                            <input class="form-control form-control-sm" type="file">
                        </div>
                    </div>
                </div>
            </div><!-- card end -->

            <!-- Custom Forms -->
            <div class="card mt-24">
            <div class="card-header d-flex align-items-center justify-content-between">
      <h6 class="card-title mb-0">Input Group</h6>
      <button class="btn btn-primary-600 toggleFormBtn" data-target="formBody5">Show</button>
    </div>
                 <div id="formBody5" class="card-body d-none">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Readonly Input</label>
                            <input type="text" class="form-control" value="info@gmail.com" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Phone Input with Country</label>
                            <div class="form-mobile-field">
                                <select class="form-select">
                                    <option>+1</option>
                                    <option>+44</option>
                                    <option>+91</option>
                                </select>
                                <input type="tel" class="form-control" placeholder="123-456-7890">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center gap-3 mt-24"><button class="btn btn-primary-600">Update</button><button class="btn btn-primary-600">Cancle</button></div>
</div><!-- dashboard-main-body end -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButtons = document.querySelectorAll('.toggleFormBtn');

        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-target');
                const formBody = document.getElementById(targetId);

                if (formBody.classList.contains('d-none')) {
                    formBody.classList.remove('d-none');
                    button.textContent = 'Hide';
                } else {
                    formBody.classList.add('d-none');
                    button.textContent = 'Show';
                }
            });
        });
    });
</script>

<?php include './partials/layouts/layoutBottom.php' ?>