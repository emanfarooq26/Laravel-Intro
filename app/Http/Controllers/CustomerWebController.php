<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CustomerDataTable;
class CustomerWebController extends Controller
{
    public function index(CustomerDataTable $dataTable)
    {
        return $dataTable->render('customer.index');
    }
}
