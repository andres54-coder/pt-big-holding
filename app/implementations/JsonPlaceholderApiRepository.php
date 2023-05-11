<?php

namespace App\implementations;

use App\interfaces\ApiRepository;
use Illuminate\Support\Facades\Http;

class JsonPlaceholderApiRepository implements ApiRepository {

    public function getUserWithTransactions(int $userId): array {
        $user = Http::withOptions(['verify' => false])->get(env('API_HOST')."/users/{$userId}");
        if (count($user->json()) === 0) {
            return $user->json();
        }
        $transactions = $this->getTransactions($userId);
        $response = $user->json();
        $response['transactions']= $transactions;
        return $response;
    }

    public function getUsers(): array {
        $response = Http::withOptions(['verify' => false])->get(env('API_HOST')."/users");
        return $response->json();
    }

    public function getTransactions(int $userId): array {
        $response = Http::withOptions(['verify' => false])->get(env('API_HOST')."/users/{$userId}/transactions");
        return $response->json();
    }
}
