<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hello~ {{ Auth::user()->name }}
        </h2>
    </x-slot>



        <div class="py-12">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                A simple success alert—check it out!
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
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($department as $dept)

                                                <tr>
                                                    <th scope="row">{{$department->firstItem()+$loop->index}}</th>
                                                    <td>{{$dept->name}}</td>
                                                    <td>{{$dept->department_name}}</td>
                                                    @if ($dept->created_at == Null)
                                                        <td>Null</td>
                                                    @else
                                                        <td>{{Carbon\Carbon::parse($dept->created_at)->diffForHumans()}}</td>
                                                    @endif
                                                </tr>

                                                @endforeach
                                            </tbody>

                                        </table>

                                        {{$department->links()}}

                                    </div>
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
