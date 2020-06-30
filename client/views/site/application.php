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
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Applicant Information
                                            </h3>
                                            <div class="wizard-desc">
                                                Setup Your Applicant Details
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->

                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/Map/Compass.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000"></path>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Setup Locations
                                            </h3>
                                            <div class="wizard-desc">
                                                Choose Your Location Map
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->

                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/General/Thunder-move.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"></path>
        <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Support Channels
                                            </h3>
                                            <div class="wizard-desc">
                                                Add Your Support Agents
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->

                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/Map/Position.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6 11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18 12,18 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="2"></circle>
        <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Set Your Delivery Address
                                            </h3>
                                            <div class="wizard-desc">
                                                Address, Street, City, State
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->

                                <!--begin::Wizard Step 5 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/Shopping/Credit-card.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"></rect>
        <rect fill="#000000" x="2" y="8" width="20" height="3"></rect>
        <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"></rect>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Make Payment
                                            </h3>
                                            <div class="wizard-desc">
                                                Use Credit or Debit Cards
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 5 Nav-->

                                <!--begin::Wizard Step 6 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo10/dist/assets/media/svg/icons/General/Like.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000"></path>
        <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"></rect>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                Completed!
                                            </h3>
                                            <div class="wizard-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 6 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->

                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="offset-xxl-2 col-xxl-8">
                                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h4 class="mb-10 font-weight-bold text-dark">Applicant Information: </h4>

                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Given Name:</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="gname" placeholder="Given Name" value="">
                                                        <span class="form-text text-muted">Please enter your given name.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Sur Name:</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="sname" placeholder="Sur Name" value="">
                                                        <span class="form-text text-muted">Please enter your sur name.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-4">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Middle Name:</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="mname" placeholder="Middle Name" value="">
                                                        <span class="form-text text-muted">Please enter your middle name.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group date fv-plugins-icon-container has-success">
                                                        <label>Date of Birth:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control form-control-solid form-control-lg is-valid" readonly="" value="12/12/2020" id="kt_datepicker_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
<!--                                                        <input type="tel" class="form-control form-control-solid form-control-lg is-valid" name="phone" placeholder="phone" value="+61412345678">-->
                                                        <span class="form-text text-muted">Please enter your date of birth.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-success">
                                                        <label>National id: </label>
                                                        <input type="number" class="form-control form-control-solid form-control-lg" name="nid" placeholder="National ID" value="">
                                                        <span class="form-text text-muted">Please enter your National ID.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-success">
                                                        <label>Gender: </label>
                                                            <select class="form-control form-control-solid form-control-lg" name="gender" id="formControl1">
                                                                <option value>Select</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
