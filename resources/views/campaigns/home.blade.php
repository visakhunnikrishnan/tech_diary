@extends('master-template')
 
  @section('content')

  <script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>


    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Campaigns</h2>
      <br><br>

       @include('campaigns.home.active-campaign-abstract')
       @include('campaigns.home.active-campaign-abstract')

      
       @include('campaigns.home.pending-campaign-abstract')

       @include('campaigns.home.saved-campaign-abstract')

       
      
       
       <div class="col-sm-4" style="margin-top: 30px;">
         <a href="#" data-toggle="modal" data-target="#newCampaignModal" style="text-decoration: none;min-height: 530px;"><div class="card" style="background-color: #fff;text-align: center; color:rgba(31, 9, 9, 0.5);height: 476px;;padding-top: 3%;">
            <h1 class="glyph-icon icon-files-o" style="font-size: 125px;color: #3498db; padding-top: 35%;"></h1>
              <br>
              <h1>New Campaign</h1>

            </div>
            </a><!--#page-->
       </div>

        </div>
     </div>


  </div>      




@include('campaigns.home.newCampaignModal')


@include('campaigns.home.deleteModal')



    @stop
