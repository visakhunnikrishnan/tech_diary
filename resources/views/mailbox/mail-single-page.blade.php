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
                <div class="float-left">
                    <span class="mail-title">View message</span>
                   
                </div>
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
        <div class="divider"></div>
        <div class="pad15A clearfix mrg10B">
            <div class="float-left">
                <b>John Doe</b> (john.doe@example.com) <i>to</i> <b>me</b>
            </div>
            <div class="float-right opacity-80">
                <i class="glyph-icon icon-clock-o mrg5R"></i>
                17:55, 15.10.2014
            </div>
        </div>
        <div class="mail-toolbar clearfix">
            <div class="float-left">
                <h4 class="font-primary">This is a demo email title</h4>
            </div>
            <div class="float-right">
                <a href="mailbox-compose" class="btn btn-primary" title="Reply">
                    Reply
                    <i class="glyph-icon icon-mail-reply"></i>
                </a>
                <a href="#" class="btn btn-default" title="Print">
                    <i class="glyph-icon icon-print"></i>
                </a>
                <a href="#" class="btn btn-danger mrg10L" title="Delete"  data-toggle="modal" data-target="#confirmDelete">
                    <i class="glyph-icon icon-trash-o"></i>
                </a>
            </div>
        </div>
        <div class="email-body">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>

            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>

            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi</p>
        </div>
        <div class="button-pane">
            <a href="mailbox-compose" class="btn btn-blue-alt" title="Reply">
                <i class="glyph-icon icon-mail-reply"></i>
                Reply
            </a>
            <a href="mailbox-compose" class="btn btn-default" title="Reply">
                Forward
                <i class="glyph-icon icon-mail-forward"></i>
            </a>
        </div>
    </div>
</div>

<div class="col-md-3">

    <div class="content-box nav-list mrg15B">
        <div class="pad10A">
            <a href="mailbox-compose" class="btn btn-success btn-lg btn-block" title="Compose new mail">
                Compose new mail
            </a>
        </div>
        @include('mailbox.smallblock')
    </div>
</div>

</div>







<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="jumbotron" style="background-color: #fff;text-align: center; margin: 7%;">
    <h2>Are you sure want to delete?</h2>
    <a class="btn btn-info" href="#" style="padding-left: 2%;padding-right: 2%;">Yes</a>
    <a class="btn btn-success" href="#" style="padding-left: 2%;padding-right: 2%;" class="close" data-dismiss="modal" aria-hidden="true" >No</a>
  </div>
</div>

 

        </div>
     </div>


  </div>      
    @stop