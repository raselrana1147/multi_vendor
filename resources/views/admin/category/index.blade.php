@extends("layouts.admin")
@section("title","DPG Admin | Category List")
@section("breadcrumb","Category List")
@section("content")
   <div class="row">
       <div class="col-12">
           <div class="card">
               <div class="card-body">
                     <a href="{{ route('admin.category_create') }}" class="btn btn-primary btn-icon float-right"><span class="btn-icon-label"><i class="fas fa-plus mr-2"></i></span>Add New</a>
                    <h4 class="mt-0 header-title">Calegory List</h4>
                   <table id="tables_item" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                       <thead>
                       <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>$320,800</td>
                       </tr>
                       
                       </tbody>
                   </table>
   
               </div>
           </div>
       </div> <!-- end col -->
   </div> <!-- end row -->
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("#tables_item").DataTable()
        })
    </script>
@endsection()