<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Traits\MailakmTrait;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, MailakmTrait;
    public function download($path)
        {
            //PDF file is stored under project/public/download/info.pdf
            $file= storage_path('public/' . $path);

            $headers = array(
                      'Content-Type: application/pdf',
                    );

            return Response::download($file, 'filename.pdf', $headers);
        }
}
