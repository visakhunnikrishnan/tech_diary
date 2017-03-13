@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      

       <!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="../../assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="../../assets/widgets/uniform/uniform-demo.js"></script>

<div class="row mailbox-wrapper">

<div class="col-md-9">

<div class="content-box">
<div class="mail-header clearfix row">
    <div class="col-md-8">
        <span class="mail-title">Outbox</span>
        
    </div>
    <div class="float-right col-md-4 pad0A">
        <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default" tabindex="-1">
                    <i class="glyph-icon icon-search"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="mail-toolbar clearfix">
    <div class="float-left">
        <a href="#" title="" class="btn btn-default mrg5R">
            <i class="glyph-icon font-size-11 icon-refresh"></i>
        </a>
        <div class="dropdown">
            <a href="#" title="" class="btn btn-default" data-toggle="dropdown">
                <i class="glyph-icon icon-cog"></i>
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <ul class="dropdown-menu float-right">
                
               
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-download mrg5R"></i>
                        Download
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" class="font-red" title="">
                        <i class="glyph-icon icon-remove mrg5R"></i>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="float-right">
        <div class="btn-toolbar">
            <div class="btn-group">
                <div class="size-md mrg10R">
                    1 to 11 of 21 entries
                </div>
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-default">
                    <i class="glyph-icon icon-angle-left"></i>
                </a>
                <a href="#" class="btn btn-default">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
            <div class="btn-group mrg15L">
                <a href="#" class="btn btn-primary">
                    <i class="glyph-icon icon-list opacity-80"></i>
                    <i class="glyph-icon icon-caret-down"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@include('mailbox.outbox.mailsTable')

</div>
</div>

<div class="col-md-3">

    <div class="content-box nav-list mrg15B">
        <div class="pad10A">
            <a href="#" class="btn btn-success btn-lg btn-block" title="Compose new mail">
                Compose new mail
            </a>
        </div>
        @include('mailbox.smallblock')
    </div>
</div>

</div>
 

        </div>
     </div>


  </div>      




@include('mailbox.outbox.bookmarkMail')




  
    @stop