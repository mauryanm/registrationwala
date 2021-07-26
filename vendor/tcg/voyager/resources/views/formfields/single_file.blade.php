@if(isset($dataTypeContent->{$row->field}))
<div data-field-name="{{ $row->field }}">
        <a class="fileType" target="_blank"
          href="{{ Storage::disk(config('voyager.storage.disk'))->url(json_decode($dataTypeContent->{$row->field})->download_link) }}"
          data-file-name="{{ json_decode($dataTypeContent->{$row->field})->download_link }}" data-id="{{ $dataTypeContent->getKey() }}">
          Download
        </a>
        <a href="#" class="voyager-x remove-single-file"></a>
      </div>
@endif
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}">
