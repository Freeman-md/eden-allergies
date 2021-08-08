<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Auth Endpoints
 *
 * API Endpoints for authentication
 */
class AuthController extends Controller
{

    /**
     * POST api/register
     * 
     * Create new user account
     * 
     * Get New Authorization Token
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * @bodyParam name string required Name of the new account
     * @bodyParam email string required Email Address of the new account
     * @bodyParam password string required Password of the new account
     * @bodyParam password_confirmation string required Password Confirmation
     * 
     * @responseField id The id of the user
     * @responseField name The name of the user
     * @responseField email The email of the user
     * @responseField created_at Timestamp user was created
     * @responseField updated_at Timestamp user was last updated
     * @responseField deleted_at Timestamp user was trashed
     * @responseField token Authorization Token
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * POST api/login
     * 
     * Login to registered account
     * 
     * Get New Authorization Token
     * 
     * @param  \Illuminate\Http\Request  $request
     * 
     * @bodyParam email string required Email Address of registered account
     * @bodyParam password string required Password of registered account
     * 
     * @responseField id The id of the user
     * @responseField name The name of the user
     * @responseField email The email of the user
     * @responseField created_at Timestamp user was created
     * @responseField updated_at Timestamp user was last updated
     * @responseField deleted_at Timestamp user was trashed
     * @responseField token Authorization Token
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email 
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * POST api/logout
     * 
     * Logout of account
     * 
     * Delete Authorization Token
     * 
     * @authenticated
     * 
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function logout() {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged Out'
        ], Response::HTTP_OK);
    }

}
