<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class testProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');


        // add Ecommerce Categories
        $category = new Category();
        $category->name = 'Veg';
        $category->save();



        // add Ecommerce Products
        $product = new Product();
        $product->name = 'Product 1';
        $product->price = '100';
        $product->img = 'p-01';
        $product->description = 'Product 1 description';
        $product->category_id = $category->id;
        $product->save();


        $product = new Product();
        $product->name = 'Product 2';
        $product->img = 'p-02';
        $product->price = '200';
        $product->description = 'Product 2 description';
        $product->category_id = $category->id;
        $product->save();

        // add another category
        $category = new Category();
        $category->name = 'Frute';
        $category->save();

        $product = new Product();
        $product->name = 'Product 3';
        $product->price = '300';
        $product->img = 'p-03';
        $product->description = 'Product 3 description';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product();
        $product->name = 'Product 4';
        $product->img = 'p-04';
        $product->price = '400';
        $product->description = 'Product 4 description';
        $product->category_id = $category->id;
        $product->save();


        return 0;
    }
}
