<x-layout>
  <div class="container-flud">
    <div class="row">
     

     
      <div class="col-4 p-5">
        <form action="/register" class="m-5" method="post">
          @csrf
          <h1 class="text-center">Your Profile</h1>
          <hr>
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Name" name="name" id="name" class="form-control m-2 form-control-lg" value="{{$datas[0]->name}}" required>
          

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control m-2 form-control-lg" value="{{$datas[0]->email}}" required>

          <label for="mobno"><b>Mobile No</b></label>
          <input type="text" placeholder="Mobile No" name="mobno" id="mobno" class="form-control m-2 form-control-lg" value="{{$datas[0]->mobno}}"  required>  
          <input type="text" placeholder="Second Mobile No" name="mobno" id="mobno" class="form-control m-2 form-control-lg" required>  
          <div>
            <label for="Address"><b>Address</b></label>
            <input type="text" placeholder="Locality" name="locality" id="locality" class="form-control m-2 form-control-lg" required> 
          </div>
          <div >
            <div >
              
            <select placeholder="City" name="city" id="city" class="form-control m-2 form-control-lg" required>
              <!-- <option value="">Select City</option>
              @foreach ($state as $city)
              <option value="">{{$city->city}}</option>
              @endforeach -->
            </select> 
                
            </div>
            <div >
            <select placeholder="State" name="state" id="state" class="form-control m-2 form-control-lg" required>

            </select> 
                
            </div>
            <div class="col">
            <input type="text" placeholder="Zip-Code" name="zip" id="zip" class="form-control m-2 form-control-lg" required> 
            <hr>
            </div>
            </div>
                
          <!-- <button type="submit" class="btn bg-secondary text-light">submit</button> -->
          <!-- <button type="update" class="btn bg-secondary text-light">Update</button> -->
        </form>
      </div>
    </div>
  </div>  
</x-layout>