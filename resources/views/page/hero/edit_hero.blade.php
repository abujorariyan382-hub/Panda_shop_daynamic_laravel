  @extends('layout.layout')
  @section('content')
  <main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">Edit hero page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>

                         <form action="{{ route('update.hero',$hero->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                      <h3>Image</h3>
                             <img style="height: 30vh" src="{{ url($hero->hero_image)}}" class="img-thumbnail" id="prevImage" >
                             <input  class="mt-3" type="file" name="hero_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            
                            <div class="form-group col-md-4 mt-5">
                                <div  class="mt-2">
                                    <label for="title"><h4>Title</h4></label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ $hero->title }}">
                                </div>
                                 <div  class="mt-2">
                                    <label for="description"><h4>Description</h4></label>
                                     <textarea type="text" name="description" id="description" class="form-control"  ">{{ $hero->description }}</textarea>
                                </div>
                                 <div  class="mt-2">
                                    <label for="price"><h4>Price</h4></label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ $hero->price }}">
                                </div>
                                

                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary mt-5">

                        </form>
                       
                </main>
  @endsection
  
  