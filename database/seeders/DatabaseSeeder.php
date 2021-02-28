<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Experiencia;
use App\Models\Habilidade;
use App\Models\Premio;
use App\Models\User;

use App\Models\Blog;

use App\Models\Post;
use App\Models\Comment;

use DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        \App\Models\Rede::factory(10)->create();
        
        \App\Models\Curriculo::factory(10)->create();
        Habilidade::factory(20)->create();
        Experiencia::factory(20)->create();
        Premio::factory(20)->create();

        //criar um blog para cada usuário
        foreach(User::all() as $user) {
            $blog = Blog::factory()->make();
            $blog->user_id = $user->id;
            
            $blog->save();
        }

        Post::factory(100)->create();

        Comment::factory(1000)->create();

        //entra o algoritmo para respostas para comentários...
        foreach (Comment::all() as $comment) {            

            $random_num = rand(1,10);
            if ($random_num / 10 >= 0.8) {

                $resposta_id = Comment::inRandomOrder()->first()->id;

                if ($comment->id != $resposta_id) {
                    DB::table('comments_comments')->insert([
                        'comentario' => $comment->id,
                        'resposta' => $resposta_id,                        
                    ]);
                }
                
            }
        }

    }
}
