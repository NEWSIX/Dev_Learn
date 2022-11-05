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
                                        <form action="{{url('department/update/'.$department->id)}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="department_name">Position</label>
                                                <input type="text" value="{{$department->department_name}}" class="form-control" name="department_name">
                                            </div>
                                            @error('department_name')
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
