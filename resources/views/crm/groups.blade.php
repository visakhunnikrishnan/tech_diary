@extends('master-template')
 
  @section('content')

  <script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>


    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Groups</h2>
      <br><br>

       @include('crm.groups.group-abstract')
       @include('crm.groups.group-abstract')
       @include('crm.groups.group-abstract')
       @include('crm.groups.group-abstract')
       
       <div class="col-sm-4">
         <a href="#" data-toggle="modal" data-target="#newGroup" style="text-decoration: none;"><div class="card" style="background-color: #fff;text-align: center; color:rgba(31, 9, 9, 0.5);height: 476px;;padding-top: 3%;">
            <h1 class="glyph-icon icon-users" style="font-size: 125px;color: #3498db; padding-top: 35%;"></h1>
              <br>
              <h1>New Group</h1>

            </div>
            </a><!--#page-->
       </div>

        </div>
     </div>


  </div>      




@include('crm.groups.groupModal')

@include('crm.groups.deleteModal')


    @stop
