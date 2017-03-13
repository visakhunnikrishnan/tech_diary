@extends('master-template')
 
  @section('content')

   <!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="../../assets/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="../../assets/widgets/datatable/datatable-responsive.js"></script>

<script type="text/javascript">

    /* Datatables responsive */

    $(document).ready(function() {
        $('#datatable-responsive').DataTable( {
            responsive: true
        } );
    } );

    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>


    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Group members</h2>
      <br><br>

      



      <div class="container-fluid"><!--#group-->
 <div class="panel-layout">
        <div class="panel-box">
            <div class="panel-content image-box" style="height: 250px;">              
                <div class="image-content font-white">
                    <div class="meta-box meta-box-bottom">
                        <h1 class="glyph-icon icon-users" style="font-size: 80px;"></h1>
                        <br>
                        <h3 class="meta-heading">Ebook downloaders</h3>
                        <h4 class="meta-subheading">Created at Mar-17</h4>
                    </div>
                </div>
                <img src="../../assets/image-resources/blurred-bg/blurred-bg-13.jpg" alt="">
            </div>
            <div class="panel-content pad15A bg-white radius-bottom-all-4">             
                <div class="mrg15T mrg15B"></div>
                <h3 style="color:#777;padding-left: 4%;" class="pull-left"><b style="font-size: 60px;">72</b> members</h3>
                <div class="clearfix"></div>
                <blockquote class="col-sm-8" style="color:#777;text-align: left;margin-left: 3%;">
                    <p style="font-size: 15px;">This is the description of the group states that the group contains users downloaded Ebooks from home page.</p>
                    
                </blockquote>
                <div class="clearfix"></div>
                <a href="#" data-toggle="modal" data-target="#newGroup" class="btn btn-info">Edit</a>
                <a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-primary">Delete</a>

            </div>
        </div>
    </div>
    </div><!--#group-->


@include('crm.members.addContactForm')




@include('crm.members.table')




 

        </div>
     </div>


  </div>      

@include('crm.members.contactAbstractModal')

@include('crm.members.addtoGroupsModal')

@include('crm.members.deleteModal')

@include('crm.members.groupModal')
    @stop
