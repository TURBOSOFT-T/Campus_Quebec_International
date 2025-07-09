<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\{User, config, Marque, Service, Category};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    private $permissions = [
        'dashboard',
        'clients_view',
        'clients_delete',

        'category_view',
        'category_add',
        'category_edit',
        'category_delete',

        'marque_view',
        'marque_add',
        'marque_edit',
        'marque_delete',

        'service_view',
        'service_add',
        'service_edit',
        'service_delete',

        'product_view',
        'product_add',
        'product_edit',
        'product_delete',

        'order_view',
        'order_add',
        'order_edit',
        'order_delete',

        'setting_view',
        'gestion_stock',

        'sponsor_view',
        'sponsor_add',
        'sponsor_edit',
        'sponsor_delete',

        'video_view',
        'video_add',
        'video_edit',
        'video_delete',

        'image_view',
        'image_add',
        'image_edit',
        'image_delete',

        'event_view',
        'event_add',
        'event_edit',
        'event_delete',

        'formation_view',
        'formation_add',
        'formation_edit',
        'formation_delete',

        'blog_view',
        'blog_add',
        'blog_edit',
        'blog_delete',
        






    ];


    public function run(): void
    {

        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }





        // Créer un administrateur directement après la création de la table
        $user = new User();
        $user->nom = ' Admin';
        $user->prenom = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->role = "admin";
        $user->adresse = '123 rue de la paix';
        $user->phone = '0612345678';
        $user->code_postal = '75000';
        $user->password = Hash::make('123456789');
        $user->save();

        //creer un profil developpers
        $dev = new User();
        $dev->nom = "Clien";
        $dev->prenom = 'Clien';
        $dev->email = 'dev@yahoo.fr';
        $dev->role = "client";
        $dev->adresse = '123 rue du code';
        $dev->phone = '0612345678';
        $dev->code_postal = '75000';
        $dev->password = Hash::make('123456789');
        $dev->save();


        $permissions = Permission::pluck('id', 'id')->all();

        $role = Role::create(['name' => 'admin']);
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $role2 = Role::create(['name' => 'developper']);
        $dev->assignRole([$role2->id]);
        $role2->syncPermissions($permissions);


        $role = Role::create(['name' => 'personnel']);


        $cat = new config();
        //  $cat->frais = '15';
        $cat->description = 'Bienvenue à Campus Québec International, votre passerelle linguistique vers l\'intégration au Canada.';
        $cat->telephone = '56399165';
        $cat->email = 'campusquebec@gmail.com';
        $cat->addresse = '168 boul. Saint-Jean-Baptiste Châteauguay (Québec) J6K3B5 Canada';

        $cat->save();
    }
}
