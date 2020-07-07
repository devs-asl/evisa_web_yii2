<?php

use common\assets\DefaultDashboardAssetBundle;
use common\assets\MultistepFormAssetBundle;

DefaultDashboardAssetBundle::register($this);

MultistepFormAssetBundle::register($this);


?>
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Wizard 2	                	            </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                Pages	                        	</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                Wizard 2	                        	</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light font-weight-bold btn-sm">
                    Actions
                </a>
                <!--end::Actions-->

                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/Files/File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
    </g>
</svg><!--end::Svg Icon--></span>                </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-success">Customer</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-danger">Partner</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-warning">Suplier</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-primary">Member</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-dark">Staff</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer py-4">
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                    <i class="ki ki-plus icon-sm"></i>
                                    Add new
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container-fluid ">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-2" id="kt_wizard_v2" data-wizard-state="first" data-wizard-clickable="false">
                        <!--begin: Wizard Nav-->
                        <?php echo $this->render('@app/views/partials/dashboard-evisa-request-form/step-nav.php') ?>
                        <!--end: Wizard Nav-->

                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="offset-xxl-2 col-xxl-8">
                                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <?php echo $this->render('@app/views/partials/dashboard-evisa-request-form/step-1.php') ?>
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <?php echo $this->render('@app/views/partials/dashboard-evisa-request-form/step-2.php') ?>
                                        <!--end: Wizard Step 2-->

                                        <!--begin: Wizard Step 3-->
<!--                                        --><?php //echo $this->render('@app/views/partials/dashboard-evisa-request-form/step-3.php') ?>
                                        <!--end: Wizard Step 3-->

                                        <!--begin: Wizard Step 4-->
<!--                                        --><?php //echo $this->render('@app/views/partials/dashboard-evisa-request-form/step-4.php') ?>
                                        <!--end: Wizard Step 4-->

                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Enter your Payment Details</h4>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Name on Card</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="ccname" placeholder="Card Name" value="John Wick">
                                                        <span class="form-text text-muted">Please enter your Card Name.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Card Number</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Card Expiry Month</label>
                                                        <input type="number" class="form-control form-control-solid form-control-lg" name="ccmonth" placeholder="Card Expiry Month" value="01">
                                                        <span class="form-text text-muted">Please enter your Card Expiry Month.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Card Expiry Year</label>
                                                        <input type="number" class="form-control form-control-solid form-control-lg" name="ccyear" placeholder="Card Expire Year" value="21">
                                                        <span class="form-text text-muted">Please enter your Card Expiry Year.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Card CVV Number</label>
                                                        <input type="password" class="form-control form-control-solid form-control-lg" name="cccvv" placeholder="Card CVV Number" value="123">
                                                        <span class="form-text text-muted">Please enter your Card CVV Number.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 5-->


                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                    Previous
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->

                                        <div></div><div></div><div></div><div></div><div></div></form>
                                </div>
                                <!--end: Wizard-->
                            </div>
                            <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>