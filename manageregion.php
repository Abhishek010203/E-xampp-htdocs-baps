
<!-- DASHBOARD BODY -->
<div class="dashboard-body">
	<div class="main-content">
		<div id="no-more-tables">
		    <?php
			if(!empty(Yii::$app->session['errormessage'])) {
				echo '
			<div class="form-group login-error-message">
				<span class="login-error-message-span">'.Yii::$app->session['errormessage'].'</span>
			</div>
				';
			}
			?> 
			<button type="submit" class="ad-new-butt" data-toggle="modal" data-target="#myModal">Add New</button>
            <table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Region</th>
						<th>User</th>
						<th class="numeric">Email</th>
						<th class="numeric">Phone</th>
						<th class="numeric">Address</th>
						<th class="numeric">Status</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($users as $post): ?>

					<tr>
						<td><a data-toggle="modal" data-id="<?php echo $post['id'] ?>" title="Add this item" class="edit-region-modal" href="#edit-region-modal"><?php echo $post['region']. '<br>'; ?></a></td>
						<td><?php echo $post['name']. '<br>'; ?></td>
						<td><?php echo $post['email']. '<br>'; ?></td>
						<td><?php echo $post['mobile_number']. '<br>'; ?></td>
						<td><?php echo $post['address1'].$post['address2'].$post['city'].$post['state']; ?></td>
						<td><?php if($post['status']==1) { echo "Active"; } else { echo "InActive"; }?></td>
					</tr>
					
					<?php endforeach; ?>  
				</tbody>
			</table>

        </div>
    </div>
</div>


<div class="modal fade In" id="edit-region-modal" role="dialog">
    <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <h4 class="modal-title">Edit Region</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
					<input id="edit-region-id" type="hidden" name="region_id" value="">
					<input id="edit-region-region" type="text" class="enter-name-input" placeholder="Region" name ="Region[region]">
					<select id="edit-region-user" class="enter-name-input" name ="Region[user_id]"  required>
						<?php foreach ($userlist as $userlistt): ?>
						<option  value="<?php echo $userlistt['id']; ?>"><?php echo $userlistt['name']; ?></option>
						<?php endforeach; ?>  
					</select>
					<input id="edit-region-email" type="text" value="Email" readonly="readonly" class="enter-name-input" placeholder="Email">
					<input id="edit-region-phone" type="text" readonly="readonly" class="enter-name-input" placeholder="Phone">
					<input id="edit-region-address" type="text" class="enter-name-input" placeholder="Address" name ="Region[address_line_1]">
					<input id="edit-region-upc1" type="text" class="enter-name-input" placeholder="UPC 1" name="Region[upc1]">
					<input id="edit-region-upc2" type="text" class="enter-name-input" placeholder="UPC 2" name="Region[upc2]">
					<select id="edit-region-status" class="enter-name-input" name ="Region[status]"  required>
						<option  value="1">Active</option>
						<option  value="0">Inactive</option>
					</select>
				</div>
				<div class="modal-footer text-center">
					<button id="edit-region-cancel" type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
					<button id="edit-region-update" type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal1">Update</button>
					<button id="edit-region-delete" type="button" class="btn btn-default pull-right">Delete</button>
				</div>
			</div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
		<form action="index.php?r=site/addregion" method="post">
		<!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title">Add Region</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
				<input type="text" class="enter-name-input" placeholder="Region" name ="Region[region]">
				<select class="enter-name-input" name ="Region[user_id]"  required>
					<?php foreach ($userlist as $userlistt): ?>
					<option  value="<?php echo $userlistt['id']. '<br>'; ?>"><?php echo $userlistt['name']. '<br>'; ?></option>
					<?php endforeach; ?>  
				</select>
				<input type="text" class="enter-name-input" placeholder="Phone" name ="Region[phone]">
				<input type="text" class="enter-name-input" placeholder="Address" name ="Region[address_line_1]">
				<input type="text" class="enter-name-input" placeholder="UPC 1" name="Region[upc1]">
				<input type="text" class="enter-name-input" placeholder="UPC 2" name="Region[upc2]" >
				<select class="enter-name-input" name ="Region[status]" required>
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</div>  
			<div class="modal-footer text-center">
				<button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button><button type="submit" class="btn btn-default pull-right">Save</button>
			</div>
		  </div>
		</form>
    </div>
</div>
