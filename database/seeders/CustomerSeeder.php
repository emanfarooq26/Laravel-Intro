<?php

namespace Database\Seeders;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerFactory::new()
        ->count(25)
        ->hasInvoices(10)
        ->create();

        CustomerFactory::new()
        ->count(100)
        ->hasInvoices(5)
        ->create();

         CustomerFactory::new()
        ->count(100)
        ->hasInvoices(3)
        ->create();

         CustomerFactory::new()
        ->count(5)
        ->hasInvoices(0)
        ->create();
    }
}
