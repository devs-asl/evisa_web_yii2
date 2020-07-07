<?php
/**
 * Created by PhpStorm.
 * User: pranta
 * Date: 6/7/20
 * Time: 1:24 PM
 */

?>
<div class="pb-5" data-wizard-type="step-content">
    <h4 class="mb-10 font-weight-bold text-dark">Document Upload</h4>

    <div class="form-group row">
        <label class="col-lg-3 col-form-label text-lg-right">Full Name:</label>
        <div class="col-lg-6">
            <input type="text" class="form-control" placeholder="Enter full name" name="name">
            <span class="form-text text-muted">Please enter your full name</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label text-lg-right">Email:</label>
        <div class="col-lg-6">
            <input type="email" class="form-control" placeholder="Enter email" name="email">
            <span class="form-text text-muted">Please enter your email</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label text-lg-right">Message:</label>
        <div class="col-lg-6">
            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Please enter your message"></textarea>
            <span class="form-text text-muted">We'll never share your message with anyone else.</span>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label text-lg-right">Upload File:</label>
        <div class="col-lg-6">
            <div class="uppy" id="kt_uppy_5">
                <div class="uppy-wrapper"><div class="uppy-Root uppy-FileInput-container"><input class="uppy-FileInput-input uppy-input-control" type="file" name="files[]" multiple="" id="kt_uppy_5_input_control" style=""><label class="uppy-input-label btn btn-light-primary btn-sm btn-bold" for="kt_uppy_5_input_control">Attach files</label></div></div>
                <div class="uppy-list"></div>
                <div class="uppy-status"><div class="uppy-Root uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress
                           " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div></div>
                <div class="uppy-informer uppy-informer-min"><div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div></div>
            </div>
            <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
        </div>
    </div>

</div>

