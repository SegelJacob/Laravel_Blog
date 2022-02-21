<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory(4)->create();

        Category::create([
            'name' => 'Sweet',
            'slug' => 'sweet'
        ]);

        Category::create([
            'name' => 'Savoury',
            'slug' => 'savoury'
        ]);

        Category::create([
            'name' => 'Blog',
            'slug' => 'blog'
        ]);

        Post::create([
            'category_id' => '3',
            'user_id' => '1',
            'slug' => 'sourdough-basics',
            'title' => 'Sourdough Basics',
            'excerpt' => 'The basics of sustaining and baking with a sourdough starter',
            'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam id ligula sit amet varius. Pellentesque non purus est. Duis condimentum nunc
                            sagittis ipsum finibus suscipit. Praesent ac magna id turpis tristique tristique a a leo. Phasellus non leo eros. Etiam justo quam, suscipit vel ligula id, accumsan
                            consequat leo. Donec condimentum ullamcorper felis. Vivamus sagittis velit mauris, vulputate mattis erat porttitor in.
                Aliquam semper arcu eget dui lacinia dapibus. Nullam tincidunt ex ac cursus sagittis. Fusce id cursus sem, at feugiat quam. Nunc a tempus dolor. Donec nec pretium lorem.
                Vestibulum orci est, accumsan eu nibh id, pharetra dictum felis. Aliquam placerat mattis nisi, sed auctor eros iaculis ac. Ut sagittis sollicitudin justo, vitae pulvinar
                ipsum sodales vehicula. Duis et purus vel nisl feugiat semper quis ut sapien. Sed volutpat dapibus purus, in pellentesque sem tristique id. Nullam in volutpat ligula,
                 sit amet elementum velit. Donec iaculis pretium dignissim. Sed lobortis metus pellentesque odio faucibus, quis efficitur elit vestibulum. Sed tellus sem, ullamcorper non
                 vestibulum a, viverra quis augue. Vestibulum congue tincidunt enim.
                Vivamus lacinia, ante id fermentum aliquet, eros metus dignissim augue, egestas ornare mi augue sagittis ex. Sed sit amet scelerisque justo. Quisque non libero viverra lectus
                interdum dapibus at id ipsum. Phasellus justo lacus, laoreet vitae mollis sit amet, tincidunt sit amet ipsum. Nulla egestas orci sed laoreet suscipit. Praesent eget elit orci.
                Pellentesque quis sollicitudin urna, sit amet tempus nisi. Morbi malesuada tempor auctor. Nulla non ipsum at tortor tempor egestas. Nunc accumsan neque eu viverra suscipit.
                Sed blandit elit quis est vehicula vestibulum. </p>',
            'created_at' => '2022-02-20 22:16:57',
            'updated_at' => '2022-02-20 22:16:57',
            'published_at' => '2021-05-20 22:16:57'
        ]);

        Post::create([
            'category_id' => '3',
            'user_id' => '2',
            'slug' => 'feed-starter',
            'title' => 'How to feed your starter',
            'excerpt' => 'Different hydrations for different loaves is the key',
            'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam id ligula sit amet varius. Pellentesque non purus est. Duis condimentum nunc
                            sagittis ipsum finibus suscipit. Praesent ac magna id turpis tristique tristique a a leo. Phasellus non leo eros. Etiam justo quam, suscipit vel ligula id, accumsan
                            consequat leo. Donec condimentum ullamcorper felis. Vivamus sagittis velit mauris, vulputate mattis erat porttitor in.
                Aliquam semper arcu eget dui lacinia dapibus. Nullam tincidunt ex ac cursus sagittis. Fusce id cursus sem, at feugiat quam. Nunc a tempus dolor. Donec nec pretium lorem.
                Vestibulum orci est, accumsan eu nibh id, pharetra dictum felis. Aliquam placerat mattis nisi, sed auctor eros iaculis ac. Ut sagittis sollicitudin justo, vitae pulvinar
                ipsum sodales vehicula. Duis et purus vel nisl feugiat semper quis ut sapien. Sed volutpat dapibus purus, in pellentesque sem tristique id. Nullam in volutpat ligula,
                 sit amet elementum velit. Donec iaculis pretium dignissim. Sed lobortis metus pellentesque odio faucibus, quis efficitur elit vestibulum. Sed tellus sem, ullamcorper non
                 vestibulum a, viverra quis augue. Vestibulum congue tincidunt enim.
                Vivamus lacinia, ante id fermentum aliquet, eros metus dignissim augue, egestas ornare mi augue sagittis ex. Sed sit amet scelerisque justo. Quisque non libero viverra lectus
                interdum dapibus at id ipsum. Phasellus justo lacus, laoreet vitae mollis sit amet, tincidunt sit amet ipsum. Nulla egestas orci sed laoreet suscipit. Praesent eget elit orci.
                Pellentesque quis sollicitudin urna, sit amet tempus nisi. Morbi malesuada tempor auctor. Nulla non ipsum at tortor tempor egestas. Nunc accumsan neque eu viverra suscipit.
                Sed blandit elit quis est vehicula vestibulum. </p>',
            'created_at' => '2022-02-20 22:16:57',
            'updated_at' => '2022-02-20 22:16:57',
            'published_at' => '2021-06-20 22:16:57'
        ]);

        Post::create([
            'category_id' => '2',
            'user_id' => '3',
            'slug' => 'olive-bread',
            'title' => 'Spiced olive rye loaf',
            'excerpt' => 'Making a spiced olive loaf seemed like a natural combination when I peeked at the leftover jars of condiments in my fridge..and it tasted exceptional!',
            'body' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam id ligula sit amet varius. Pellentesque non purus est. Duis condimentum nunc
                            sagittis ipsum finibus suscipit. Praesent ac magna id turpis tristique tristique a a leo. Phasellus non leo eros. Etiam justo quam, suscipit vel ligula id, accumsan
                            consequat leo. Donec condimentum ullamcorper felis. Vivamus sagittis velit mauris, vulputate mattis erat porttitor in.
                Aliquam semper arcu eget dui lacinia dapibus. Nullam tincidunt ex ac cursus sagittis. Fusce id cursus sem, at feugiat quam. Nunc a tempus dolor. Donec nec pretium lorem.
                Vestibulum orci est, accumsan eu nibh id, pharetra dictum felis. Aliquam placerat mattis nisi, sed auctor eros iaculis ac. Ut sagittis sollicitudin justo, vitae pulvinar
                ipsum sodales vehicula. Duis et purus vel nisl feugiat semper quis ut sapien. Sed volutpat dapibus purus, in pellentesque sem tristique id. Nullam in volutpat ligula,
                 sit amet elementum velit. Donec iaculis pretium dignissim. Sed lobortis metus pellentesque odio faucibus, quis efficitur elit vestibulum. Sed tellus sem, ullamcorper non
                 vestibulum a, viverra quis augue. Vestibulum congue tincidunt enim.
                Vivamus lacinia, ante id fermentum aliquet, eros metus dignissim augue, egestas ornare mi augue sagittis ex. Sed sit amet scelerisque justo. Quisque non libero viverra lectus
                interdum dapibus at id ipsum. Phasellus justo lacus, laoreet vitae mollis sit amet, tincidunt sit amet ipsum. Nulla egestas orci sed laoreet suscipit. Praesent eget elit orci.
                Pellentesque quis sollicitudin urna, sit amet tempus nisi. Morbi malesuada tempor auctor. Nulla non ipsum at tortor tempor egestas. Nunc accumsan neque eu viverra suscipit.
                Sed blandit elit quis est vehicula vestibulum. </p>',
            'created_at' => '2022-02-20 22:16:57',
            'updated_at' => '2022-02-20 22:16:57',
            'published_at' => '2021-07-20 22:16:57'
        ]);
    }
}
