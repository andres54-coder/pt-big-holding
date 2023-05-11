<?php

namespace App\interfaces;

interface ApiRepository {
    public function getUsers(): array;
    public function getTransactions(int $userId): array;
}
