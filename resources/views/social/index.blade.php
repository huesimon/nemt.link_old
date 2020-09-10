<!DOCTYPE html>
<html>

<head>
    <title>My Instagram Photos Feed With Bootstrap</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>

<body>
    {{-- <nav class="navbar navbar-light sticky-top bg-light">
        <a class="navbar-brand" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <ul class="nav ">
            <li class="nav-item">
                <button type="button" class="btn btn-primary btn-md btn-success" data-toggle="modal"
                    data-target="#exampleModal">Create a new post</button>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"><i class="fas fa-cogs"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </li>
        </ul>
    </nav> --}}
    <div class="container-fluid ">
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container-fluid tab-pane active "><br>
                <div class="row justify-content-center">
                    <div class="">
                        <div class="card mx-auto custom-card" id="prova">
                            <div class="row post-header col-12 py-2 px-3">
                                <div class="col-6 float-left ">
                                    <h4>My first post</h4>
                                </div>
                                <div class="col-6 float-right text-right post-number">
                                    <h4></h4>
                                    {{-- Could be upload date
                                    --}}
                                </div>
                            </div>
                            <img class="card-img" src="https://i.stack.imgur.com/khjyI.jpg" alt="Card image cap">
                            <div class="card-body px-3">
                                <h5 class="card-title">1000 Likes</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                            <div class="row post-header px-3 pb-3">
                                <div class="col-1 float-left text-left"><i class="far fa-heart"></i></i></div>
                                <div class="col-10 float-left text-left">Comment...</div>
                                <div class="col-1 float-right text-right"><i class="fa fa-ellipsis-v"
                                        aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    {{-- <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script> --}}
</body>

</html>
