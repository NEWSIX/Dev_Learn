<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hello~ {{ Auth::user()->name }}
        </h2>
    </x-slot>



        <div class="py-12">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
               {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="py-12">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-8">
                                   
                                    <div class="card">
                                        <div class="card-header">TABLE</div>
                                        
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Service</th>
                                                    <th scope="col">Updated At</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($service as $data)

                                                    <tr>
                                                        <th scope="row">{{$service->firstItem()+$loop->index}}</th>
                                                        <td>
                                                            <img width="100px" src="{{asset($data->service_image)}}" alt="">
                                                        </td>
                                                        <td>{{$data->service_name}}</td>
                                                        @if ($data->updated_at == Null)
                                                            <td>🤐</td>
                                                        @else
                                                            <td>{{Carbon\Carbon::parse($data->updated_at)->diffForHumans()}}</td>
                                                        @endif


                                                        <td>
                                                            <a href="{{url('service/edit/'.$data->id)}}" class="btn btn-primary">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('service/delete/'.$data->id)}}" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>

                                            </table>

                                        {{$service->links()}}

                                    </div>
                                    
                                </div>




                                

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header"> Form </div>
                                        <div class="card-body">
                                            <form action="{{route('addService')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="service_name">Service</label>
                                                    <input type="text" class="form-control" name="service_name">
                                                </div>

                                                @error('service_name')
                                                    <div class="text-danger ">{{$message}}</div>
                                                @enderror

                                                <div class="form-group">
                                                    <label for="service_image">Service</label>
                                                    <input type="file" class="form-control" name="service_image">
                                                </div>
                                                @error('service_image')
                                                    <div class="text-danger ">{{$message}}</div>
                                                @enderror
                                                
                                                <br>
                                                
                                                <input type="submit" value="save" class="btn btn-primary">
                                            </form>
                                        </div>
                                            
                                        

                                        


                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
