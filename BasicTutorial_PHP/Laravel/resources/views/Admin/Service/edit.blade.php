<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hello~ {{ Auth::user()->name }}
        </h2>
    </x-slot>



        <div class="py-12">
           <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="py-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">


                                    <div class="card-header"> Edit Form </div>
                                    <div class="card-body">
                                        <form action="{{url('service/update/'.$service->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_name">Position</label>
                                                <input type="text" value="{{$service->service_name}}" class="form-control" name="service_name">
                                            </div>
                                            @error('service_name')
                                                <div class="text-danger ">{{$message}}</div>
                                            @enderror
                                            

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img width="100px" src="{{asset($service->service_image)}}" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <label for="service_image"></label>
                                                        <input type="file" value="{{$service->service_image}}" class="form-control" name="service_image">
                                                        <input type="hidden" name="old_image" value="{{$service->service_image}}">
                                                    </div>
                                                </div>
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

</x-app-layout>
