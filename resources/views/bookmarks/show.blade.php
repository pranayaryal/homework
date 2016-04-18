@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$bookmark->name}}</div>

                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-3">
                                    @if(isset($photo))

                                        <img src="/{{$photo->thumbnail_path}}" alt="">
                                    @endif

                                </div>
                                <div class="col-md-9">
                                    <p>Bookmark Name: {{$bookmark->name}}</p>
                                    <p>Url:{{$bookmark->url}}</p>
                                    <p>Description: {{$bookmark->description}}</p>
                                </div>
                            </div>


                        </div>


                </div>
                @if(!$photo)
                    <form id="addPhotoForm" action="/{{$bookmark->id}}/photos" method="POST" class="dropzone">
                        {{csrf_field()}}
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotoForm = {
            paramName: 'file',
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        }
    </script>
@stop