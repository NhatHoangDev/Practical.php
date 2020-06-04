@extends('welcome')
@section('content')
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Add Album
                    </header>
                    <div class="panel-body">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert"
                             style=" color: red;
                             font-size: 17px;
                             width: 100%;
                             text-align: center;
                             float:right;
                             font-weight: bold;">',$message.'</span>' ;
                            Session::put('message',null);
                        }
                        ?>
                        <div class="position-center">
                            <form role="form" action="{{url("/save-album")}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Album Name</label>
                                    <input type="name" name="album_name" class="form-control" id="exampleInputEmail1" placeholder="Enter album name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Album Artist</label>
                                    <input type="name" name="album_artist" class="form-control" id="exampleInputEmail1" placeholder="Enter artist">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Release Date</label>
                                    <input type="name" name="album_release_date" class="form-control" id="exampleInputEmail1" placeholder="Enter release date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Genre</label>
                                    <input type="name" name="album_genre" class="form-control" id="exampleInputPassword1" placeholder="genre">
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>


                    </div>
                </section>

            </div>

        </div>



        <!-- page end-->
    </div>
@endsection


