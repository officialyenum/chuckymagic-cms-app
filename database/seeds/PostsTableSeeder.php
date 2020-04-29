<?php


use App\Post;
use App\Category;
use App\Tag;
use App\User;
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
        $author1 = User::create([
            'name' => 'Opone Adaeze',
            'email' => 'oponeadaeze@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author2 = User::create([
            'name' => 'Iwegbue Charles',
            'email' => 'iwegbuecharles@gmail.com',
            'password' => Hash::make('password')
        ]);

        $category1 = Category::create([
            'name' => 'News'
        ]);
        $category2 = Category::create([
            'name' => 'Marketing'
        ]);
        $category3 = Category::create([
            'name' => 'Photography'
        ]);
        $category4 = Category::create([
            'name' => 'Design'
        ]);
        $category5 = Category::create([
            'name' => 'Programming'
        ]);
        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'category_id' => $category1->id,
            'user_id' => $author2->id,
            'image' => 'posts/1.jpg'
        ]);
        $post2 = $author1->posts()->create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);
        $post3 = $author2->posts()->create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'category_id' => $category4->id,
            'image' => 'posts/3.jpg'
        ]);
        $post4 = Post::create([
            'title' => 'This is why it\'s time to ditch dress codes at work',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'category_id' => $category4->id,
            'user_id' => $author1->id,
            'image' => 'posts/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'job'
        ]);
        $tag2 = Tag::create([
            'name' => 'customers'
        ]);
        $tag3 = Tag::create([
            'name' => 'record'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag1->id, $tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag2->id, $tag3->id]);
        $post4->tags()->attach([$tag3->id, $tag1->id]);
    }
}
