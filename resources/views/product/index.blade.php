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
      <h6 class="text-white text-capitalize ps-3">liste des produit</h6>
     <a href="{{ route('product.create') }}" class="btn btn-success" style="margin-left:65%;"> add new product</a>
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
                    <th class=" text-center text-uppercase  font-weight-bold  ps-2">Nom de produit</th>
                    <th class="text-center text-uppercase  font-weight-bold ">Categori</th>
                    <th class="text-center text-uppercase  font-weight-bold ">prix</th>
                    <th class=" ">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                  <tr>
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{ $product->id }}</p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="font-weight-normal mb-0">{{ $product->libelle }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class=" font-weight-normal mb-0">{{ $product->category->name_cat }}</p>
                    </td>
                    <td class="align-middle text-center">
                        <p class=" font-weight-normal mb-0">{{ $product->prix }}</p>
                    </td>
                    
                    <td class="align-middle text-center d-flex">
                      <a href="{{ route('product.edit',$product->id) }}" class=" btn btn-success btn-sm dltBtn " data-toggle="tooltip" data-original-title="Edit user">
                        edit
                      </a>
                      <form method="POST" action="{{ route('product.delete', $product->id) }}">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger btn-sm dltBtn " data-id={{$product->id}} data-toggle="tooltip" data-placement="bottom" title="Delete">delete</button>
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
