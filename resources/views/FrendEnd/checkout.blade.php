@extends('layouts.frendEnd')

@section('content')
<div class="container">
    <div class="row">
<div class="col-md-7">
    <div class="card">
        <div class="card-body">
            <h6>basic details</h6>
            <hr>
            <div class="row checkout-form">
                <div class="col-md-8 d-flex">
                    <label for="date_commande">date de commande</label>
                    <input type="date" id="date_commande"class="form-control">
                </div>
                <div class="col-md-8 d-flex">
                    <label for="desc_commande">description de commande</label>
                    <input type="text" id="desc_commande"class="form-control">
                </div>
                <div class="col-md-8 d-flex">
                    <label for="status_commande">status de commande</label>
                    <input type="text" id="status_commande"class="form-control">
                </div>
                <div class="col-md-8 d-flex">
                    <label for="status_commande">numero de facture</label>
                    <input type="number" id="status_commande"class="form-control">
                </div>
                <div class="col-md-8 d-flex">
                    <label for="status_commande">numero de user</label>
                    <input type="number" id="status_commande"class="form-control">
                </div>
                <div class="col-md-8 d-flex">
                    <label for="status_commande">numero de livraison</label>
                    <input type="number" id="status_commande"class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="card">
        <div class="card-body">
            <h6>ordre details</h6>
            
            
        </div>
    </div>
</div>
    </div>
</div>
@endsection