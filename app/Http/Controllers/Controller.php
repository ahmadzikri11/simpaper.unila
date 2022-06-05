<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function storeFile($attr, $folder = null)
    // {
    //     $folder = $folder !== null ? "public/files/" . $folder : "public/files/";
    //     $path = $attr ? $attr->store($folder) : 'null files';
    //     return $path;
    // }
}
