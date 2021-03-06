		<?php if ($this->method == 'edit'): ?>
			<?php  $post -> password = ''; ?>
		<?php endif ?>

   <div class="contentBlock">
   	<h4>
		<div style="width:91%;">
				Create Account</div> <span class="span1"> 
					<div class="serviceInfoHover pull-right tooltipQuest">
                        <i class="serviceInfoIcon icons pull-right"></i>
                        <div class="serviceInfoDetails">
					Create account for Amazon
                        </div>
                        </div>
             </span>
         </h4>
        <div class="contentBlockDetails">
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal crud'.((isset($mode)) ? ' '.$mode : '').'" id="form_createedit" enctype="multipart/form-data" ') ?>
					<form class="form-horizontal">
						<div class="form_inputs" id="blog-content-tab">
							<fieldset>
								<div class="form-field">
										<div class="control-group">
											<label class="control-label" for="title"><?php echo lang('amznaccount:title') ?><span>*</span></label>
											<div class="controls">
											<?php
											$attributes = array('id' => 'name', 'name' => 'name', 'value' => $post -> name, 'maxlength' => '100', 'data-val' => 'true', 'class' => 'input-xlarge', 'data-val-required' => lang('amznaccount:error_name'), );
											echo form_input($attributes);
										?>
											<span class="serviceInfoHover infoConfig">
												<i class="serviceInfoIcon icons pull-right"></i>
													<span class="serviceInfoDetails">
													<?php echo lang('amznaccount:icon_title') ?>
													</span>
											</span>
											</div>
										</div>

									<div class="control-group">
										<label class="control-label" for="api_key"><?php echo lang('amznaccount:api_key') ?><span>*</span></label>
										<div class="controls">
										<?php
										$attributes = array('id' => 'api_key', 'name' => 'api_key', 'value' => $post -> api_key, 'maxlength' => '100', 'class' => 'input-xlarge', 'data-val' => 'true', 'data-val-required' => lang('amznaccount:error_api_key'), );
										echo form_input($attributes);
 ?>
										<span class="serviceInfoHover infoConfig">
												<i class="serviceInfoIcon icons pull-right"></i>
													<span class="serviceInfoDetails">
														<?php echo lang('amznaccount:icon_api_key') ?>
													</span>
										</span>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="secret_key"><?php echo lang('amznaccount:secret_key') ?><span>*</span> </label>
										<div class="controls">
										<?php
										$attributes = array('id' => 'secret_key', 'name' => 'secret_key', 'value' => $post -> secret_key, 'maxlength' => '100', 'class' => 'input-xlarge', 'data-val' => 'true', 'data-val-required' => lang('amznaccount:error_secret_key'), );
										echo form_input($attributes);
 ?>
										<span class="serviceInfoHover infoConfig">
												<i class="serviceInfoIcon icons pull-right"></i>
													<span class="serviceInfoDetails">
														<?php echo lang('amznaccount:icon_secret_key') ?>
													</span>
										</span>
										</div>
								</div>

								<div class="control-group">
														<div class="controls">
															<button id="amznaccount_save" name="amznaccount_save" class="btn btn-success xervmon-btn-big"><?= lang('amznaccount:save') ?></button>
															<?php $this->load->view('admin/partials/buttons', array('buttons' => array('cancel'))) ?>
															<input type="hidden" id="id" name="id" value="<?php
																if (isset($post -> id))
																	echo $post -> id;
																else
																	echo '';
 ?>" />
														</div>
								</div>

								</div>
							</fieldset>
						</div>
					</form>
		</div>
	</div>
<span class="pull-right" style="color:#FF0000">*Mandatory</span>
<style>
.form-field input[type="text"], .form-field input[type="password"], .form-field input[type="email"], .form-field input[type="number"], .tags {
    width: 50%;
}
h4 {
	display: flex;
	display: -webkit-box;
	display: -ms-flexbox;
}
</style>