<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light-secondary shadow-none">
                <div class="card-body p-4">
                    <div class="d-flex">
                        <div class="round rounded bg-secondary d-flex align-items-center justify-content-center">
                            <i class="fa fa-medkit fa-xl text-white" aria-hidden="true"></i>
                        </div>
                        <h1 class="mb-0 ms-2">Case</h1>
                        <div class="ms-auto text-secondary d-flex align-items-center">
                            <i class="fa fa-hashtag" aria-hidden="true"></i>
                            <h3 class="mb-0 fw-semibold fs-7">{{$primaryCase['case_id']}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom bg-light-info">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title fw-semibold mb-0 lh-sm">Case Recieved</h5>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <h6 class="card-title fw-semibold mb-0 lh-sm">{{$primaryCase['receive_date']}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="">{{$primaryCase['patient']}}</div>
                                <div class="">{{$primaryCase['age']}}</div>
                                <div class="">{{($primaryCase['arch_upper']==41?'Upper,':'')}}{{($primaryCase['arch_lower'])==41?"Lower":""}}</div>
                                <div class="">{{($primaryCase['impression_type']==1?"Physical Impression":"STL")}}</div>
                                <div class="">DeadLine: {{$medicalCase['target_date_setup_timeline']}}</div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{$company['logo']}}" alt="logo"/>
                                <h5>{{$company['name']}}</h5>
                                <div class="">{{$country['name']}}</div>
                                <div class="">Uploaded By:</div>
                                <div class="">{{$createdDateTime}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
