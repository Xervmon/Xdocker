	<div class="contentBlockDetails">
	
			<?php 
			if (empty($accounts)){ ?>
	 <td><div class="no_data">No Data.. Please Click <a href="<?php echo site_url('admin/amznaccount/create') ?>" >here</a> to add an account
						</div> </td> 
			<?php  } else { ?>
	
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="TableContainer1">
		<thead>
			<tr>
				<th><?php echo lang('amznaccount:name') ?></th>
				<th><?php echo lang('amznaccount:api_key') ?></th>
				<th><?php echo lang('amznaccount:created_on') ?></th>
				<th width="180"><?php echo lang('global:actions') ?></th>
			</tr>
		</thead>
		<tfoot>

		</tfoot>
		<tbody>
			<?php 
				foreach ($accounts as $acct) : ?>
				<tr>
					<?php $post = json_decode(json_encode($acct), FALSE);?>
					
					<td><?php echo $post->name ?></td>
					<td class="collapse"><?php echo $post->api_key ?></td>
					<td class="collapse"><?php echo format_date($post->created_on) ?></td>
					
					<td style="padding-top:10px;">
						<a href="<?php echo site_url('admin/amznaccount/edit/' . $post->_id->{'$id'}) ?>" title="<?php echo lang('global:edit')?>" ><span class="edit"></span></a>
						<a href="<?php echo site_url('admin/amznaccount/delete/' . $post->_id->{'$id'}) ?>" title="<?php echo lang('global:delete')?>" ><span class="delete"></span></a>
					</td>
					
				</tr>
			<?php endforeach ?>
		
		</tbody>
	</table><?php }?>
</div>

<script>
	$(document).ready(function() {
		var pageSize = <?= json_encode(Settings::get('records_per_page')) ?>;
		setupTableSorterChecked ( $ ( '#TableContainer1' ) ,  false ,  pageSize );
	});
</script>