@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Profile</h2>
      <br><br>

      





<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="../../assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="../../assets/widgets/uniform/uniform-demo.js"></script>

<!-- Boostrap Tabs -->

<script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="../../assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="../../assets/widgets/chosen/chosen-demo.js"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/input-switch/inputswitch.css">-->
<script type="text/javascript" src="../../assets/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() { "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Textarea -->

<script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

<div class="row mailbox-wrapper">

@include('crm.profile.abstract')

<div class="col-md-8">

    

  

    <div class="example-box-wrapper">
        <ul class="list-group row list-group-icons">
            <li class="col-md-3 active">
                <a href="#tab-example-1" data-toggle="tab" class="list-group-item">
                    <i class="glyph-icon font-red icon-bullhorn"></i>
                    Personal Information
                </a>
            </li>
            <li class="col-md-3">
                <a href="#tab-example-3" data-toggle="tab" class="list-group-item">
                    <i class="glyph-icon font-success icon-clock-o"></i>
                    Recent Activity
                </a>
            </li>
            <li class="col-md-3">
                <a href="#tab-example-2" data-toggle="tab" class="list-group-item">
                    <i class="glyph-icon icon-linecons-mail"></i>
                    Mailbox
                </a>
            </li>
            
        </ul>
        <div class="tab-content">

@include('crm.profile.panel-personalInfo')        
            
@include('crm.profile.panel-recentActivity')

@include('crm.profile.panel-mailbox')

        </div>
    </div>

</div>
</div>
                    </div>




 

        </div>
     </div>


  </div>    






@include('crm.profile.deleteModal')


    @stop
