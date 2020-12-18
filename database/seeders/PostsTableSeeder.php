<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => 1,
            'title' => 'first',
            'content' => 'Quisque auctor venenatis ex ac congue. In hac habitasse platea dictumst. Proin finibus vehicula tortor sit amet eleifend. Duis dignissim, arcu nec faucibus suscipit, erat sapien maximus diam, a accumsan dui nisl et metus. Curabitur bibendum ligula enim, eu mattis nulla accumsan vitae. Nulla feugiat quam eu urna pulvinar semper. Suspendisse potenti.<br><br>In metus ex, lacinia sed varius ut, laoreet nec erat. Integer in tristique quam. Mauris in mauris tristique, interdum ante vitae, finibus leo. In vestibulum, lacus eu egestas rhoncus, elit velit facilisis nunc, at consequat felis risus vel justo. Donec ultricies convallis magna, in efficitur justo cursus vel. Curabitur dignissim mauris sit amet lectus scelerisque, id venenatis neque euismod. Cras nec venenatis justo, vitae tempus urna. Praesent vitae nunc posuere, rutrum nibh at, condimentum magna. Curabitur sit amet mi eget odio euismod porttitor non ac eros. Vestibulum bibendum egestas libero, vel interdum magna mattis mollis.',
            'user_id' => 1,
            'created_at' => '2020-12-16 03:52:43',
            'updated_at' => '2020-12-16 03:52:43'
        ]);

        DB::table('posts')->insert([
            'id' => 2,
            'title' => 'The real version',
            'content' => 'Dear Customers,<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper justo condimentum, ultrices libero id, ultricies arcu. Nulla interdum vestibulum maximus. Phasellus placerat sollicitudin rhoncus. In risus turpis, rutrum a maximus eget, tincidunt vitae diam. Curabitur a aliquam ante. Sed mattis faucibus est a consequat. Nulla diam justo, pharetra et orci quis, maximus rhoncus sapien.<br><br>Quisque auctor venenatis ex ac congue. In hac habitasse platea dictumst. Proin finibus vehicula tortor sit amet eleifend. Duis dignissim, arcu nec faucibus suscipit, erat sapien maximus diam, a accumsan dui nisl et metus. Curabitur bibendum ligula enim, eu mattis nulla accumsan vitae. Nulla feugiat quam eu urna pulvinar semper. Suspendisse potenti.<br><br>In metus ex, lacinia sed varius ut, laoreet nec erat. Integer in tristique quam. Mauris in mauris tristique, interdum ante vitae, finibus leo. In vestibulum, lacus eu egestas rhoncus, elit velit facilisis nunc, at consequat felis risus vel justo. Donec ultricies convallis magna, in efficitur justo cursus vel. Curabitur dignissim mauris sit amet lectus scelerisque, id venenatis neque euismod. Cras nec venenatis justo, vitae tempus urna. Praesent vitae nunc posuere, rutrum nibh at, condimentum magna. Curabitur sit amet mi eget odio euismod porttitor non ac eros. Vestibulum bibendum egestas libero, vel interdum magna mattis mollis.<br><br>Sincerely,<br>Guest WiFi Management System Team<br>2020.12.15',
            'user_id' => 1,
            'created_at' => '2020-12-16 03:59:39',
            'updated_at' => '2020-12-16 03:59:39'
        ]);
    }
}
