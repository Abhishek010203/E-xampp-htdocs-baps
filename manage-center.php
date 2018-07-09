
 <!-- DASHBOARD BODY -->
<div class="dashboard-body">
  <div class="main-content">
    <div id="no-more-tables">
		<button type="submit" class="ad-new-butt" data-toggle="modal" data-target="#myModal">Add New</button>
		<table id="example" class="table table-striped" style="width:100%">
			<thead>
				<tr>
					<th>Center</th>
					<th>Region</th>
					<th class="numeric">Email</th>
					<th class="numeric">Phone</th>
					<th class="numeric">Address</th>
					<th class="numeric">Status</th>
				  </tr>
			</thead>
			<tbody>
				<?php foreach ($users as $post): ?>
				<tr>
					<td><a data-toggle="modal" data-id="<?php echo $post['id'] ?>" title="Add this item" class="edit-center-modal" href="#edit-center-modal"><?php echo $post['center']. '<br>'; ?></a></td>                <td><?php echo $post['region']. '<br>'; ?></td>
					<td><?php echo $post['email']. '<br>'; ?></td>
					<td><?php echo $post['contact_number']. '<br>'; ?></td>
					<td><?php echo $post['address1'].$post['address2'].$post['city'].$post['state']; ?></td>
					<td><?php if($post['status']==1) { echo "Active"; } else { echo "InActive"; }?></td>
				</tr>
				<?php endforeach; ?>    
			</tbody>
		</table>
	</div>
    </div>
    <!--  -->
<div class="modal fade In" id="edit-center-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <h4 class="modal-title">Edit Region</h4>
         </div>
         <div class="modal-body">
           <input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
           <input id="edit-center-id" type="hidden" name="center_id" value="">
           <input type="text" id="edit-center-center" class="enter-name-input" placeholder="Center" name="Center[center]">
           <select id="edit-center-region" class="enter-name-input" name ="Center[region_id]" required>
           <?php foreach ($users as $post): ?>
           <option class="enter-name-input" value="<?php echo $post['region_id']. '<br>'; ?>"><?php echo $post['region']. '<br>'; ?></option>
           <?php endforeach; ?>  
           </select>
           <select id="edit-center-catering" class="enter-name-input" name ="Center[catering_lead_id]" required>
           <?php foreach ($Cateringuser as $caters): ?>
           <option class="enter-name-input" value="<?php echo $caters['id']. '<br>'; ?>"><?php echo $caters['name']. '<br>'; ?></option>
           <?php endforeach; ?>  
           </select>
           <input id="edit-center-phone" type="text" class="enter-name-input" placeholder="Cell Phone" name="Center[center_contact_number]">
           <input id="edit-center-address"  type="text" class="enter-name-input" placeholder="Address" name="Center[address_line_1]">
           <input id="edit-center-email" type="text" class="enter-name-input" placeholder="Email" name="Center[center_email]">
           <select id="edit-center-roo" class="enter-name-input" name ="Center[roo_user_id]"  required>
           <?php foreach ($ROOuser as $ROOusers): ?>
           <option  value="<?php echo $ROOusers['id']. '<br>'; ?>"><?php echo $ROOusers['name']. '<br>'; ?></option>
           <?php endforeach; ?>  
           </select>
           <select id="edit-center-status" class="enter-name-input" name ="Center[status]"  required>
            <option  value="1">Active</option>
            <option  value="0">Inactive</option>
          </select>
        </div>
        <div class="modal-footer text-center">
          <button id="edit-center-cancel" type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
          <button id="edit-center-update" type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal1">update</button> 
          <button id="edit-center-delete" type="button" class="btn btn-default pull-right">delete</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade In" id="myModal" role="dialog">
    <div class="modal-dialog">
     <form action="index.php?r=site/addcenter" method="post">
      <!-- Modal content-->
      <div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title">Add Region</h4>
			</div>
			<div class="modal-body">
				  <input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
				  <input type="text" class="enter-name-input" placeholder="Center" name="Center[center]">
				  <select class="enter-name-input" name ="Center[region_id]" required>
				  <?php foreach ($users as $post): ?>
				  <option class="enter-name-input" value="<?php echo $post['region_id']. '<br>'; ?>"><?php echo $post['region']. '<br>'; ?></option>
				  <?php endforeach; ?>  
				  </select>
				  <select class="enter-name-input" name ="Center[catering_lead_id]" required>
				  <?php foreach ($Cateringuser as $caters): ?>
				  <option class="enter-name-input" value="<?php echo $caters['id']. '<br>'; ?>"><?php echo $caters['name']. '<br>'; ?></option>
				  <?php endforeach; ?>  
				  </select>
				  <input type="text" class="enter-name-input" placeholder="Cell Phone" name="Center[center_contact_number]">
				  <input type="text" class="enter-name-input" placeholder="Address" name="Center[address_line_1]">
				  <input type="text" class="enter-name-input" placeholder="Email" name="Center[center_email]">
				  <select class="enter-name-input" name ="Center[roo_user_id]"  required>
				  <?php foreach ($ROOuser as $ROOusers): ?>
				  <option  value="<?php echo $ROOusers['id']. '<br>'; ?>"><?php echo $ROOusers['name']. '<br>'; ?></option>
				  <?php endforeach; ?>  
				  </select>
				  <input type="text" class="enter-name-input" placeholder="Status" name="Center[status]">
			</div>
			<div class="modal-footer text-center">
				<button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button><button type="submit" class="btn btn-default pull-right">Save</button>
			</div>
     </div>
	</form>
   </div>  
</div>
</div>
