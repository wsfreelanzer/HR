<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title">Title</h4>
</div>

<form id="setupModal">
<div class="modal-body">
	<div class="status"></div>
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" name="title" placeholder="Title" value="<?=$record->title?>">
	  </div>
	  <input type="hidden" name="setup_type" value="<?=$record->type?>">
	  <input type="hidden" name="ID" value="<?=$record->ID?>">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <a type="submit" class="btn btn-primary" id="formSave">Save changes</a>
</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
	$('#formSave').on('click',function(){
		submitFrm();
	});

	$('#setupModal').submit(function(){
		event.preventDefault();
		submitFrm();
	});

	function submitFrm(){
		$.ajax({
			type: "POST",
			url: "<?=site_url('setup/edit/')?>",
			data: $("#setupModal").serialize(),
			success: function(data) {
				var json = $.parseJSON(data);
				$('.status').html(json.msg);
				if(json.insert){
					location.reload();
				}	
			}
		});
	}

});
</script>