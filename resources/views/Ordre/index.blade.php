
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
      <h6 class="text-white text-capitalize ps-3">liste des commande</h6>
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
                    <th class=" text-center text-uppercase  font-weight-bold  ps-2">Nom de client</th>
                    <th class="text-center text-uppercase  font-weight-bold ">adress</th>
                    <th class="text-center text-uppercase  font-weight-bold ">date de livraison</th>
                    <th class="text-center text-uppercase  font-weight-bold ">mode de livraison</th>
                    <th class="text-center text-uppercase  font-weight-bold ">status de commande</th>
                    <th class="text-center text-uppercase  font-weight-bold ">method de payment</th>
                    <th class="text-center text-uppercase  font-weight-bold ">status de payment</th>
                    <th class="text-center text-uppercase  font-weight-bold ">facture</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ordres as $ordre)
                  <tr>
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{ $ordre->id }}</p>
                    </td>
                    <td>
                      <p class=" font-weight-normal mb-0">{{ $ordre->users->name}} {{ $ordre->users->prenom}} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class=" font-weight-normal mb-0"> {{ $ordre->address}}</p>
                    </td class="align-middle text-center">
                    <td class="align-middle text-center text-sm">
                      <p class=" font-weight-normal mb-0">{{  $ordre->livraison->date_livraison    }}</p>
                  </td class="align-middle text-center">
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{  $ordre->livraison->mode_livraison    }}</p>
                    </td>
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{ $ordre->status_cmd   }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <p class=" font-weight-normal mb-0">{{ $ordre->payment_method   }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <p class=" font-weight-normal mb-0">{{ $ordre->payment_status   }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{ route('facture.generate',$ordre->id) }}" class=" btn btn-success">generate facture</a>
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

