<?php

namespace Database\Seeders;

use App\Account;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function autoCreate(int $userId): void
    {
        $accounts = Account::orderBy('created_at', 'desc')->first();

        if ($accounts) {
            $lastAccountNumber = $accounts->account_number;
        } else {
            $lastAccountNumber = mt_rand(1111111111, 9999999999);
        }

        $accountNumber = (int) $lastAccountNumber + 1;

        Account::create([
            'user_id' => $userId,
            'account_number' => $accountNumber,
        ]);
    }

    public function run(): void
    {
        $user = User::where('email', 'user@nsbplc.com')->first();

        if (! $user) {
            $user = User::create([
                'first_name' => 'NSB PLC',
                'last_name' => 'User',
                'email' => 'user@nsbplc.com',
                'status' => 1,
                'admin' => 0,
                'account_type' => 'Savings',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('USERNSBPLSV3455'),
            ]);

            $this->autoCreate($user->id);
        }
    }
}
