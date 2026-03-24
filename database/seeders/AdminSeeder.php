<?php

namespace Database\Seeders;

use App\Account;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function autoCreate(int $userId): void
    {
        $accounts = Account::orderBy('created_at', 'desc')->first();

        if ($accounts) {
            $lastAccountNumber = $accounts->account_number;
        } else {
            $lastAccountNumber = '70' . mt_rand(11111111111, 99999999999);
        }

        $accountNumber = (int) $lastAccountNumber + 1;

        Account::create([
            'user_id' => $userId,
            'account_number' => $accountNumber,
        ]);
    }

    public function run(): void
    {
        $user = User::where('email', 'admin@shirecity.com')->first();

        if (! $user) {
            $user = User::create([
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@shirecity.com',
                'status' => 1,
                'admin' => 1,
                'account_type' => 'Savings',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('ADMINPASS123'),
            ]);

            $this->autoCreate($user->id);
        }
    }
}
