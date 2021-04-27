@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                            method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if($edit)
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            <div class="form-group col-md-12">
                            	<label class="control-label" for="name">Select Type</label>
                            <select class="form-control select2 select2-hidden-accessible" name="type" aria-hidden="true" id="type" onchange="resetother(this)">
                            	<option value="">Select Type</option>
                                <option value="SERVICE" {{$dataTypeContent->type=='SERVICE'?'selected="selected"':''}}>Service</option>
                               <option value="POST" {{$dataTypeContent->type=='POST'?'selected="selected"':''}}>Blog</option>
                        </select>
                    </div>
                            <div class="form-group col-md-4">
                            	<label class="control-label" for="name">Heading</label>
                            	<input required="" type="text" class="form-control" name="heading" placeholder="Heading" value="{{ $dataTypeContent->heading ?? '' }}">
                            </div>
                            <div class="form-group  col-md-4 ">                                    
                                <label class="control-label" for="name">Category</label>
                                <select class="form-control select2 select2-hidden-accessible" name="category_id"  id="category_id" aria-hidden="true" onchange="getservicebycat(this,'#service_id')">
                                	<option value="">Select Category</option>
                                    @foreach(Voyager::model('Category')::all() as $category)
                                        <option value="{{ $category->id }}"@if(isset($dataTypeContent->category_id) && $dataTypeContent->category_id == $category->id) selected="selected"@endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="service_id">Service</label>
                                <select class="form-control select2 select2-hidden-accessible" name="service_id[]" id="service_id" data-maximum-selection-length="4" required="" multiple>
                                    @foreach(Voyager::model('Service')::where('category_id',$dataTypeContent->category_id)->get() as $service)
                                    
                                        <option value="{{ $service->id }}" @if(is_array(json_decode($dataTypeContent->service_id)) && in_array($service->id, json_decode($dataTypeContent->service_id))) selected="selected"@endif>{{ $service->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                            	<label class="control-label" for="name">Heading</label>
                            	<input required="" type="text" class="form-control" name="heading2" placeholder="Heading" value="{{ $dataTypeContent->heading2 ?? '' }}">
                            </div>
                            <div class="form-group  col-md-4 ">                                    
                                <label class="control-label" for="name">Category</label>
                                <select class="form-control select2 select2-hidden-accessible" name="category2_id" id="category2_id" data-select2-id="1" tabindex="-1" aria-hidden="true" onchange="getservicebycat(this,'#service2_id')">
                                	<option value="">Select Category</option>
                                    @foreach(Voyager::model('Category')::all() as $category)
                                        <option value="{{ $category->id }}"@if(isset($dataTypeContent->category2_id) && $dataTypeContent->category2_id == $category->id) selected="selected"@endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="service2_id">Service</label>
                                <select class="form-control select2 select2-hidden-accessible" name="service2_id[]" id="service2_id" data-maximum-selection-length="4" required="" multiple>
                                    @foreach(Voyager::model('Service')::where('category_id',$dataTypeContent->category2_id)->get() as $service)
                                        <option value="{{ $service->id }}" @if(is_array(json_decode($dataTypeContent->service2_id)) && in_array($service->id, json_decode($dataTypeContent->service2_id)))selected="selected"@endif>{{ $service->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            @php
                                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                                $exclude = ['heading', 'heading2', 'category_id', 'category2_id', 'service_id', 'service2_id', 'type'];
                            @endphp

                            @foreach($dataTypeRows as $row)
                            @if(!in_array($row->field, $exclude))
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? NULL;
                                    if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                                        $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                                    }
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                                @endif

                                <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                                    {{ $row->slugify }}
                                    <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['options' => $row->details])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                @endif
                            @endforeach

                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            @section('submit-buttons')
                                <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                            @stop
                            @yield('submit-buttons')
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                            enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                                 onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-danger" id="confirm_delete_modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
                </div>

                <div class="modal-body">
                    <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete File Modal -->
@stop

@section('javascript')
    <script>
        var params = {};
        var $file;

        function deleteHandler(tag, isMulti) {
          return function() {
            $file = $(this).siblings(tag);

            params = {
                slug:   '{{ $dataType->slug }}',
                filename:  $file.data('file-name'),
                id:     $file.data('id'),
                field:  $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
          };
        }

        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            //Init datepicker for date fields if data-datepicker attribute defined
            //or if browser does not handle date inputs
            $('.form-group input[type=date]').each(function (idx, elt) {
                if (elt.hasAttribute('data-datepicker')) {
                    elt.type = 'text';
                    $(elt).datetimepicker($(elt).data('datepicker'));
                } else if (elt.type != 'date') {
                    elt.type = 'text';
                    $(elt).datetimepicker({
                        format: 'L',
                        extraFormats: [ 'YYYY-MM-DD' ]
                    }).datetimepicker($(elt).data('datepicker'));
                }
            });

            @if ($isModelTranslatable)
                $('.side-body').multilingual({"editing": true});
            @endif

            $('.side-body input[data-slug-origin]').each(function(i, el) {
                $(el).slugify();
            });

            $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
            $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
            $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
            $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

            $('#confirm_delete').on('click', function(){
                $.post('{{ route('voyager.'.$dataType->slug.'.media.remove') }}', params, function (response) {
                    if ( response
                        && response.data
                        && response.data.status
                        && response.data.status == 200 ) {

                        toastr.success(response.data.message);
                        $file.parent().fadeOut(300, function() { $(this).remove(); })
                    } else {
                        toastr.error("Error removing file.");
                    }
                });

                $('#confirm_delete_modal').modal('hide');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });

        
        function getservicebycat(self,seid){

        	$(seid).val("").trigger("change");
        	$(seid).html('<option>Select service...</option>')
                $.ajax({
                    url: "/service-list",
                    dataType: 'json',
                    type: 'get',
                    data: {id:self.value},
                    success: function(data)
                    {
                        $.each(data.service, function(key, value) {
                        $(seid).append($("<option/>", {
                            value: value.id,
                            text: value.title
                        }));
                    });
                    },
                    error: function(data)
                    {
                      $('html').css('cursor', 'default');
                      alert('Something went wrong.')
                    }
                });
        }
        function resetother(self){
        	
        	// $("#category_id").val(null).trigger("change");
        	// $("#category2_id").val(null).trigger("change");
        	// $("#service_id").val("").trigger("change");
        	// $("#service2_id").val("").trigger("change");


        }
    </script>
@stop
