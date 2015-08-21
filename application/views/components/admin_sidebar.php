<?php 
    global $url ;
    $url= $this->uri->segment(1); 

    function checkUrl($val) { 
        global $url;
        return strcmp($url,$val) == 0; 
    }
?>
<ul class="module-sidebar-nav nav nav-pills nav-stacked">
    <li class="divider"></li>

    <li class="strong module-sidebar-item <?php echo checkUrl('dashboard')?'active':''; ?>">
        <a class="module-link" href="<?=base_url('index.php/dashboard')?>">
        <i class="icon icon-chevron-right pull-right" style="display: none;"></i>
        <span>Documents</span></a>
    </li>

    <li class="strong module-sidebar-item <?php echo checkUrl('tools')?'active':''; ?>">
        <a class="module-link" href="<?=base_url('index.php/tools')?>">
        <i class="icon icon-chevron-right pull-right" style="display: none;"></i>
        <span>Tools</span></a>
    </li>

    <li class="strong module-sidebar-item <?php echo checkUrl('setup')?'active':''; ?>">
        <a class="module-link" href="<?=base_url('index.php/setup')?>">
        <i class="icon icon-chevron-right pull-right" style="display: none;"></i>
        <span>Setup</span></a>
    </li>

    <li class="strong module-sidebar-item">
        <a class="module-link">
        <i class="icon icon-chevron-right pull-right" style="display: none;"></i>
        <span>Standard Reports</span></a>
    </li>

</ul>