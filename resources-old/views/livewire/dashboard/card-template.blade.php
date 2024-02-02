<div class="row">
    <div class="col-md-12">
        <div class="row">
            @foreach($caseStagesTitle as $key=>$title)
                <div class="col-md-4">
                    @livewire('dashboard.card-detail', ['card_id' => $title->id, 'card_name' => $title->name], key('title-'.$title->id))
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="zero_config"
                            class="table border table-striped table-bordered text-nowrap">
                            <thead>
                                <!-- start row -->
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Patient Email</th>
                                    <th>Impresson Type</th>
                                    <th>Dentist Case Status</th>
                                    <th>Registered By</th>
                                    @if($cardId == 1)<th>Impression Recieved</th>@endif
                                </tr>
                                <!-- end row -->
                            </thead>
                            <tbody>
                                <!-- start row -->
                                @if(!empty($casesDetail))
                                @foreach($casesDetail as $key => $caseData)
                                <tr>
                                    <td>{{($cardId == 1) ? $caseData['id'] : "11" }}</td>
                                    <td>{{($cardId == 1) ? $caseData['patient'] : "Ali" }}</td>
                                    <td>{{($cardId == 1) ? "" : $caseData['patient_email']}}</td>
                                    <td>{{($cardId == 1) ? $caseData['impression_type'] : ""}}</td>
                                    <td>{{($cardId == 1) ? "" : $caseData['dentist_case_present_status_id']}}</td>
                                    <td>{{($cardId == 1) ? $caseData['receive_date'] : ""}}</td>
                                    @if($cardId == 1)<td></td>@endif
                                </tr>
                                @endforeach
                                @endif
                                <!-- end row -->
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>