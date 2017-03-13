@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Create new survey</h2>
      <br><br>

      




      <div class="container-fluid card" style="padding: 7%;padding-bottom: 10%;margin-top: 3%;);">

                              <h1  class="close"  style="font-size: 40px;">&times;</h1>  
                              <div class="clearfix"></div>
                                
                            <br>
                              
                             
                           
                             <div class="clearfix"></div>
                                  <div class="form-group">
                
                   
                       <div class="clearfix"></div>
                       <br>
                               <div class="col-sm-6" style="margin: 1%;">
                                <input type="text" style="font-size: 18px;color: rgba(31, 9, 9, 0.8);" placeholder="Enter the title"  class="form-control">
                            </div>


                               <div class="col-sm-10" style="margin: 1%;">
                                <input type="text" style="font-size: 16px;color: rgba(31, 9, 9, 0.8);" placeholder="Enter the survey question"  class="form-control">
                            </div>
 
                             <div class="clearfix"></div>
                             <label class="col-sm-1 control-label" style="color: rgba(31, 9, 9, 0.6);margin: 1%;">Option-1</label>
                             <div class="col-sm-7" style="margin: 1%;">

                                <input type="text" style="font-size: 14px;color: rgba(31, 9, 9, 0.8);" placeholder="Enter the option"  class="form-control">
                            </div>



                            <div class="clearfix"></div>
                             <label class="col-sm-1 control-label" style="color: rgba(31, 9, 9, 0.6);margin: 1%;">Option-2</label>
                             <div class="col-sm-7" style="margin: 1%;">

                                <input type="text" style="font-size: 14px;color: rgba(31, 9, 9, 0.8);" placeholder="Enter the option"  class="form-control">
                            </div>



                            <div class="clearfix"></div>
                             <label class="col-sm-1 control-label" style="color: rgba(31, 9, 9, 0.6);margin: 1%;">Option-3</label>
                             <div class="col-sm-7" style="margin: 1%;">

                                <input type="text" style="font-size: 14px;color: rgba(31, 9, 9, 0.8);" placeholder="Enter the option"  class="form-control">
                            </div>


                            <div class="clearfix"></div>
                             <label class="col-sm-1 control-label" style="color: rgba(31, 9, 9, 0.6);margin: 1%;">Option-4</label>
                             <div class="col-sm-7" style="margin: 1%;">

                                <input type="text" style="font-size: 14px;color: rgba(31, 9, 9, 0.8);" placeholder="Enter the option"  class="form-control">
                            </div>



 
                            <div class="clearfix"></div>   

                          <div class="form-group" style="padding-bottom: 5%;padding-left: 3%;">
                    <label class="col-sm-2 control-label" style="color: rgba(31, 9, 9, 0.6);">Popup</label>
                    <div class="col-sm-4">
                        <select class="form-control">
                            <option style="color: rgba(31, 9, 9, 0.6);">After loading</option>
                            <option style="color: rgba(31, 9, 9, 0.6);">After 1 minute</option>
                            <option style="color: rgba(31, 9, 9, 0.6);">After 2 minute</option>
                            <option style="color: rgba(31, 9, 9, 0.6);">After 5 minute</option>
                        </select>
                    </div>
                </div>


                         <div class="clearfix"></div>   
                       <div class="col-sm-12 pull-left"></div>

                 

                       <div class="clearfix"></div>
                       <div class="col-sm-4 pull-right"> 
                           <a href="#" data-toggle="modal" data-target="#popupModal" class="btn btn-info" style="margin: 1%;">Submit</a>
                           
                        </div>  
                             <br>
           
                          </div>





 

        </div>
     </div>


  </div>      
    @stop