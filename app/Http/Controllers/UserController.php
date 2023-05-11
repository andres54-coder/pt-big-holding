<?php

namespace App\Http\Controllers;

use App\implementations\JsonPlaceholderApiRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $apiRepository;

    public function __construct(JsonPlaceholderApiRepository $apiRepository) {
        $this->apiRepository = $apiRepository;
    }

    public function index(Request $request) {
        $users = $this->apiRepository->getUsers();
        if ($request->wantsJson()) {
            return response($users);
        }
       return view('users.index', ['users' => collect($users)]);
    }

    public function show(Request $request ,int $userId) {
        $transactions = $this->apiRepository->getTransactions($userId);
        if ($request->wantsJson()) {
            return response($transactions);
        }
        return view('users.showTransactions', ['transactions' => collect($transactions)]);
    }

    public function userWithTransactions(Request $request ,int $userId){

        $data = $this->apiRepository->getUserWithTransactions($userId);
        if ($request->wantsJson()) {
            return response($data);
        }
    }
}
