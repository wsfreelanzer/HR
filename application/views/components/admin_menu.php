<header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class=
                "navbar-brand toggle-sidebar visible-xs visible-sm octicon octicon-three-bars"
                style="font-style: italic"></a> <a class=
                "navbar-brand navbar-home hidden-xs hidden-sm" href=
                "#"><img class="erpnext-icon" src=
                "<?=base_url()?>assets/images/erp-icon.svg"></a>

                <ul class="nav navbar-nav" id="navbar-breadcrumbs"></ul>
            </div>

            <div class="navbar-center text-ellipsis" style=
            "display: none;">
                Human Resources
            </div>

            <div class="hidden-xs hidden-sm">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;"><img alt="E1" class="navbar-user-image" src="https://secure.gravatar.com/avatar/7b7bc2512ee1fedcd76bdc68926d4f7b?d=retro">
                        <span class="text-ellipsis toolbar-user-fullname"><?=$this->session->userdata('username'); ?></span> <b class="caret"></b></a>

                        <ul class="dropdown-menu" id="toolbar-user">
                            <li>
                                <a href="#Form/User/Administrator">My
                                Settings</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#" onclick=
                                "return frappe.ui.toolbar.show_about();">About</a>
                            </li>

                            <li>
                                <a data-link="docs" href=
                                "https://manual.erpnext.com" target=
                                "_blank">Documentation</a>
                            </li>


                            <li class="divider"></li>

                            <li>
                                <a href="<?=site_url('auth/logout')?>">Logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <form class="navbar-form navbar-right" onsubmit=
                "return false;">
                    <div class="form-group form-group-sm ui-front">
                        <input autocomplete="off" class=
                        "form-control ui-autocomplete-input" id=
                        "navbar-search" placeholder=
                        "Search or type a command (Ctrl + G)" type="text">
                        <span class=
                        "octicon octicon-search navbar-search-icon"></span>

                        <ul class=
                        "ui-autocomplete ui-front ui-menu ui-widget ui-widget-content"
                        id="ui-id-1" style="display: none;" tabindex="0">
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header> <!-- header -->