<?php

namespace TCG\Voyager\FormFields;

class SingleFileHandler extends AbstractHandler
{
    protected $codename = 'single_file';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.single_file', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
