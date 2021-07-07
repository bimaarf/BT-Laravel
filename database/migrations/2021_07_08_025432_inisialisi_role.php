<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use App\Models\Permission;

class InisialisiRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $owner = Role::create([
            'name' => 'owner',
            'display_name' => 'Project Owner', // optional
            'description' => 'Memvalidasi berita | edit berita | hapus berita', // optional
        ]);
        
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin Administrator', // optional
            'description' => 'Menambahkan berita | edit berita | sudah di validasi', // optional
        ]);

        $user = Role::create([
            'name' => 'user',
            'display_name' => 'User Administrator', // optional
            'description' => 'Menambahkan berita | belum di validasi', // optional
        ]);

        $publishPost = Permission::create([
            'name' => 'publish-post',
            'display_name' => 'Publish Posts', // optional
            'description' => 'publish new blog posts', // optional
            ]);
            
        $editPost = Permission::create([
                'name' => 'edit-post',
                'display_name' => 'Edit Post', // optional
                'description' => 'edit existing post', // optional
            ]);

        $createPost = Permission::create([
                'name' => 'create-post',
                'display_name' => 'Create Posts', // optional
                'description' => 'create new blog posts', // optional
            ]);


            $owner->attachPermissions([$publishPost, $editPost, $createPost]);
            $admin->attachPermissions([$createPost, $editPost]);
            $user->attachPermission($createPost);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
