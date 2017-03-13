@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Recently deleted</h2>
      <br><br>

      <div class="container-fluid" style="padding: 3%;border: 1px solid #dfe8f1;border-radius: 4px;background-color: #fff;">


       @include('trash.items')

       @include('trash.items')

       @include('trash.items')




       </div>
 

        </div>
     </div>


  </div>    

  @include('trash.restoreModel')


@include('trash.deleteModel')
  
    @stop
