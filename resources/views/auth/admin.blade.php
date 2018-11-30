
<div class="py-4">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            {{ Auth::user()->getRelations() }}
        </div>
    @endif


    <div class="row justify-content-center">
            <div class="col-md">
                    <div class="card">
                            <div class="card-header"><h5>Congresos</h5></div>
                    </div>
                    <div class="">
                            <div id="congresos"></div>
                    </div>
            </div>
    </div>
</div>



