@extends('layouts.admin')

@section('content')
<style>
    .uper{
        margin-top: 5%;
    }
</style>
<div class="uper">
  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 mb-0">
    <div class=" d-flex bg-purple rounded shadow-sm border-radius-lg pt-4 pb-3">
      <h6 class="text-white text-capitalize ps-3">liste des utilisateurs</h6>
     <a href="/createUser" class="btn btn-success" style="margin-left:65%;"> add new user</a>
    </div>
  </div>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
         
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase  font-weight-bold ">id</th>
                    <th class=" text-center text-uppercase  font-weight-bold  ps-2">Nom d'user</th>
                    <th class="text-center text-uppercase  font-weight-bold ">email</th>
                    <th class="text-center text-uppercase  font-weight-bold ">role</th>
                    <th class=" ">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                  <tr>
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{ $user->id }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="font-weight-normal mb-0">{{ $user->name }} {{ $user->prenom }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class=" font-weight-normal mb-0">{{ $user->email }}</p>
                    </td>
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{ $user->role_as }}</p>
                    </td>
                    
                    <td class="align-middle text-center d-flex">
                      <a href="{{ route('user.edit',$user->id) }}" class=" btn btn-success btn-sm dltBtn " data-toggle="tooltip" data-original-title="Edit user">
                        edit
                      </a>
                      <form method="POST" action="{{ route('user.delete', $user->id) }}">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger btn-sm dltBtn " data-id={{$user->id}} data-toggle="tooltip" data-placement="bottom" title="Delete">delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection
