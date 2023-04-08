<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Ordre;
use App\Models\User;
use App\Models\Livraison;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class DashOrdreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myOrders()
    {

        $ordres = Ordre::with('livraison')->with('users')->get();
        //dd($ordres);
        return view('Ordre.index', compact('ordres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUser()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
        return view('user.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        
        $user = new User;
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->pays = $request->pays;
        $user->ville = $request->ville;
        $user->phone = $request->phone;
        $user->code_postal = $request->code_postal;
        $user->role_as = $request->role_as;
        $user->save();
        return redirect()->route('user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser($id)
    {
         $user = User::find($id);
        // return view('user.edit', compact('user'));
        return view('user.edit',[
            "user"=> $user
        ]);
    }
    public function updateUser(Request $request, $id)
    {
        return $request;
        $user = User::find($id);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->pays = $request->pays;
        $user->ville = $request->ville;
        $user->phone = $request->phone;
        $user->code_postal = $request->code_postal;
        $user->role_as = $request->role_as;
       
        $user->save();
        return view('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function GenerateFacture($id)
    {
        if (Ordre::where('id', $id)->exists()) {
            $ordre = Ordre::find($id);
            //return view('Ordre.facture', compact('ordre'));
            $data = [
                'ordre' => $ordre,
               
            ];
           
            $pdf = PDF::loadView('Ordre.facture', $data);
    
            return $pdf->download('fundaofwebit.pdf');
        } else {
            return redirect()->back()->with('status', 'No ordre found');
        }
    }

   
    public function destroy($id)
    {
        //
    }
}
