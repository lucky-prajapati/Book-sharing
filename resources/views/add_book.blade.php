<x-layout>
  <div class="container-flud">
    <form action="/add_book" class="m-2" method="post" enctype="multipart/form-data">

      <hr>
      @csrf
      <div class="row">
        <h1>Add Book</h1>
        <div class="col-4 p-2">
          <input type="text" placeholder="Book_ID" name="book_id" id="book_id" class="form-control m-2 form-control-lg" >
          <input type="text" placeholder="Book Name" name="book_name" id="book_name" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Book Author" name="author" id="author" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Category" name="category" id="category" class="form-control m-2 form-control-lg" required>
        </div>
        <div class="col-4 p-2">
          <input type="text" placeholder="ISBN NO" name="isbn" id="isbn" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Book Edition" name="edition" id="edition" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Total Page no" name="page" id="page" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Publisher" name="publisher" id="publisher" class="form-control m-2 form-control-lg" required>
        </div>
        <!----------------------------------------------image section----------------------------------------------------------------->
        <div class="col-4 p-2">
          <input type="file" name="image" id="image" >
        </div>
        <!-- -------------------------------------------------------------------------------------------------------------------------- -->

        <div class="col-4 p-2" id="pop">
          <button class="btn btn-secondary">Add</button>
        </div>
        <hr>
        <!-- <h1>Publisher</h1>
        <div class="col-4 p-2">
          <input type="text" placeholder="ISBN NO" name="isbn" id="isbn" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Book " name="author" id="author" class="form-control m-2 form-control-lg" required>
          <input type="text" placeholder="Total Page no" name="page" id="page" class="form-control m-2 form-control-lg" required>
        </div> -->
        <button type="submit" class="btn bg-secondary text-light">submit</button>
    </form>
  </div>
</x-layout>