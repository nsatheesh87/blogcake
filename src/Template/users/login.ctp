<!-- File: src/Template/Users/login.ctp -->

<div class="users form">

<div style="text-align:center" class="bg-danger">
	<?= $this->Flash->render('auth') ?>
</div>

<h4 style="text-align:center;"> Authentication Details : username: admin  Password: admin </h4>
	
<?= $this->Form->create('',['class' => 'form-horizontal']) ?>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

</div>