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
            $path =  decrypt($path);
            \Log::info($path);
            \Log::info(basename($path));
            try {
                $file= storage_path('app'.DIRECTORY_SEPARATOR.'public'. DIRECTORY_SEPARATOR  . decrypt($path));
                $headers = array(
                          'Content-Type: application/pdf',
                        );
                ob_end_clean();
                return \Response::download($file, basename($path));
            }catch (\Exception $e) {

                dd($e->getMessage());
            }
        }
    public function mailtemplate($from,$by,$mailer)
    {
        $mailer = str_replace($from, $by, $mailer);
        return $mailer;
    }
}
