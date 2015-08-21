<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta content="" name="description">
    <meta content="" name="author">
    <link href=".assets/favicon.ico" rel="icon">

    <title>Human Resource System</title><!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap_another.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/website_theme.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/frappe-web.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/website.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand ellipsis" href=
                    "<?=base_url();?>"><span>ABC</span></a> <a class=
                    "pull-right toggle-sidebar visible-xs octicon octicon-three-bars"
                    style="font-style: italic"></a>
                </div>

                <div class="hidden-xs">
                    <!--
                    <ul class="nav navbar-nav navbar-left">
                        <li data-label="Contact">
                            <a href="/contact">Contact</a>
                        </li>

                        <li data-label="Blog">
                            <a href="/blog">Blog</a>
                        </li>

                        <li data-label="Products">
                            <a href="/products">Products</a>
                        </li>
                    </ul>
                    -->
                    
                    <ul class="nav navbar-nav navbar-right">
                        <!-- post login tools -->

                        <li class="dropdown logged-in hide" data-label=
                        "website-post-login" id="website-post-login" style=
                        "display: none">
                            <a class="dropdown-toggle" data-toggle="dropdown"
                            href="#"><span class=
                            "avatar avatar-small user-image-wrapper" style=
                            "margin-top: -4px;"><img class="user-image"></span>
                            <span class="visible-xs full-name"></span></a>

                            <ul class="dropdown-menu">
                                <li data-label="My Account">
                                    <a href="/me" rel="nofollow">My Account</a>
                                </li>

                                <li class="divider"></li>

                                <li data-label="Logout">
                                    <a href="/?cmd=web_logout" rel=
                                    "nofollow">Logout</a>
                                </li>

                                <li>
                                    <a href="/desk">Switch To Desk</a>
                                </li>
                            </ul>
                        </li>

                        <li class="btn-login-area">
                            <a href="<?=base_url('index.php')?>/auth/login">Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