<!--                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="nid" placeholder="National ID" value="">-->
                                                        <span class="form-text text-muted">Please enter your Gender.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-success">
                                                        <label>Marital Status: </label>
                                                        <select class="form-control form-control-solid form-control-lg" name="mstatus" id="formControl2">
                                                            <option value>Select</option>
                                                            <option value="married">Married</option>
                                                            <option value="unmarried">Un-Married</option>
                                                        </select>
                                                        <span class="form-text text-muted">Please enter your Gender.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="form-group fv-plugins-icon-container has-danger">
                                                <label>Profession:</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="profession" placeholder="Profession" value="">
                                                <span class="form-text text-muted">Please enter your Profession.</span>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>

                                            <hr>

                                            <h4 class="mb-10 font-weight-bold text-dark">Passport Details: </h4>

                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Passport Number:</label>
                                                        <input type="number" class="form-control form-control-solid form-control-lg" name="passport_number" placeholder="Passport Number" value="">
                                                        <span class="form-text text-muted">Please enter your passport number.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Passport Type:</label>
                                                        <select class="form-control form-control-solid form-control-lg" name="passport_type" id="passport_type">
                                                            <option value>Select</option>
                                                            <option value="typeA">Type A</option>
                                                            <option value="typeB">Type B</option>
                                                        </select>
                                                        <span class="form-text text-muted">Please select your passport type.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group date fv-plugins-icon-container has-success">
                                                        <label>Issue Date:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control form-control-solid form-control-lg is-valid" readonly="" value="12/12/2020" id="kt_datepicker_3">
                                                            <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <span class="form-text text-muted">Please enter your passport issue date.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-success">
                                                        <label>Expiry Date:</label>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control form-control-solid form-control-lg is-valid" readonly="" value="12/12/2020" id="kt_datepicker_3">
                                                            <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="la la-calendar"></i>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <span class="form-text text-muted">Please enter your passport expiry date.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Place of Issue:</label>

                                                        <div class="dropdown bootstrap-select form-control dropup"><select class="form-control selectpicker" data-size="7" data-live-search="true" tabindex="null">
                                                                <option value="">Select</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AQ">Antarctica</option>
                                                                <option value="AG">Antigua and Barbuda</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Côte d'Ivoire</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CW">Curaçao</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GG">Guernsey</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran, Islamic Republic of</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IM">Isle of Man</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JE">Jersey</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macao</option>
                                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="ME">Montenegro</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Réunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="BL">Saint Barthélemy</option>
                                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="MF">Saint Martin (French part)</option>
                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TL">Timor-Leste</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US" selected="selected">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands, British</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                                <option value="WF">Wallis and Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>

                                                            <button type="button" tabindex="-1" style="display: none;" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Uruguay"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Uruguay</div></div> </div></button><div class="dropdown-menu" style="max-height: 343px; overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-5" aria-autocomplete="list" aria-activedescendant="bs-select-5-238"></div><div class="inner show" role="listbox" id="bs-select-5" tabindex="-1" style="max-height: 273px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li><a role="option" class="dropdown-item" id="bs-select-5-0" tabindex="0" aria-setsize="250" aria-posinset="1"><span class=" bs-ok-default check-mark"></span><span class="text">Select</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-1" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Afghanistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-2" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Åland Islands</span></a></li><li class=""><a role="option" class="dropdown-item" id="bs-select-5-3" tabindex="0" aria-setsize="63" aria-posinset="1"><span class=" bs-ok-default check-mark"></span><span class="text">Albania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-4" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Algeria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-5" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">American Samoa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-6" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Andorra</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-7" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Angola</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-8" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Anguilla</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-9" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Antarctica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-10" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Antigua and Barbuda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-11" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Argentina</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-12" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Armenia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-13" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Aruba</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-14" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Australia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-15" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Austria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-16" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Azerbaijan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-17" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bahamas</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-18" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bahrain</span></a></li><li class=""><a role="option" class="dropdown-item" id="bs-select-5-19" tabindex="0" aria-setsize="1" aria-posinset="1"><span class=" bs-ok-default check-mark"></span><span class="text">Bangladesh</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-20" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Barbados</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-21" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Belarus</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-22" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Belgium</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-23" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Belize</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-24" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Benin</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-25" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bermuda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-26" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bhutan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-27" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bolivia, Plurinational State of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-28" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bonaire, Sint Eustatius and Saba</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-29" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bosnia and Herzegovina</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-30" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Botswana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-31" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bouvet Island</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-32" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Brazil</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-33" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">British Indian Ocean Territory</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-34" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Brunei Darussalam</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-35" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bulgaria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-36" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Burkina Faso</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-37" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Burundi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-38" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cambodia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-39" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cameroon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-40" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Canada</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-41" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cape Verde</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-42" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cayman Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-43" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Central African Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-44" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Chad</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-45" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Chile</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-46" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">China</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-47" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Christmas Island</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-48" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cocos (Keeling) Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-49" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Colombia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-50" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Comoros</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-51" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Congo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-52" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Congo, the Democratic Republic of the</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-53" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cook Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-54" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Costa Rica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-55" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Côte d'Ivoire</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-56" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Croatia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-57" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cuba</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-58" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Curaçao</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-59" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cyprus</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-60" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Czech Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-61" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Denmark</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-62" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Djibouti</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-63" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Dominica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-64" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Dominican Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-65" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ecuador</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-66" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Egypt</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-67" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">El Salvador</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-68" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Equatorial Guinea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-69" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Eritrea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-70" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Estonia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-71" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ethiopia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-72" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Falkland Islands (Malvinas)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-73" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Faroe Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-74" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Fiji</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-75" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Finland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-76" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">France</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-77" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">French Guiana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-78" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">French Polynesia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-79" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">French Southern Territories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-80" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Gabon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-81" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Gambia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-82" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Georgia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-83" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Germany</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-84" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ghana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-85" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Gibraltar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-86" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Greece</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-87" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Greenland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-88" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Grenada</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-89" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guadeloupe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-90" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guam</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-91" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guatemala</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-92" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guernsey</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-93" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guinea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-94" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guinea-Bissau</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-95" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guyana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-96" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Haiti</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-97" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Heard Island and McDonald Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-98" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Holy See (Vatican City State)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-99" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Honduras</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-100" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Hong Kong</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-101" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Hungary</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-102" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Iceland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-103" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">India</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-104" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Indonesia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-105" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Iran, Islamic Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-106" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Iraq</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-107" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ireland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-108" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Isle of Man</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-109" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Israel</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-110" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Italy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-111" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Jamaica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-112" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Japan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-113" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Jersey</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-114" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Jordan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-115" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kazakhstan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-116" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kenya</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-117" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kiribati</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-118" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Korea, Democratic People's Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-119" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Korea, Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-120" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kuwait</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-121" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kyrgyzstan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-122" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lao People's Democratic Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-123" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Latvia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-124" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lebanon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-125" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lesotho</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-126" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Liberia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-127" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Libya</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-128" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Liechtenstein</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-129" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lithuania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-130" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Luxembourg</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-131" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Macao</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-132" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Macedonia, the former Yugoslav Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-133" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Madagascar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-134" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Malawi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-135" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Malaysia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-136" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Maldives</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-137" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mali</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-138" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Malta</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-139" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Marshall Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-140" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Martinique</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-141" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mauritania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-142" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mauritius</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-143" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mayotte</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-144" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mexico</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-145" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Micronesia, Federated States of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-146" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Moldova, Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-147" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Monaco</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-148" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mongolia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-149" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Montenegro</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-150" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Montserrat</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-151" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Morocco</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-152" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mozambique</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-153" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Myanmar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-154" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Namibia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-155" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nauru</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-156" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nepal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-157" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Netherlands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-158" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">New Caledonia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-159" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">New Zealand</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-160" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nicaragua</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-161" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Niger</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-162" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nigeria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-163" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Niue</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-164" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Norfolk Island</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-165" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Northern Mariana Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-166" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Norway</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-167" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Oman</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-168" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Pakistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-169" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Palau</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-170" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Palestinian Territory, Occupied</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-171" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Panama</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-172" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Papua New Guinea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-173" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Paraguay</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-174" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Peru</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-175" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Philippines</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-176" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Pitcairn</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-177" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Poland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-178" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Portugal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-179" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Puerto Rico</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-180" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Qatar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-181" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Réunion</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-182" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Romania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-183" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Russian Federation</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-184" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Rwanda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-185" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Barthélemy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-186" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Helena, Ascension and Tristan da Cunha</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-187" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Kitts and Nevis</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-188" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Lucia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-189" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Martin (French part)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-190" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Pierre and Miquelon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-191" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Vincent and the Grenadines</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-192" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Samoa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-193" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">San Marino</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-194" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sao Tome and Principe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-195" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saudi Arabia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-196" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Senegal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-197" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Serbia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-198" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Seychelles</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-199" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sierra Leone</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-200" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Singapore</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-201" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sint Maarten (Dutch part)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-202" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Slovakia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-203" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Slovenia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-204" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Solomon Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-205" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Somalia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-206" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">South Africa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-207" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">South Georgia and the South Sandwich Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-208" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">South Sudan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-209" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Spain</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-210" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sri Lanka</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-211" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sudan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-212" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Suriname</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-213" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Svalbard and Jan Mayen</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-214" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Swaziland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-215" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sweden</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-216" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Switzerland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-217" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Syrian Arab Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-218" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Taiwan, Province of China</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-219" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tajikistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-220" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tanzania, United Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-221" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Thailand</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-222" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Timor-Leste</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-223" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Togo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-224" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tokelau</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-225" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tonga</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-226" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Trinidad and Tobago</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-227" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tunisia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-228" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Turkey</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-229" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Turkmenistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-230" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Turks and Caicos Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-231" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tuvalu</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-232" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Uganda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-233" tabindex="0" aria-setsize="250" aria-posinset="234"><span class=" bs-ok-default check-mark"></span><span class="text">Ukraine</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-234" tabindex="0" aria-setsize="250" aria-posinset="235"><span class=" bs-ok-default check-mark"></span><span class="text">United Arab Emirates</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-235" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">United Kingdom</span></a></li><li class=""><a role="option" class="dropdown-item" id="bs-select-5-236" tabindex="0" aria-setsize="250" aria-posinset="237"><span class=" bs-ok-default check-mark"></span><span class="text">United States</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-237" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">United States Minor Outlying Islands</span></a></li><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-5-238" tabindex="0" aria-setsize="250" aria-posinset="239" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">Uruguay</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-239" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Uzbekistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-240" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Vanuatu</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-241" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Venezuela, Bolivarian Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-242" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Viet Nam</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-243" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Virgin Islands, British</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-244" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Virgin Islands, U.S.</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-245" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Wallis and Futuna</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-246" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Western Sahara</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-247" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Yemen</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-248" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Zambia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-249" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Zimbabwe</span></a></li></ul></div></div></div>

