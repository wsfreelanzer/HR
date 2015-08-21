
<div class="container-fluid" data-html-block="content">
<div class="content page-container">
    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-xs-6 page-title">
                    <h1>
                    <div class="text-ellipsis title-text">
                        <h1><span class="hidden-xs hidden-sm">Human
                        Resources</span> <span class=
                        "hidden-md hidden-lg">Documents</span>
                        <span class="indicator hide"></span></h1>
                    </div>
                    </h1>
                </div>

                <div class="text-right col-sm-5 col-xs-6 page-actions">
                    <h6 class=
                    "text-ellipsis sub-heading rtl hide text-muted">
                    </h6><span class=
                    "page-icon-group hide hidden-xs hidden-sm"></span>

                    <div class="btn-group menu-btn-group hide">
                        <button class=
                        "btn btn-default btn-sm dropdown-toggle"
                        data-toggle="dropdown" type=
                        "button"><span class="hidden-xs"><span class=
                        "menu-btn-group-label">Menu</span> <span class=
                        "caret"></span></span> <span class=
                        "visible-xs octicon octicon-triangle-down"
                        style="font-style: italic"></span></button>

                        <ul class="dropdown-menu"></ul>
                    </div><button class=
                    "btn btn-secondary btn-default btn-sm hide"></button>

                    <div class="btn-group actions-btn-group hide">
                        <button class=
                        "btn btn-primary btn-sm dropdown-toggle"
                        data-toggle="dropdown" type="button">Actions
                        <span class="caret"></span></button>

                        <ul class="dropdown-menu"></ul>
                    </div><button class=
                    "btn btn-primary btn-sm hide primary-action"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container page-body">
        <div class="page-toolbar hide">
            <div class="container"></div>
        </div>

        <div class="page-wrapper">
            <div class="page-content">
                <div class=
                "workflow-button-area btn-group pull-right hide"></div>

                <div class="clearfix"></div>

                <div class="row layout-main">
                    
                    <div class="col-md-2 layout-side-section hidden-xs hidden-sm">
                        <?php $this->load->view('components/admin_sidebar'); ?>
                    </div>


                    <div class="col-md-10 layout-main-section-wrapper">
                        <div class="layout-main-section">
                         
                            <div class="module-section">
                                <div class="row module-item">
                                    <div class="col-xs-8">
                                        <h4>HR Settings</h4><span class="open-notification hide"
                                        data-doctype="HR Settings"></span>

                                        <p class="text-muted small module-item-description">Settings for HR
                                        Module</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;"></div>
                                </div>

                                <div class="row module-item">
                                    <a href="<?=site_url('setup/index/employment_type')?>">
                                    <div class="col-xs-8">
                                        <h4>Employment Type</h4><span class="open-notification hide"></span>

                                        <p class="text-muted small module-item-description">Types of
                                        employment (permanent, contract, intern etc.).</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" title="07-08-2015 18:30:06">11 days
                                        ago</span>
                                    </div>
                                    </a>
                                </div>

                                <div class="row module-item">
                                    <a href="<?=site_url('setup/index/branch')?>">
                                    <div class="col-xs-8">
                                        <h4>Branch</h4><span class="open-notification hide" ></span>

                                        <p class="text-muted small module-item-description">Organization
                                        branch master.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" title="07-08-2015 18:32:13">11 days
                                        ago</span>
                                    </div>
                                    </a>
                                </div>

                                <div class="row module-item" data-item-index="3" data-label="Department"
                                data-route="List/Department">
                                    <div class="col-xs-8">
                                        <h4>Department</h4><span class="open-notification hide"
                                        data-doctype="Department"></span>

                                        <p class="text-muted small module-item-description">Organization
                                        unit (department) master.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 18:33:54.549734" title="07-08-2015 18:33:54">11 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="4" data-label="Designation"
                                data-route="List/Designation">
                                    <div class="col-xs-8">
                                        <h4>Designation</h4><span class="open-notification hide"
                                        data-doctype="Designation"></span>

                                        <p class="text-muted small module-item-description">Employee
                                        designation (e.g. CEO, Director etc.).</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-03 16:48:38.963074" title="03-08-2015 16:48:38">15 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="5" data-label=
                                "Salary Structure" data-route="List/Salary Structure">
                                    <div class="col-xs-8">
                                        <h4>Salary Structure</h4><span class="open-notification hide"
                                        data-doctype="Salary Structure"></span>

                                        <p class="text-muted small module-item-description">Salary template
                                        master.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 18:58:45.021085" title="07-08-2015 18:58:45">11 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="6" data-label="Earning Type"
                                data-route="List/Earning Type">
                                    <div class="col-xs-8">
                                        <h4>Earning Type</h4><span class="open-notification hide"
                                        data-doctype="Earning Type"></span>

                                        <p class="text-muted small module-item-description">Salary
                                        components.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-03 16:48:38.569010" title="03-08-2015 16:48:38">15 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="7" data-label=
                                "Deduction Type" data-route="List/Deduction Type">
                                    <div class="col-xs-8">
                                        <h4>Deduction Type</h4><span class="open-notification hide"
                                        data-doctype="Deduction Type"></span>

                                        <p class="text-muted small module-item-description">Tax and other
                                        salary deductions.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-05 18:35:20.932716" title="05-08-2015 18:35:20">13 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="8" data-label=
                                "Leave Allocation" data-route="List/Leave Allocation">
                                    <div class="col-xs-8">
                                        <h4>Leave Allocation</h4><span class="open-notification hide"
                                        data-doctype="Leave Allocation"></span>

                                        <p class="text-muted small module-item-description">Allocate leaves
                                        for a period.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;"></div>
                                </div>

                                <div class="row module-item" data-item-index="9" data-label="Leave Type"
                                data-route="List/Leave Type">
                                    <div class="col-xs-8">
                                        <h4>Leave Type</h4><span class="open-notification hide"
                                        data-doctype="Leave Type"></span>

                                        <p class="text-muted small module-item-description">Type of leaves
                                        like casual, sick etc.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-05 18:39:50.067617" title="05-08-2015 18:39:50">13 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="10" data-label="Holiday List"
                                data-route="List/Holiday List">
                                    <div class="col-xs-8">
                                        <h4>Holiday List</h4><span class="open-notification hide"
                                        data-doctype="Holiday List"></span>

                                        <p class="text-muted small module-item-description">Holiday
                                        master.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 18:31:26.375142" title="07-08-2015 18:31:26">11 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="11" data-label=
                                "Leave Block List" data-route="List/Leave Block List">
                                    <div class="col-xs-8">
                                        <h4>Leave Block List</h4><span class="open-notification hide"
                                        data-doctype="Leave Block List"></span>

                                        <p class="text-muted small module-item-description">Block leave
                                        applications by department.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 18:33:22.980915" title="07-08-2015 18:33:22">11 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="12" data-label=
                                "Appraisal Template" data-route="List/Appraisal Template">
                                    <div class="col-xs-8">
                                        <h4>Appraisal Template</h4><span class="open-notification hide"
                                        data-doctype="Appraisal Template"></span>

                                        <p class="text-muted small module-item-description">Template for
                                        performance appraisals.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 19:02:28.936094" title="07-08-2015 19:02:28">11 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="13" data-label=
                                "Expense Claim Type" data-route="List/Expense Claim Type">
                                    <div class="col-xs-8">
                                        <h4>Expense Claim Type</h4><span class="open-notification hide"
                                        data-doctype="Expense Claim Type"></span>

                                        <p class="text-muted small module-item-description">Types of
                                        Expense Claim.</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 18:42:50.368721" title="07-08-2015 18:42:50">11 days
                                        ago</span>
                                    </div>
                                </div>

                                <div class="row module-item" data-item-index="14" data-label=
                                "Email Account" data-route="List/Email Account">
                                    <div class="col-xs-8">
                                        <h4>Email Account</h4><span class="open-notification hide"
                                        data-doctype="Email Account"></span>

                                        <p class="text-muted small module-item-description">Setup incoming
                                        server for jobs email id. (e.g. jobs@example.com)</p>
                                    </div>

                                    <div class="col-xs-4 text-muted text-right small" style=
                                    "padding-top: 5px;">
                                        <span class="frappe-timestamp" data-timestamp=
                                        "2015-08-07 03:45:51.180154" title="07-08-2015 03:45:51">12 days
                                        ago</span>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- /container -->