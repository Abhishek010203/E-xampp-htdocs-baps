
<style>
a:hover{
cursor: pointer;
text-decoration:none;
}
.no-more page #example_wrapper .col-sm-12 {
    overflow-x: auto;
}
th {
  color: #2b6e79;
}
</style>
<div class="dashboard-body">
    
    
<div class="main-content">
    <div id="no-more-tables">
      <button type="submit" class="ad-new-butt" data-toggle="modal" data-target="#myModal">Add New</button>
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
        <th>Name</th>
        <th>Role</th>
        <th class="numeric">Email</th>
        <th class="numeric">Cell Phone</th>
        <th class="numeric">Region</th>
        <th class="numeric">Center</th>
        <th class="numeric">Status</th>
      </tr>
        </thead>
        <tbody>
              <?php foreach ($users as $post): ?>

              <tr>
                  <td> <a data-toggle="modal" data-id="<?php echo $post['id'] ?>" title="Add this item" class="open-AddBookDialog" href="#addBookDialog"><?php echo $post['name']. '<br>'; ?></a></td></a>
                <td><?php echo $post['role']. '<br>'; ?></td>
                <td><?php echo $post['email']. '<br>'; ?></td>
                <td><?php echo $post['mobile_number']. '<br>'; ?></td>
                <td><?php echo $post['region']. '<br>'; ?></td>
                <td><?php echo $post['center']. '<br>'; ?></td>
                <td><?php if($post['status']==1) { echo "Active"; } else { echo "UnActive"; }?></td>
                
              </tr>
            
          <?php endforeach; ?>    
        </tbody>
    </table>

        </div>
    </div>
    <!--  -->
    
    <!--  -->
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add User</h4>
        </div>
       <form action="index.php?r=site/user" method="post">
        <div class="modal-body">
        <input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
      <input type="text" class="enter-name-input" placeholder="Name" name="User[name]">
      <select class="enter-name-input" name ="User[role_id]" required>      
            <?php foreach ($Role as $role): ?>
            <option  value="<?php echo $role['id']. '<br>'; ?>"><?php echo $role['description']. '<br>'; ?></option>
            <?php endforeach; ?>  
            </select>
      <input type="text" class="enter-name-input" placeholder="Email" name="User[email]">
      <input type="text" class="enter-name-input" placeholder="Cell Phone" name="User[mobile_number]">
      <select class="enter-name-input" name ="User[region_id]" required>
            <?php foreach ($Region as $region): ?>
            <option  value="<?php echo $region['id']. '<br>'; ?>"><?php echo $region['region']. '<br>'; ?></option>
            <?php endforeach; ?>  
            </select>
      <select class="enter-name-input" name ="User[center_id]" required>
            <?php foreach ($Center as $center): ?>
            <option  value="<?php echo $center['id']. '<br>'; ?>"><?php echo $center['center']. '<br>'; ?></option>
            <?php endforeach; ?>  
            </select>
      <input type="password" class="enter-name-input" placeholder="Password" name="User[password]">
      <select class="enter-name-input" name ="User[status]" required>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
             </select>
      <select class="enter-name-input" name ="User[dashboard_type]" required>
              <option value="1">Quote Dashboard</option>
              <option value="2">Prod Dashboard</option>
            </select>
      <div class="send-me">
        <p>Send me alert</p>
        <div class="tex">
        <input type="checkbox" "User[send_text_alerts]"><label>Text</label><span><input type="checkbox" name="User[send_email_alerts]"><label>Email</label></span>
        </div>
      </div>
        <div class="modal-footer text-center">
      <button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button><button type="submit" class="btn btn-default pull-right">Save</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div> 
 <div class="modal fade" id="addBookDialog" role="dialog">
    <div class="modal-dialog">
     <form action="#" method="post">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Region</h4>
        </div>
        <div class="modal-body">
      <input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
   <input type="text" class="enter-name-input" placeholder="Name" name="User[name]">
      <select class="enter-name-input" name ="User[role_id]" required>      
            <?php foreach ($Role as $role): ?>
            <option  value="<?php echo $role['id']. '<br>'; ?>"><?php echo $role['description']. '<br>'; ?></option>
            <?php endforeach; ?>  
            </select>
      <input type="text" class="enter-name-input" placeholder="Email" name="User[email]">
      <input type="text" class="enter-name-input" placeholder="Cell Phone" name="User[mobile_number]">
      <select class="enter-name-input" name ="User[region_id]" required>
            <?php foreach ($Region as $region): ?>
            <option  value="<?php echo $region['id']. '<br>'; ?>"><?php echo $region['region']. '<br>'; ?></option>
            <?php endforeach; ?>  
            </select>
      <select class="enter-name-input" name ="User[center_id]" required>
            <?php foreach ($Center as $center): ?>
            <option  value="<?php echo $center['id']. '<br>'; ?>"><?php echo $center['center']. '<br>'; ?></option>
            <?php endforeach; ?>  
            </select>
      <input type="password" class="enter-name-input" placeholder="Password" name="User[password]">
      <select class="enter-name-input" name ="User[status]" required>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
             </select>
      <select class="enter-name-input" name ="User[dashboard_type]" required>
              <option value="1">Quote Dashboard</option>
              <option value="2">Prod Dashboard</option>
            </select>
      <div class="send-me">
        <p>Send me alert</p>
        <div class="tex">
        <input type="checkbox" "User[send_text_alerts]"><label>Text</label><span><input type="checkbox" name="User[send_email_alerts]"><label>Email</label></span>
        </div>
      </div>
        <div class="modal-footer text-center">
      <button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#myModal1">Update</button>
        </form>
      <form action="index.php?r=site/delregion" method="post">
        <div class="">
          <input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
            <input type="hidden" class="enter-name-input " placeholder="Name" name="bookId" id="bookId" value="" >
            <button type="submit" class="btn btn-default pull-right">delete</button>
        </div>
        </form>
        </div>
      </div>
      
    </div>

  
  </div>
</div>