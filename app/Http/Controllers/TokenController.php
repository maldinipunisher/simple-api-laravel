<?php

namespace App\Http\Controllers;
use App\Models\Token;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index() {
        $tokens = Token::all(); 
        return view('index', [
            'tokens' => $tokens
        ]); 
    }

    public static function create(){
        $token = new Token;
        $data = Str::random(60); 
        $token->token = $data; 
        $token->save();
        return redirect()->route('index')->with('message', 'Token baru telah dibuat '. $data);
    }
}
