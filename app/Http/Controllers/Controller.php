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
            try {
                $file= storage_path('app'.DIRECTORY_SEPARATOR.'public'. DIRECTORY_SEPARATOR  . decrypt($path));
                $headers = array(
                          'Content-Type: application/pdf',
                        );

                return \Response::download($file, time().'.pdf', $headers);
            }catch (\Exception $e) {

                dd($e->getMessage());
            }
        }
}
