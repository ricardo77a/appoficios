<?php
namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetUsersController extends Controller
{
	public function all()
	{

		//return response()->json('holi');

		$users = User::get();

		return response()->json([
			'message' => 'Total de usuarios',
			'users' => $users
		], 201);
	}

	public function get(Request $request)
	{
		$users = User::where('name', 'like', '%'.$request->name.'%')->get();

		if (is_null($users)) {
			return response()->json([
				'message' => 'Bad Request'], 400);
		}
		return response()->json([
			'message' => 'Mostrando los usuarios',
			'users' => $users
		], 200);
	}
}
