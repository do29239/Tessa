<?php

namespace App\Http\Controllers\Admin;

use App\Exports\GeneralExport;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\StylistProfile;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportUsers()
    {
        $columns = ['id', 'first_name','last_name','phone','city','address','role', 'email'];
        $headings = ['ID', 'First Name','Last Name','Phone','City','Address', 'Role', 'Email'];

        return Excel::download(new GeneralExport(new User, $columns, $headings), 'users.xlsx');
    }

    public function exportStylists()
    {
        $columns = ['id','user_id', 'saloon_name', 'salon_address','saloon_city','saloon_phone',];
        $headings = ['ID','User ID', 'Saloon Name', 'Salon Address','Saloon City', 'Saloon Phone'];

        return Excel::download(new GeneralExport(new StylistProfile, $columns, $headings), 'stylists.xlsx');
    }

    public function exportProducts()
    {
        $columns = ['id','name', ''=>Product()->brand, 'salon_address','saloon_city','saloon_phone',];
        $headings = ['ID','User ID', 'Saloon Name', 'Salon Address','Saloon City', 'Saloon Phone'];

        return Excel::download(new GeneralExport(new Product, $columns, $headings), 'stylists.xlsx');
    }
}
