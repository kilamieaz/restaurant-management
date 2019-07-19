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
        $userAdmin->name = 'Sultan Imam Muttaqin';
        $userAdmin->email = 'im.kilamieaz@gmail.com';
        $userAdmin->email_verified_at = now();
        $userAdmin->remember_token = Str::random(10);
        $userAdmin->password = bcrypt('password');
        $userAdmin->handphone = '082281000518';
        $userAdmin->save();

        if (!file_exists(public_path('storage/photo'))) {
            mkdir(public_path('storage/photo'), 0777, true);
        }

        // data user
        factory(User::class, 2)->create([
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
                    'chef_id' => $userAdmin->id,
                    'waiter_id' => $userAdmin->id,
                    'member_id' => $userMember->id,
                ])->each(function ($order) use ($menu, $table) {
                    factory(DetailOrder::class)->create([
                        'order_id' => $order->id,
                        'menu_id' => $menu->id,
                        'table_id' => $table->id,
                    ]);
                });
            });
        });
    }
}
