<?php

use App\User;
use App\Role;
use App\Menu;
use App\Table;
use App\Order;
use App\Category;
use App\DetailOrder;
use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data role
        $roleAdmin = new Role();
        $roleAdmin->name = 'Admin';
        $roleAdmin->description = 'Akses Admin';
        $roleAdmin->save();

        $roleCashier = new Role();
        $roleCashier->name = 'Cashier';
        $roleCashier->description = 'Akses Cashier';
        $roleCashier->save();

        $roleChef = new Role();
        $roleChef->name = 'Chef';
        $roleChef->description = 'Akses Chef';
        $roleChef->save();

        $roleWaiter = new Role();
        $roleWaiter->name = 'Waiter';
        $roleWaiter->description = 'Akses Waiter';
        $roleWaiter->save();

        $roleMember = new Role();
        $roleMember->name = 'Member';
        $roleMember->description = 'Akses Member';
        $roleMember->save();

        //data user admin
        $userAdmin = new User();
        $userAdmin->role_id = $roleAdmin->id;
        $userAdmin->name = 'Admin restaurant';
        $userAdmin->email = 'im.admin@gmail.com';
        $userAdmin->email_verified_at = now();
        $userAdmin->remember_token = Str::random(10);
        $userAdmin->password = bcrypt('password');
        $userAdmin->handphone = '082281000518';
        $userAdmin->save();

        //data user Chef
        $userChef = new User();
        $userChef->role_id = $roleChef->id;
        $userChef->name = 'Chef';
        $userChef->email = 'im.chef@gmail.com';
        $userChef->email_verified_at = now();
        $userChef->remember_token = Str::random(10);
        $userChef->password = bcrypt('password');
        $userChef->handphone = '082281000518';
        $userChef->save();

        //data user Cashier
        $userCashier = new User();
        $userCashier->role_id = $roleCashier->id;
        $userCashier->name = 'Cashier';
        $userCashier->email = 'im.cashier@gmail.com';
        $userCashier->email_verified_at = now();
        $userCashier->remember_token = Str::random(10);
        $userCashier->password = bcrypt('password');
        $userCashier->handphone = '082281000518';
        $userCashier->save();

        //data user Waiter
        $userWaiter = new User();
        $userWaiter->role_id = $roleWaiter->id;
        $userWaiter->name = 'Waiter';
        $userWaiter->email = 'im.waiter@gmail.com';
        $userWaiter->email_verified_at = now();
        $userWaiter->remember_token = Str::random(10);
        $userWaiter->password = bcrypt('password');
        $userWaiter->handphone = '082281000518';
        $userWaiter->save();

        if (!file_exists(public_path('storage/photo'))) {
            mkdir(public_path('storage/photo'), 0777, true);
        }

        // data user
        factory(User::class, 5)->create([
            'role_id' => $roleMember->id
        ])->each(function ($userMember) use ($userAdmin){
            //data category
            factory(Category::class)->create()->each(function ($category) use ($userMember, $userAdmin) {
                //data menu
                $menu = $category->menus()->save(factory(Menu::class)->create([
                    'category_id' => $category->id,
                ]));
                //data table
                $table = factory(Table::class)->create();

                factory(Order::class)->create([
                    'cashier_id' => $userAdmin->id,
                    'member_id' => $userMember->id,
                ])->each(function ($order) use ($menu, $table, $userAdmin) {
                    factory(DetailOrder::class)->create([
                        'chef_id' => $userAdmin->id,
                        'waiter_id' => $userAdmin->id,
                        'order_id' => $order->id,
                        'menu_id' => $menu->id,
                        'table_id' => $table->id,
                    ]);
                });
            });
        });
    }
}
