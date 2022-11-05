<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hello~ {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <script>

        
    </script>


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
