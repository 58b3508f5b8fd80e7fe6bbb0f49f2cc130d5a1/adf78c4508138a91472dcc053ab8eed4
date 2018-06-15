<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id'             => 1,
             'name'           => 'Admin',
             'first_name'     => 'Admin',
             'last_name'      => 'Admin',
             'user_id'        => md5('admin@admin.com'.date('YmdHis')),
             'email'          => 'admin@admin.com',
             'password'       => '$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.',
             'remember_token' => '',
            ],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
