<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;
use App\Models\User;
use App\Models\BookCategory;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        UserType::insert([
            ['user_type_name' => 'admin'],
            ['user_type_name' => 'customer']
        ]);

        User::insert([
            ['first_name' => 'admin','last_name' => "admin",'email' => 'admin@gmail.com','password' => '$2y$10$1EWOeYU2MoZO00iiFzsWA.584FWHaLf3BrQQmOnWOD4cUcgk2F8XS','user_type_id' => 1],
            ['first_name' => 'James','last_name' => "Cameron",'email' => 'james@gmail.com','password' => '$2y$10$1EWOeYU2MoZO00iiFzsWA.584FWHaLf3BrQQmOnWOD4cUcgk2F8XS','user_type_id' => 2]
        ]);

        BookCategory::insert([
            ['book_category_name' => 'Adventure stories'],//1
            ['book_category_name' => 'Classics'],//2
            ['book_category_name' => 'Crime'],//3
            ['book_category_name' => 'Fairy tales, fables, and folk tales'],//4
            ['book_category_name' => 'Fantasy'],//5
            ['book_category_name' => 'Historical fiction'],//6
            ['book_category_name' => 'Science fiction'],//7
            ['book_category_name' => 'Short stories'],//8
            ['book_category_name' => 'Suspense'],//9
            ['book_category_name' => 'Thrillers'],//10
            ['book_category_name' => 'Westerns'],//11
            ['book_category_name' => 'Biographies'],//12
            ['book_category_name' => 'Business'],//13
            ['book_category_name' => 'Cookbooks'],//14
            ['book_category_name' => 'Health'],//15
            ['book_category_name' => 'History'],//16
            ['book_category_name' => 'Horror'],//17
            ['book_category_name' => 'Memoirs'],//18
            ['book_category_name' => 'Poetry'],//19
            ['book_category_name' => 'Romance'],//20
            ['book_category_name' => 'Self-help'],//21
            ['book_category_name' => 'Travel'],//22
            ['book_category_name' => 'Young adult'],//23
            ['book_category_name' => 'Other'],//24
        ]);

        Author::insert([
            ['author_name' => 'Rabindranath Tagore'],//1
            ['author_name' => 'Bankim Chandra Chatterjee'],//2
            ['author_name' => 'Michael Madhusudan Dutt'],//3
            ['author_name' => 'Leela Majumdar'],//4
            ['author_name' => 'shirshendu mukhopadhyay'],//5
            ['author_name' => 'Narayan gangopadhyay'],//6
            ['author_name' => 'Mahasweta devi'],//7
            ['author_name' => 'Sukumar Roy'],//8
        ]);


        Publisher::insert([
            ['publisher_name' => "Dey's Publishing"],//1
            ['publisher_name' => "Ananda Publishers"],//2
            ['publisher_name' => "Mitra O Ghosh"],//3
            ['publisher_name' => "Sahitya Samsad"],//4
            ['publisher_name' => "Dev Sahitya Kutur"],//4
            ['publisher_name' => "Sahitya Akademi"],//5
            ['publisher_name' => "Bharatiya Bhasha Parishad"],//6
        ]);

        Book::insert([
            ['title' => 'Golpoguchho','book_category_id' => 24, 'author_id' => 1, 'publisher_id' => 1, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//1
            ['title' => 'Gitabitan','book_category_id' => 1, 'author_id' => 1, 'publisher_id' => 1, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 3],//2
            ['title' => 'Kheror khata','book_category_id' => 1, 'author_id' => 4, 'publisher_id' => 1, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//3
            ['title' => 'Batashbari','book_category_id' => 1, 'author_id' => 4, 'publisher_id' => 5, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//4
            ['title' => 'Pagla Pagolder golpo','book_category_id' => 1, 'author_id' => 4, 'publisher_id' => 1, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//5
            ['title' => 'Manojader Adbhut Baari','book_category_id' => 1, 'author_id' => 5, 'publisher_id' => 1, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 1],//7
            ['title' => 'Hirer Aangti','book_category_id' => 3, 'author_id' => 5, 'publisher_id' => 2, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//8
            ['title' => 'Raghab Babur Bari','book_category_id' => 1, 'author_id' => 5, 'publisher_id' => 2, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 34],//9
            ['title' => 'Advuture','book_category_id' => 4, 'author_id' => 5, 'publisher_id' => 6, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//10
            ['title' => 'Tenida','book_category_id' => 1, 'author_id' => 6, 'publisher_id' => 3, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//11
            ['title' => 'Aabol tabol','book_category_id' => 1, 'author_id' => 8, 'publisher_id' => 1, 'price' => 1200.00, 'image' => "",'isbn' => '', 'stock' => 100],//12
        ]);
    }
}
