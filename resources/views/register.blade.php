<x-layout>
  <div class="container-flud">
    <div class="row">
      <div class="col-6">

      </div>
      <div class="col-6 p-5">
        <form action="/register" class="m-5" method="post">
          @csrf
          <h1 class="text-center">Register</h1>
          <hr>
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Name" name="name" id="name" class="form-control m-2 form-control-lg" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control m-2 form-control-lg" required>

          <label for="mobno"><b>Mobile No</b></label>
          <input type="text" placeholder="Mobile No" name="mobno" id="mobno" class="form-control m-2 form-control-lg" required>  

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" class="form-control m-2 form-control-lg" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" class="form-control m-2 form-control-lg" required>
          <hr>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <p>Already have an account? <a href="/login">Sign in</a>.</p>
          <button type="submit" class="btn bg-secondary text-light">Register</button>
        </form>
      </div>
    </div>
  </div>  
</x-layout>