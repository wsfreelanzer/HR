
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
                    <div class="btn-group menu-btn-group ">
                        <a href="<?=site_url().'/setup/edit/'.$setup_type.''?>" class="btn btn-primary btn-sm new_modal" data-toggle="modal" data-target="#baseModal">
                            <span class="menu-btn-group-label">New</span>
                        </a>
                        
                        <a href="#" class="btn btn-danger btn-sm bulk_delete" style="display:none">
                            <span class="menu-btn-group-label">Delete</span>
                        </a>

                    </div>
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
                        <div class="layout-main-section listview-main-section">
                            <div class="frappe-list-area">
                                <div class="frappe-list">
                                    <div class="space-top15"></div>
                                    <div class="status_msg"></div>
                                    <?php echo $this->table->generate(); ?>
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

<!-- page specific jQ -->
<script type="text/javascript">
    $(document).ready(function() {
    var oTable = $('#big_table').dataTable( {
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": '<?php echo site_url(); ?>/setup/list_data/<?=$setup_type?>',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "iDisplayStart ":20,
        "oLanguage": {
            "sProcessing": "<img src='<?php echo base_url(); ?>assets/images/ajax-loader.gif'>"
        },
        aoColumnDefs: [{ 'bSortable': false, 'aTargets': [ 0 ] }],
        aoColumns : [{ "sWidth": "5%"},{ "sWidth": "95%"},],
        "fnInitComplete": function() {
                //oTable.fnAdjustColumnSizing();
        },
        'fnServerData': function(sSource, aoData, fnCallback){
              $.ajax
              ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
              });
        },
        "fnDrawCallback": function (oSettings) {
          refreshSelectors()
        }
    } );

    $('.setup_all_select').change(function(){
        if(this.checked){
            $('.setup_selector').prop('checked',true);

            $('.new_modal').hide();
            $('.bulk_delete').show();
        }else{
            $('.new_modal').show();
            $('.bulk_delete').hide();
            $('.setup_selector').prop('checked',false);
        }
    });

    function refreshSelectors(){
        $('.setup_selector').change(function(){
            if(this.checked){
                $('.new_modal').hide();
                $('.bulk_delete').show();
            }else{
                if ( $('input[name="setup_arr[]"]:checked').length == 0 ){
                    $('.new_modal').show();
                    $('.bulk_delete').hide();    
                }
            }
        });
    }

    $('.bulk_delete').click(function(){
        var values = new Array();
        $('.setup_selector:checked').each(function(){
            values.push(this.value);
        });

        $.ajax({
            type:"POST",
            url:"<?=site_url('setup/delete/')?>",
            data:{ids:values},
            success:function(data){
                var json = $.parseJSON(data);
                $('.status_msg').html(json.msg);
                if(json.insert){
                    location.reload();
                }
            }
        });
    });
    
});

</script>

<!-- common modal -->
<!-- Modal -->
<div class="modal fade" id="baseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title">Please Wait..</h4>
        </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<script type="text/javascript">
$('#baseModal').on('hidden.bs.modal', function () {
  $(this).removeData('bs.modal');
});
</script>
<!-- /common modal -->