@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Select template</h2>
      <br><br>

       <a href="campaign-editor"><div class="col-sm-3 card" style="background-color: #fff;text-align: center; color:rgba(31, 9, 9, 0.5);height: 300px;padding-top: 3%;margin: 2%;">
            <h1 class="glyph-icon icon-file-text" style="font-size: 90px;color: #3498db;padding-top: 25%;"></h1>
              <br>
              <h3>Custom mail</h3>

            </div>
            </a><!--#template-->

            <div class="clearfix"></div>

            <h3 style="color: rgba(132, 101, 101, 0.62);padding: 2%;">Template category</h3>
     
            @include('campaigns.templates.template-abstract')

             @include('campaigns.templates.template-abstract')

              @include('campaigns.templates.template-abstract')
               @include('campaigns.templates.template-abstract')

              


       <div class="clearfix"></div>
 

        </div>
     </div>


  </div>      
    @stop

 
