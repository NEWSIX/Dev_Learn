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
                                                    <th scope="col">User</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($department as $dept)

                                                    <tr>
                                                        <th scope="row">{{$department->firstItem()+$loop->index}}</th>
                                                        <td>{{$dept-> user -> name}}</td>
                                                        <td>{{$dept->department_name}}</td>
                                                        @if ($dept->created_at == Null)
                                                            <td>🤐</td>
                                                        @else
                                                            <td>{{Carbon\Carbon::parse($dept->created_at)->diffForHumans()}}</td>
                                                        @endif


                                                        <td>
                                                            <a href="{{url('department/edit/'.$dept->id)}}" class="btn btn-primary">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('department/softdelete/'.$dept->id)}}" class="btn btn-danger">Remove</a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>

                                            </table>

                                        {{$department->appends(['trashDepartment' => $trashDepartment])->links()}}

                                    </div>

<br>

                                    @if (count($trashDepartment) == 0)
                                      
                                    @else

                                    
                                    <div class="card">
                                        <div class="card-header">Trash</div>
                                        
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($trashDepartment as $trashDept)

                                                    <tr>
                                                        <th scope="row">{{$trashDepartment->firstItem()+$loop->index}}</th>
                                                        <td>{{$trashDept-> user -> name}}</td>
                                                        <td>{{$trashDept->department_name}}</td>
                                                        @if ($trashDept->created_at == Null)
                                                            <td>🤐</td>
                                                        @else
                                                            <td>{{Carbon\Carbon::parse($trashDept->created_at)->diffForHumans()}}</td>
                                                        @endif


                                                        <td>
                                                            <a href="{{url('department/recovery/'.$trashDept->id)}}" class="btn btn-primary">Recovery</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('department/delete/'.$trashDept->id)}}" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>

                                            </table>

                       
                                        {{$trashDepartment->appends(['department' => $department])->links()}}

                                    </div>
                                    @endif
                                    
                                  
                                    
                                </div>




                                

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header"> Form </div>
                                        <div class="card-body">
                                            <form action="{{route('addDepartment')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="department_name">Position</label>
                                                    <input type="text" class="form-control" name="department_name">
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
        </div>

</x-app-layout>
