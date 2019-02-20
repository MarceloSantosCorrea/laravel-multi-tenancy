<?php

use MaximGestor\Models\OauthClient;
use Illuminate\Database\Seeder;

class AuthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OauthClient::create([
            'name'                   => 'Multi Tenancy Personal Access Client',
            'secret'                 => '7897qp0WTBd1ket3yjoEwvgH460T9lvCh4stnT2u',
            'redirect'               => 'http://localhost',
            'personal_access_client' => '1',
            'password_client'        => '0',
            'revoked'                => '0',
        ]);

        OauthClient::create([
            'name'                   => 'Multi Tenancy Password Grant Client',
            'secret'                 => 'xngthlV7XjGTa1Rrmpxhz1TfU29oqyZB3JTJCrDo',
            'redirect'               => 'http://localhost',
            'personal_access_client' => '0',
            'password_client'        => '1',
            'revoked'                => '0',
        ]);
    }
}
