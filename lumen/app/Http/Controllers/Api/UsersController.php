<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller{

    public function index(){
        // Retorna todos os dados de User
        $users = User::paginate();
        // Retorna uma string - JSON
        return $users;
    }
    public function show($id){
        // Procure ou falhe
        $user = User::findOrFail($id);
        // Retorna uma string - JSON
        return $user;
    }
    
    public function store(Request $request){
        // Insere qualquer parametro que for passado pela requisição    
        $user = User::create($request->all());
        return $user;
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return $user;
    }
}

?>