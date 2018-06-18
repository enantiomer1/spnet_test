 @if ($errors->any())
 <div class="container">
 <div class="alert alert-warning m-4 rounded" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-window-close-o fa-lg" aria-hidden="true"></i></span>
        </button>
        @foreach ($errors->all() as $error)
            {!! $error !!}<br/>
        @endforeach
    </div>
</div>
@elseif (session()->get('flash_success'))
<div class="modal fade rounded" id="flash_modal" tabindex="-1" role="dialog" aria-labelledby="flash_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success pl-4" id="flash_modalTitle"><i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 class="modal-body text-center mt-2">
            @if(is_array(json_decode(session()->get('flash_success'), true)))
                {!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}
            @else
                {!! session()->get('flash_success') !!}
            @endif
            </h5>
        </div>
    </div>
</div>
@elseif (session()->get('flash_warning'))
<div class="modal fade rounded" id="flash_modal" tabindex="-1" role="dialog" aria-labelledby="flash_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-warning pl-4" id="flash_modalTitle"><i class="fa fa-window-close-o fa-2x" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 class="modal-body text-center mt-2">
            @if(is_array(json_decode(session()->get('flash_warning'), true))) 
                {!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!} 
            @else 
                {!! session()->get('flash_warning') !!} 
            @endif
            </h5>
        </div>
    </div>
</div>
@elseif (session()->get('flash_info'))
<div class="modal fade rounded" id="flash_modal" tabindex="-1" role="dialog" aria-labelledby="flash_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info pl-4" id="flash_modalTitle"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 class="modal-body text-center mt-2">
            @if(is_array(json_decode(session()->get('flash_info'), true))) 
                {!! implode('', session()->get('flash_info')->all(':message<br/>')) !!} 
            @else 
                {!! session()->get('flash_info') !!} 
            @endif
            </h5>
        </div>
    </div>
</div>
@elseif (session()->get('flash_danger'))
<div class="modal fade rounded" id="flash_modal" tabindex="-1" role="dialog" aria-labelledby="flash_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger pl-4" id="flash_modalTitle"><i class="fa fa-hand-paper-o fa-2x" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 class="modal-body text-center mt-2">
            @if(is_array(json_decode(session()->get('flash_danger'), true))) 
                {!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!} 
            @else 
                {!! session()->get('flash_danger') !!} 
            @endif
            </h5>
        </div>
    </div>
</div>
@elseif (session()->get('flash_message'))
<div class="modal fade rounded" id="flash_modal" tabindex="-1" role="dialog" aria-labelledby="flash_modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info pl-4" id="flash_modalTitle"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 class="modal-body text-center mt-2">
            @if(is_array(json_decode(session()->get('flash_message'), true))) 
                {!! implode('', session()->get('flash_message')->all(':message<br/>')) !!}
            @else 
                {!! session()->get('flash_message') !!} 
            @endif
            </h5>
        </div>
    </div>
</div>
@endif
