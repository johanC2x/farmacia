<?php $this->load->view("partial/header_select"); ?>

<h3 class="text-center"><?php echo $this->lang->line('common_select'); ?></h3>

</div>
<br>


<!-- Identifica nombre apellido, empresa, id del empleado 
<?php echo $this->config->item('company') . "  |  $user_info->first_name $user_info->last_name |  $user_info->person_id |  " . ($this->input->get("debug") == "true" ? $this->session->userdata('session_sha1') : ""); ?>
-->





<table height= "100px" >
	
</table>


		<?php echo form_open('home') ?>
			<div id="container">
				<div align="center" style="color:red"><?php echo validation_errors(); ?></div>

		<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0" >
		      <tr>
		        <th width="270px">    
					<div class="input-group">
						<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-shopping-cart"></span></span>
						<select required class="form-control" placeholder="Seleccione Tienda" name="tienda" type="text" autofocus>
							<option value="">Seleccione Tienda</option>
							<?php foreach($consulta->result() as $tienda) { ?>
				            <option value=""><?php echo $tienda->name_tienda ?></option>
				             <?php } ?>
						</select>
					</div></th>
		        <th> &nbsp &nbsp</th>
		        <th width="270px">
					<div class="input-group">
						<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-inbox"></span></span>
						<select required class="form-control" placeholder="Seleccione Tienda" name="tienda" type="text" autofocus>
							<option value="">Seleccione Caja</option>
							 <?php foreach($consulta->result() as $caja) { ?>
				            <option value=""><?php echo $caja->id_caja ?></option>
				             <?php } ?>
						</select>
					</div></th>
		        <th> &nbsp &nbsp</th>
		        <th width="270px">    
					<input class="btn btn-primary btn-block" type="submit" name="loginButton" value="Siguiente"/>
		        </th>
		      </tr>
					<?php $empresa = $this->config->item('')."$user_info->empresa_id";?>
					<input type="hidden" name="empresa_id" value="<?php echo $empresa ?>" />
		</table>

			</div>
		<?php echo form_close(); ?>

<table height= "130px" >
	
</table>

<?php $this->load->view("partial/footer"); ?>

