  @extends('layout.layout')
  @section('content')
  <main>
                    <div class="container-fluid px-4 main">
                        @include('alart.message')
                        <h1 class="mt-4">List of  Hero page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($hero)>0)
                                @foreach ($hero as $hero)
                                      <tr>
                                    <td>{{ $hero->id }}</td>
                                    <td>{{ $hero->title }}</td>
                                    <td>{{ $hero->description }}</td>
                                    <td>${{ $hero->price }}</td>
                                    <td>
                                        <img style="height: 10vh" src="{{ url($hero->hero_image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="row d-flex">
          <div class="col-sm-2">
            <a class="btn btn-primary" href="{{ route('edit.hero',$hero->id) }}">Edit</a>
          </div>
          <div class="col-sm-2">
            <form action="{{ route('delete.hero',$hero->id) }}" method="POST"  >
              @csrf
              @method('delete')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger"  >
            </form>
          </div>
        </div>
                                    </td>
                                </tr>
                                @endforeach
                                    
                                @endif
                              
                            </tbody>
                        </table>
                       
                </main>
  @endsection
  
  