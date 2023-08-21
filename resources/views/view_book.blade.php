<x-layout>
    <div class="container">
        <div class="table">
            <div class="row">
                <td class="col-6">
                <label for="">User Name</label>
                <input type="text" name="username" id="username">
                </td>
            </div>
            <div class="row">
            @foreach ($viewbook as $book)
                <div class="col-4 p-2 " >
                    <div class="card bg-info">
                        <img src="/Book_Images/{{ $book->image }}" class="card-img-top rounded-5" height="250px" alt="...">
                    <div class="card-body rounded-5">
                    <h5 class="card-title">Book Name : {{$book->book_name}}</h5>
                    </div>
                
                    <ul class="list-group list-group-flushrounded-5">
                        <li class="list-group-item">Edition : {{$book->edition}}</li>
                        <li class="list-group-item">Book Category : {{$book->category}}</li>
                        <li class="list-group-item">Publisher Name : {{$book->publisher}}</li>
                        <li class="list-group-item">Auther Name : {{$book->author}}</li>
                        <li class="list-group-item">Total Page : {{$book->page}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>