<div class="row">
    <div class="col-md-12">
        <div class="row">
            @foreach($stagesTitle as $key=>$title)
                <div class="col-md-4">
                    @livewire('dashboard.card-detail', ['cardId' => $title->id, 'cardName' => $title->name], key('title-'.$title->id))
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">{{$cardName}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive border rounded">
                            <table class="table">
                                <thead>
                                <tr>
                                    @if($cardId != 1)<th><i class="ph-hash"></i></th>@endif
                                    <th>Patient Name</th>
                                    <th>Patient Email</th>
                                    <th>Impresson Type</th>
                                    <th>Dentist Case Status</th>
                                    <th>Registered By</th>
                                    @if($cardId == 1)<th>Impression Recieved</th>@endif
                                </tr>
                                </thead>
                                <tbody>
                                    <!-- start row -->
                                    @if($casesDetail!=NULL)
                                        @foreach($casesDetail as $key => $caseData)
                                        <tr>
                                            @if($cardId != 1)<td><a href="{{route('case-detail', ['caseId' => $caseData['id']])}}">{{$caseData['id']}}</a></td>@endif
                                            <td><a href="{{route('case-detail', ['caseId' => $caseData['id']])}}">{{$caseData['patient']}}</a></td>
                                            <td><a href="{{route('case-detail', ['caseId' => $caseData['id']])}}">{{$caseData['medical_primary_cases_detail']['patient_email']}}</a></td>
                                            <td>{{($caseData['impression_type']== 1)? "Physical Impression" : "STL"}}</td>
                                            <td>
                                                @foreach($stagesTitle as $title)
                                                    @if($title->id == $caseData['medical_primary_cases_detail']['dentist_case_present_status_id'])
                                                        {{$title->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{$createdBy->name}}</td>
                                            @if($cardId == 1)<td></td>@endif
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                No Record Found.
                                            </td>
                                        </tr>
                                    @endif
                                    <!-- end row -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /framed card body table -->
            </div>
        </div>
    </div>
</div>