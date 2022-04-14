@include('admin.navbar')
<style>
     th {
         padding: 15px;
         color: #fb5849;
    }
    td{
      padding: 13px;
    }
    
</style>
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <table class="border border-separate border-gray-500" align="center" >
                <thead>
                  <tr>
                    <th class="border border-gray-500 text-xl">User ID</th>
                    <th class="border border-gray-500 text-xl">Name</th>
                    <th class="border border-gray-500 text-xl">E-mail</th>
                    <th class="border border-gray-500 text-xl">created-At</th>
                    <th class="border border-gray-500 text-xl">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($data as $user)
                 <tr>
                  <td class="border border-slate-700 text-center text-black">{{$user->id}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$user->name}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$user->email}}</td>
                  <td class="border border-slate-700 text-center text-black">{{$user->created_at}}</td>
                  <td class="border border-slate-700 text-center">
                    @if ($user->usertype == "1")
                   {{"Not Allowed"}}
                    @else
                    <a href="{{url('/deleteuser')}}/{{$user->id}}"><button class="btn btn-danger btn-sm "><i class="fa fa-trash-o"></i></button></a>
                    @endif
                  </td>
                </tr>
                 @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</section>

@include('admin.footer')