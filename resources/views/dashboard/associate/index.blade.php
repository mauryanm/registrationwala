@extends('templates.dashboard')
@section('title', "Become an Associate | ".\Auth::user()->name )
@section('description', "Become an Associate")
@section('keywords', "Become an Associate")
@section('content')
@include('dashboard.includes.header')
@include('dashboard.includes.error')

@if((collect(\Auth::user()->only(['compname','address','experience','expertise']))->whereNull())->isEmpty())
<section class="dashboadbg  pt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-12 d-flex ">
            <div class="tabs-section-nav user_sidebarbox p-3 pt-0 w-100 align-items-stretch">
               <div class="row mt-5">
                  <div class="col-md-10 col-sm-10 col-12 offset-md-1">
                     <div class="alert alert-success alert-dismissible text-center">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Congratulations {{ \Auth::user()->name }} </strong> <br>Thank you for signing up for Registrationwala’s Associate program. Here are your details: 
                     </div>
                     <div>
                        <table class="table table-striped  table-bordered ">
                           <tr>
                              <th scope="row">Name</th>
                              <td>{{ \Auth::user()->name }}</td>
                           </tr>
                           <tr>
                              <th scope="row">Profession</th>
                              <td>{{ \Auth::user()->profession }}</td>
                           </tr>
                           <tr>
                              <th scope="row">Experience</th>
                              <td>{{ \Auth::user()->experience }} years </td>
                           </tr>
                           <tr>
                              <th scope="row">Core Area of expertise</th>
                              <td>{!! implode(', ', (collect(json_decode(\Auth::user()->expertise)))->all(':message')) !!}</td>
                           </tr>
                        </table>
                     </div>
                     <div > Your Associate Program Number is <strong> RW{{ sprintf("%'06d", \Auth::user()->id) }}</strong> Our officials will reach out to you soon. Please provide this Associate program number as reference for future correspondence. </div>
                     <p class="mt-4">For any more queries regarding the Registrationwala Associate Program, reach out to<br>
                        <strong>Gaurav Bansal:+91-99990-62751</strong>
                        <br>
                        <strong>Dushyant Sharma: +91-98106-02899</strong> 
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
@else
<section class="dashboadbg  pt-5 pb-5">
   <div class="container">
   <div class="row">
      <div class="col-12 col-md-12">
         <div class="alert alert-info alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Hello  {{ \Auth::user()->name }}</strong> You are just one step away from getting Onboarded to Registrationwala Associate Program 
         </div>
         <div class="row">
            <div class="col-12 col-md-4 d-flex">
               <div class="user_sidebarbox w-100 align-items-stretch">
                  <!-- <div class="text-center mt-4"> <img src="https://www.registrationwala.com/uploaded_files/testimonials/84X84/1521186243_861.jpg" class="img-fluid rounded-circle profile-user-img" alt=""> </div> -->
                  <h5 class="text-center mt-2">{{ \Auth::user()->name }} </h5>
                  <ul class="list-unstyled p-3 user-sidebar bluebg">
                     <li> <i class="fa fa-envelope-o"></i> {{\Auth::user()->email}}</li>
                     <li><i class="fa fa-mobile"></i> {{\Auth::user()->phone}}</li>
                  </ul>
               </div>
            </div>
            <div class="col-12 col-md-8 d-flex">
               <div class="tabs-section-nav user_sidebarbox p-3 pt-0 w-100 align-items-stretch">
                  <form method="post" action="{{ route('dashboard.updateuser',\Auth::user()->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                     <div class="row">
                        <div class="col-12 col-md-12">
                           <div class="form-group">
                              <label >Name of the firm </label>
                              <input type="text" name="compname" value="{{ \Auth::user()->compname }}" class="form-control" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 col-md-12">
                           <div class="form-group">
                              <label >Address of the firm </label>
                              <textarea class="form-control" name="address" required>{!! \Auth::user()->address !!}</textarea>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12 col-md-12">
                           <div class="form-group">
                              <label >Experience in years</label>
                              <input type="text" name="experience" value="{{ \Auth::user()->experience }}" class="form-control" >
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="inputFormRow">
                              <label >Core fields of expertise </label>
                              <div class="input-group mb-3">
                                 <input type="text" name="expertise[]" class="form-control m-input" placeholder="" autocomplete="off" required>
                                 <div class="input-group-append">
                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                 </div>
                              </div>
                           </div>
                           <div id="newRow"></div>
                           <button id="addRow" type="button" class="btn btn-info mb-3">Add Row</button>
                        </div>
                     </div>
                     <script type="text/javascript">
                        // add row
                        $("#addRow").click(function () {
                            var html = '';
                            html += '<div id="inputFormRow">';
                            html += '<div class="input-group mb-3">';
                            html += '<input type="text" name="expertise[]" class="form-control m-input" placeholder="" autocomplete="off">';
                            html += '<div class="input-group-append">';
                            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
                            html += '</div>';
                            html += '</div>';
                        
                            $('#newRow').append(html);
                        });
                        
                        // remove row
                        $(document).on('click', '#removeRow', function () {
                            $(this).closest('#inputFormRow').remove();
                        });
                     </script>
                     <div class="row">
                        <div class="col-12 col-md-12">
                           <div class="form-group">
                              <label >Describe your professional journey (optional):</label>
                              <textarea class="form-control " name="description" rows="4" required="" >{!! \Auth::user()->description !!}</textarea>
                           </div>
                           <div class="form-group">
                              <input type="checkbox" required> <a href=""><u>I agree to the terms and conditions mentioned in the Associate program.</u> </a>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-6 offset-sm-6">
                           <button type="submit" class="btn  w-50 btn-secondary btn-sm pull-right">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endif

@endsection

@section('script')

@endsection