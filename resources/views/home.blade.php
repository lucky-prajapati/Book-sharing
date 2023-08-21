<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <title>Website</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Logo</a> -->
            <img src="image/book_sharing.svg " alt="Los Angeles" width="30" height="30">
            <!-- Sign in -->
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Sign in</a>
                </li>
                <!-- sign up -->
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/register">Sign up</a>
                    </li>
                <!-- search -->
                    <form class="navbar-form navbar-left" action="/action_page.php">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default bg-white" type="submit">search</button>
                            </div>
                        </div>
                    </form>
        </div>      
    </nav>

    <!-- body form design -->
    
    <form action="" class="image">
        <label for="">santosh</label>
        <img src="image/Book.gif                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    " alt="Los Angeles" width="100%" height="100%">
    </form>

    <!-- footer -->
    <footer class="container-flud bg-secondary p-5 text-center text-light">
        <p>$copyright 2023</p>
        <p>Developed by : Santosh Kumar</p>
    </footer>

</body>

</html>