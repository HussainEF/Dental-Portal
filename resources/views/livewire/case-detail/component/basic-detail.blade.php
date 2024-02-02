<div>
    <div class="card">
        <div class="card-header">
            <div class="row d-flex align-items-baseline">
                <div class="col-md-6 col-sm-6 col-12 d-flex align-items-baseline">
                    <i class="ph-first-aid-kit"></i>
                    <h1 class="mb-0 ms-2">Case</h1>
                </div>
                <div class="col-md-6 col-sm-6 col-12 d-flex align-items-baseline justify-content-end">
                    <i class="ph-hash"></i>
                    <h3 class="mb-0">{{$primaryCase['case_id']}}</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <h6 class="mb-0">CASE RECEIVED</h6>
                </div>
                <div class="col-md-6 col-sm-6 col-12 d-flex justify-content-end">
                    <h6 class="mb-0">{{$primaryCase['receive_date']}}</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="">{{$primaryCase['patient']}}</div>
                    <div class="">{{$primaryCase['age']}}</div>
                    <div class="">{{($primaryCase['arch_upper']==41?'Upper,':'')}}{{($primaryCase['arch_lower'])==41?"Lower":""}}</div>
                    <div class="">{{($primaryCase['impression_type']==1?"Physical Impression":"STL")}}</div>
                    <div class="">DeadLine: {{$medicalCase['target_date_setup_timeline']}}</div>
                </div>
                <div class="col-md-6">
                    <!-- Hard Coded Path -->
                    <img src="{{asset('images/logos/cp12.png')}}" alt="logo"/>
                    <!-- From Database -->
                    <!-- <img src="{{$company['logo']}}" alt="logo"/> -->
                    <h5>{{$company['name']}}</h5>
                    <div class="">{{$country['name']}}</div>
                    <div class="">Uploaded By:</div>
                    <div class="">{{$createdDateTime}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
