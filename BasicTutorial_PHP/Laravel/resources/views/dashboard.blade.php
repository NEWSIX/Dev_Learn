<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hello~ {{ Auth::user()->name }}

            <b class="float-end">Register : {{count($users)}} users</b>
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <!-- <x-jet-welcome />
               -->
               

              

               <table class="table">
                <tr>
                  <th>NO</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Login</th>
                </tr>
                @php($i=1)
                @foreach ($users as $row)
                
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>

                  <td>{{Carbon\Carbon::parse($row->updated_at) -> diffForHumans()}} </td>
                 <!--  
                    <td>{#{$row->updated_at->diffForHumans()}}</td>
                -->
                </tr>

                @endforeach
              </table>

            </div>
        </div>
    </div>
</x-app-layout>
