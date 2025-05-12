<div class="container">
<h1 class="heading mt-3 mb-3">Signup</h1>
<form action="./server/request.php" method="post">
  <div class="col-6 offset-sm-3 mb-3" >
    <label for="username" class="form-label">User name</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Name">
  </div>
 
  <div class="col-6 offset-sm-3 mb-3">
    <label for="userEmail" class="form-label">User Email</label>
    <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter Your Email">
  </div>

  <div class="col-6 offset-sm-3 mb-3">
    <label for="userPassword" class="form-label">User Password</label>
    <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter Your Password">
  </div>

  <div class="col-6 offset-sm-3 mb-3">
    <label for="userAddress" class="form-label">User Address</label>
    <input type="text" class="form-control" id="userAddress" name="address" placeholder="Enter Your Address">
  </div>



   <div class="col-6 offset-sm-3 mb-3">
  <button type="submit" class="btn btn-primary">Signup</button>
  </div>


</form>
</div>