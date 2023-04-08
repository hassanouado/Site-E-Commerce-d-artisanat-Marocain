<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">VALABLEU</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: {{ $ordre->id }}</h2>
                    <p class="sub-heading">Order Date: {{ $ordre->created_at->format('d.m.Y')   }} </p>
                    <p class="sub-heading">Email Address: {{ $ordre->users->email }} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{ $ordre->users->name }} {{ $ordre->users->prenom }}  </p>                  
                      <p class="sub-heading">Phone Number: {{ $ordre->users->phone }}  </p>
                    <p class="sub-heading">pays,ville: {{ $ordre->users->pays }} {{ $ordre->users->ville }} </p>
                    <p class="sub-heading">code postal: {{ $ordre->users->code_postal }}  </p>   
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price(dh)</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal(dh)</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0;       @endphp
                    @foreach ($ordre->products as $product )
                      
                   
                    <tr>
                        <td> {{ $product->libelle}}</td>
                        <td>{{ $product->prix }}</td>
                        <td>1</td>
                        <td>{{ $product->prix }}</td>
                    </tr>
                    @php $total = $total+ $product->prix;       @endphp
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> {{ $total }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1</td>
                        <td> {{ (1/100)*$total }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> {{  (1/100)*$total+$total }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: {{ $ordre->payment_status }}</h3>
            <h3 class="heading">Payment Mode: {{ $ordre->payment_method }}</h3>
        </div> 
    </div>      

</body>
</html>
