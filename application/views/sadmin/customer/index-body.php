<?php if( count( $this->session->flashdata('addItem') ) ): ?>
	<br>
<div class="alert alert-success">
	<?php $msg = $this->session->flashdata('addItem');?>
	<?php print_r($msg['msg']);?>
</div>
<?php endif;?>

<h1 class="page-header">Customer <a href="<?=site_url("s-admin/customer/add");?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button></a></h1>
<div class="panel-body">

    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- /.table-responsive -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script type="text/javascript">
	var contentDt;
	$(function() {
		contentDt = $('#data-table').dataTable({
			"responsive": true,
			"bProcessing": true,
			'bServerSide': true,
			'sAjaxSource': '/s-admin/customer/getData/',
			"sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col col-sm-6'p>>",
			"iDisplayLength": 15,
			"aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
			"sPaginationType": "full_numbers",
			"aaSorting": [[ 0, "desc" ]],
			"aoColumnDefs": [
				 { "bSortable": false, "aTargets": [ 2 ] },
				 { 'bVisible': false, 'aTargets': [0] }
			],
			"fnRowCallback": function( nRow, aData, iDisplayIndex ) {
			},
			"fnServerParams": function(aoData) {
			},
			"fnDrawCallback": function(oSettings) {
				$('.edit-page-btn').click(function() {
					if ($(this).attr('data-id')) {
						window.location = '/s-admin/customer/edit/' + $(this).attr('data-id') + '/';
					}
				});

				$('.order-page-btn').click(function() {
					if ($(this).attr('data-id')) {
						window.location = '/s-admin/customer/order/' + $(this).attr('data-id') + '/';
					}
				});
			}
		});
	});
	</script>

</div>