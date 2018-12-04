<div class="container">
	

<div class="container">
	

    <br>





       <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center ">
        
  <h1>Lista de Usuarios</h1>

<div class="table-responsive">

           <table id="ls_usuarios" class="table table-striped table-bordered">
        <thead>
            <tr>
    		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
            </tr>
        </thead>
        <tbody>

          <?php 

          foreach ($users as $user):
          ?>
            <tr>

            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo  htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?><br />
                <?php endforeach?>
			</td>
			
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>

            </tr>

          <?php 

           endforeach;

          ?>
           
        </tbody>
        <tfoot>
            <tr>
    		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
            </tr>
        </tfoot>
    </table> 
       </div>
       </div>
       
      <p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
   </div>
   </div>