<!--                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="profession" placeholder="Profession" value="">-->
                                                        <span class="form-text text-muted">Please enter your Profession.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Nationality:</label>

                                                        <div class="dropdown bootstrap-select form-control dropup"><select class="form-control selectpicker" data-size="7" data-live-search="true" tabindex="null">
                                                                <option value="">Select</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AQ">Antarctica</option>
                                                                <option value="AG">Antigua and Barbuda</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Côte d'Ivoire</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CW">Curaçao</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GG">Guernsey</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran, Islamic Republic of</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IM">Isle of Man</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JE">Jersey</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macao</option>
                                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="ME">Montenegro</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Réunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="BL">Saint Barthélemy</option>
                                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="MF">Saint Martin (French part)</option>
                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TL">Timor-Leste</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US" selected="selected">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands, British</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                                <option value="WF">Wallis and Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>

                                                            <button type="button" tabindex="-1" style="display: none;" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Uruguay"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Uruguay</div></div> </div></button><div class="dropdown-menu" style="max-height: 343px; overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-5" aria-autocomplete="list" aria-activedescendant="bs-select-5-238"></div><div class="inner show" role="listbox" id="bs-select-5" tabindex="-1" style="max-height: 273px; overflow-y: auto;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li><a role="option" class="dropdown-item" id="bs-select-5-0" tabindex="0" aria-setsize="250" aria-posinset="1"><span class=" bs-ok-default check-mark"></span><span class="text">Select</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-1" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Afghanistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-2" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Åland Islands</span></a></li><li class=""><a role="option" class="dropdown-item" id="bs-select-5-3" tabindex="0" aria-setsize="63" aria-posinset="1"><span class=" bs-ok-default check-mark"></span><span class="text">Albania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-4" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Algeria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-5" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">American Samoa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-6" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Andorra</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-7" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Angola</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-8" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Anguilla</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-9" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Antarctica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-10" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Antigua and Barbuda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-11" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Argentina</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-12" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Armenia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-13" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Aruba</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-14" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Australia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-15" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Austria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-16" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Azerbaijan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-17" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bahamas</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-18" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bahrain</span></a></li><li class=""><a role="option" class="dropdown-item" id="bs-select-5-19" tabindex="0" aria-setsize="1" aria-posinset="1"><span class=" bs-ok-default check-mark"></span><span class="text">Bangladesh</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-20" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Barbados</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-21" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Belarus</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-22" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Belgium</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-23" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Belize</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-24" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Benin</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-25" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bermuda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-26" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bhutan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-27" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bolivia, Plurinational State of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-28" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bonaire, Sint Eustatius and Saba</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-29" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bosnia and Herzegovina</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-30" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Botswana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-31" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bouvet Island</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-32" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Brazil</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-33" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">British Indian Ocean Territory</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-34" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Brunei Darussalam</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-35" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Bulgaria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-36" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Burkina Faso</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-37" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Burundi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-38" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cambodia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-39" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cameroon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-40" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Canada</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-41" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cape Verde</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-42" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cayman Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-43" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Central African Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-44" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Chad</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-45" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Chile</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-46" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">China</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-47" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Christmas Island</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-48" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cocos (Keeling) Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-49" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Colombia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-50" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Comoros</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-51" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Congo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-52" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Congo, the Democratic Republic of the</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-53" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cook Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-54" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Costa Rica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-55" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Côte d'Ivoire</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-56" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Croatia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-57" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cuba</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-58" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Curaçao</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-59" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Cyprus</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-60" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Czech Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-61" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Denmark</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-62" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Djibouti</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-63" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Dominica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-64" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Dominican Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-65" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ecuador</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-66" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Egypt</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-67" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">El Salvador</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-68" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Equatorial Guinea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-69" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Eritrea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-70" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Estonia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-71" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ethiopia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-72" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Falkland Islands (Malvinas)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-73" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Faroe Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-74" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Fiji</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-75" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Finland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-76" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">France</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-77" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">French Guiana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-78" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">French Polynesia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-79" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">French Southern Territories</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-80" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Gabon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-81" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Gambia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-82" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Georgia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-83" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Germany</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-84" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ghana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-85" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Gibraltar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-86" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Greece</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-87" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Greenland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-88" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Grenada</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-89" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guadeloupe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-90" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guam</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-91" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guatemala</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-92" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guernsey</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-93" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guinea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-94" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guinea-Bissau</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-95" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Guyana</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-96" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Haiti</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-97" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Heard Island and McDonald Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-98" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Holy See (Vatican City State)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-99" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Honduras</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-100" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Hong Kong</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-101" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Hungary</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-102" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Iceland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-103" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">India</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-104" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Indonesia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-105" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Iran, Islamic Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-106" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Iraq</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-107" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Ireland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-108" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Isle of Man</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-109" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Israel</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-110" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Italy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-111" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Jamaica</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-112" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Japan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-113" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Jersey</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-114" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Jordan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-115" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kazakhstan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-116" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kenya</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-117" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kiribati</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-118" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Korea, Democratic People's Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-119" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Korea, Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-120" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kuwait</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-121" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Kyrgyzstan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-122" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lao People's Democratic Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-123" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Latvia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-124" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lebanon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-125" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lesotho</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-126" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Liberia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-127" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Libya</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-128" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Liechtenstein</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-129" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Lithuania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-130" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Luxembourg</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-131" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Macao</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-132" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Macedonia, the former Yugoslav Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-133" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Madagascar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-134" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Malawi</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-135" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Malaysia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-136" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Maldives</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-137" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mali</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-138" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Malta</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-139" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Marshall Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-140" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Martinique</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-141" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mauritania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-142" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mauritius</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-143" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mayotte</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-144" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mexico</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-145" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Micronesia, Federated States of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-146" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Moldova, Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-147" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Monaco</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-148" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mongolia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-149" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Montenegro</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-150" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Montserrat</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-151" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Morocco</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-152" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Mozambique</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-153" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Myanmar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-154" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Namibia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-155" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nauru</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-156" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nepal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-157" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Netherlands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-158" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">New Caledonia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-159" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">New Zealand</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-160" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nicaragua</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-161" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Niger</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-162" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Nigeria</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-163" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Niue</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-164" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Norfolk Island</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-165" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Northern Mariana Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-166" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Norway</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-167" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Oman</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-168" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Pakistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-169" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Palau</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-170" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Palestinian Territory, Occupied</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-171" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Panama</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-172" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Papua New Guinea</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-173" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Paraguay</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-174" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Peru</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-175" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Philippines</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-176" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Pitcairn</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-177" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Poland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-178" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Portugal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-179" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Puerto Rico</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-180" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Qatar</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-181" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Réunion</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-182" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Romania</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-183" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Russian Federation</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-184" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Rwanda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-185" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Barthélemy</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-186" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Helena, Ascension and Tristan da Cunha</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-187" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Kitts and Nevis</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-188" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Lucia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-189" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Martin (French part)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-190" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Pierre and Miquelon</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-191" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saint Vincent and the Grenadines</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-192" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Samoa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-193" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">San Marino</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-194" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sao Tome and Principe</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-195" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Saudi Arabia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-196" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Senegal</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-197" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Serbia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-198" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Seychelles</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-199" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sierra Leone</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-200" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Singapore</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-201" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sint Maarten (Dutch part)</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-202" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Slovakia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-203" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Slovenia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-204" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Solomon Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-205" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Somalia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-206" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">South Africa</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-207" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">South Georgia and the South Sandwich Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-208" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">South Sudan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-209" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Spain</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-210" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sri Lanka</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-211" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sudan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-212" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Suriname</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-213" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Svalbard and Jan Mayen</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-214" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Swaziland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-215" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Sweden</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-216" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Switzerland</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-217" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Syrian Arab Republic</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-218" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Taiwan, Province of China</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-219" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tajikistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-220" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tanzania, United Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-221" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Thailand</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-222" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Timor-Leste</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-223" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Togo</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-224" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tokelau</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-225" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tonga</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-226" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Trinidad and Tobago</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-227" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tunisia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-228" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Turkey</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-229" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Turkmenistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-230" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Turks and Caicos Islands</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-231" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Tuvalu</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-232" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Uganda</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-233" tabindex="0" aria-setsize="250" aria-posinset="234"><span class=" bs-ok-default check-mark"></span><span class="text">Ukraine</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-234" tabindex="0" aria-setsize="250" aria-posinset="235"><span class=" bs-ok-default check-mark"></span><span class="text">United Arab Emirates</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-235" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">United Kingdom</span></a></li><li class=""><a role="option" class="dropdown-item" id="bs-select-5-236" tabindex="0" aria-setsize="250" aria-posinset="237"><span class=" bs-ok-default check-mark"></span><span class="text">United States</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-237" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">United States Minor Outlying Islands</span></a></li><li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-5-238" tabindex="0" aria-setsize="250" aria-posinset="239" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">Uruguay</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-239" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Uzbekistan</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-240" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Vanuatu</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-241" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Venezuela, Bolivarian Republic of</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-242" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Viet Nam</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-243" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Virgin Islands, British</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-244" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Virgin Islands, U.S.</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-245" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Wallis and Futuna</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-246" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Western Sahara</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-247" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Yemen</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-248" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Zambia</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-5-249" tabindex="0"><span class=" bs-ok-default check-mark"></span><span class="text">Zimbabwe</span></a></li></ul></div></div></div>

                                                        <!--                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="profession" placeholder="Profession" value="">-->
                                                        <span class="form-text text-muted">Please enter your Profession.</span>
                                                        <div class="fv-plugins-message-container"></div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000">
                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>City</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="Melbourne">
                                                        <span class="form-text text-muted">Please enter your City.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>State</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC">
                                                        <span class="form-text text-muted">Please enter your State.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Country</label>
                                                        <select name="country" class="form-control form-control-solid form-control-lg">
                                                            <option value="">Select</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU" selected="">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands, British</option>
                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 2-->

                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Select your Services</h4>
                                            <!--begin::Select-->
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>Delivery Type:</label>
                                                <select name="delivery" class="form-control form-control-solid form-control-lg">
                                                    <option value="">Select a Service Type Option</option>
                                                    <option value="overnight" selected="">Overnight Delivery (within 48 hours)</option>
                                                    <option value="express">Express Delivery (within 5 working days)</option>
                                                    <option value="basic">Basic Delivery (within 5 - 10 working days)</option>
                                                </select>
                                                <div class="fv-plugins-message-container"></div></div>
                                            <!--end::Select-->

                                            <!--begin::Select-->
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>Packaging Type:</label>
                                                <select name="packaging" class="form-control form-control-solid form-control-lg">
                                                    <option value="">Select a Packaging Type Option</option>
                                                    <option value="regular" selected="">Regular Packaging</option>
                                                    <option value="oversized">Oversized Packaging</option>
                                                    <option value="fragile">Fragile Packaging</option>
                                                    <option value="frozen">Frozen Packaging</option>
                                                </select>
                                                <div class="fv-plugins-message-container"></div></div>
                                            <!--end::Select-->

                                            <!--begin::Select-->
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>Preferred Delivery Window:</label>
                                                <select name="preferreddelivery" class="form-control form-control-solid form-control-lg">
                                                    <option value="">Select a Preferred Delivery Option</option>
                                                    <option value="morning" selected="">Morning Delivery (8:00AM - 11:00AM)</option>
                                                    <option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
                                                    <option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
                                                </select>
                                                <div class="fv-plugins-message-container"></div></div>
                                            <!--end::Select-->
                                        </div>
                                        <!--end: Wizard Step 3-->

                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-dark">Setup Your Delivery Location</h4>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Address Line 1</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="locaddress1" placeholder="Address Line 1" value="Address Line 1">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Address Line 2</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="locaddress2" placeholder="Address Line 2" value="Address Line 2">
                                                        <span class="form-text text-muted">Please enter your Address.</span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="locpostcode" placeholder="Postcode" value="3072">
                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>City</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="loccity" placeholder="City" value="Preston">
                                                        <span class="form-text text-muted">Please enter your City.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>State</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="locstate" placeholder="State" value="VIC">
                                                        <span class="form-text text-muted">Please enter your state.</span>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Country</label>
                                                        <select name="loccountry" class="form-control form-control-solid form-control-lg">
                                                            <option value="">Select</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU" selected="">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia, Federated States of</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands, British</option>
                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                        <div class="fv-plugins-message-container"></div></div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>

                                        </div>
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

                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Section-->
                                            <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                            <h6 class="font-weight-bolder mb-3">
                                                Current Address:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Address Line 1</div>
                                                <div>Address Line 2</div>
                                                <div>Melbourne 3000, VIC, Australia</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->

                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">
                                                Delivery Details:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Package: Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)</div>
                                                <div>Weight: 25kg</div>
                                                <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->

                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">
                                                Delivery Service Type:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Overnight Delivery with Regular Packaging</div>
                                                <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                            </div>
                                            <div class="separator separator-dashed my-5"></div>
                                            <!--end::Section-->

                                            <!--begin::Section-->
                                            <h6 class="font-weight-bolder mb-3">
                                                Delivery Address:
                                            </h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div>Address Line 1</div>
                                                <div>Address Line 2</div>
                                                <div>Preston 3072, VIC, Australia</div>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end: Wizard Step 6-->

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