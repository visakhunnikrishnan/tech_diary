@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage recipients</h2>
      <br><br>

       @include('crm.groups.group-abstract')
       
       <div class="col-sm-4">
         <a href="#" data-toggle="modal" data-target="#addGroups" style="text-decoration: none;"><div class="card" style="background-color: #fff;text-align: center; color:rgba(31, 9, 9, 0.5);height: 476px;;padding-top: 3%;">
            <h1 class="glyph-icon icon-users" style="font-size: 125px;color: #3498db; padding-top: 35%;"></h1>
              <br>
              <h1>Add Group</h1>

            </div>
            </a><!--#page-->
       </div>


      <div class="clearfix"></div>
      
      <hr>
      <h2 style="color: rgba(132, 101, 101, 0.62);">Email content</h2>
      <br><br>

      <div class="container-fluid" style="background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.08),0 2px 10px 0 rgba(0,0,0,0.06);padding: 3%;">
      <div class="col-sm-8">
        <h3 style="color: rgba(132, 101, 101, 0.62);"><span class="glyph-icon icon-envelope"" style="font-size: 70px;color: #46b8da;padding:2%;"></span> Your email subject goes here</h3>
        </div>
        <div class="col-sm-4" style="padding-top: 3%;">
        <a href="campaign-preview" class="btn btn-info">Preview</a>
        <a href="campaign-editor" class="btn btn-success">Edit</a>
        </div>
      </div>

      <div class="container-fluid" style="padding: 3%;padding-top: 6%;">
        <a href="#" class="btn btn-info btn-lg ">Save & Exit</a>
        <a href="campaign-finalize" class="btn btn-info btn-lg pull-right">Next</a>
      </div>

        </div>
     </div>


  </div>      



@include('campaigns.recipients.addGroupsModal')

@include('campaigns.recipients.deleteModal')

@include('campaigns.recipients.groupModal')

    @stop