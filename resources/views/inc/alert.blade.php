@if(Session::has('message')) 


<div class="alert {{ Session::get('alert-class', 'alert-info') }}" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">
            ×
        </span>
    </button>
    <div class="d-flex align-items-center justify-content-start">    	
        <i class="icon ion-{{ Session::get('icon') }} alert-icon tx-32 mg-t-5 mg-xs-t-0"> 
        </i>
        <span>
            <strong>
                
            </strong>
            {{ Session::get('message') }}
        </span>
    </div>
    <!-- d-flex -->
</div>
<!-- alert -->
@endif
