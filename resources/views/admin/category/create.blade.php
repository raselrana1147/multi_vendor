@extends("layouts.admin")
@section("title","DPG Admin | Category Create")
@section("breadcrumb","Category Create")
@section("content")
   <div class="row">
       <div class="col-lg-8 offset-2">
           <div class="card">
               <div class="card-body">
   					 <a href="" class="btn btn-primary btn-icon float-right">
   					 	<span class="btn-icon-label"><i class="fas fa-arrow-left mr-2"></i></span>Back</a>
                   <h4 class="mt-0 header-title">Validation type</h4>
  	
                   <form class="custom-validation" action="#">
                       <div class="form-group">
                           <label>Required</label>
                           <input type="text" class="form-control" required placeholder="Type something"/>
                       </div>
   
                       <div class="form-group">
                           <label>Equal To</label>
                           <div>
                               <input type="password" id="pass2" class="form-control" required
                                       placeholder="Password"/>
                           </div>
                           
                       </div>
                       <div class="form-group mb-0">
                           <div>
                               <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                   Submit
                               </button>
                           </div>
                       </div>
                   </form>
   
               </div>
           </div>
       </div> <!-- end col -->
   
     
   </div> <!-- end row -->
@endsection