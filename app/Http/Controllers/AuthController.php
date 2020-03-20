<?php
namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\EnviarCredenciales;
use Mail;
class AuthController extends Controller
{
	public function signup(Request $request)
	{
		//$array = array($request->all() , 'Valores');
		//return response()->json($request->all());
		//return response()->json($array);
		$request->validate([
			'name'     => 'required|string',
			'email'    => 'required|string|email|unique:users',
			'password' => 'required|string|confirmed',
			'tipo' => 'required',
		]);
		$user = new User([
			'name'     => $request->name,
			'email'    => $request->email,
			'password' => bcrypt($request->password),
			'tipo' => $request->tipo,
		]);
		//$user->save();

		$data = array('email' => $request->email, 'password' => $request->password);
		Mail::to($data['email'])->send(new EnviarCredenciales($data));

		return response()->json([
			'message' => 'Usuario creado con éxito',
			'user' => $user
		], 201);
	}

	public function login(Request $request)
	{
		$request->validate([
			'email'       => 'required|string|email',
			'password'    => 'required|string',
			'remember_me' => 'boolean',
		]);
		$credentials = request(['email', 'password']);
		if (!Auth::attempt($credentials)) {
			return response()->json([
				'message' => 'Unauthorized'], 401);
		}
		$user = $request->user();
		$tokenResult = $user->createToken('Personal Access Token');
		$token = $tokenResult->token;
		if ($request->remember_me) {
			$token->expires_at = Carbon::now()->addWeeks(1);
		}
		$token->save();
		return response()->json([
			'user' => $user,
			'access_token' => $tokenResult->accessToken,
			'token_type'   => 'Bearer',
			'expires_at'   => Carbon::parse(
				$tokenResult->token->expires_at)
			->toDateTimeString(),
		]);
	}

	public function logout(Request $request)
	{
		$request->user()->token()->revoke();
		return response()->json(['message' =>
			'Successfully logged out']);
	}

	public function user(Request $request)
	{
		return response()->json($request->user());
	}
}
