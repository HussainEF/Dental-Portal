<div>
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Treatment Plan Action</h6>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="updateStatus" method="post">
                @if (session()->has('message'))
                    <div class="alert text-danger">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="text-success" wire:loading>
                    Updating State...
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="setup">Setup</label>
                        <select id="setup" class="form-control" wire:model="setupId">
                            <option value="">Select Link</option>
                            @if($medicalCaseSetupData->isNotEmpty())
                                @foreach($this->medicalCaseSetupData as $setupData)
                                    @if($setupData->MedicalCaseSetupUploadData->isNotEmpty())
                                        @foreach($setupData->MedicalCaseSetupUploadData as $uploadData)
                                        <option value="{{$setupData['id']}}">{{$setupData['number_stages_upper'].$setupData['number_stages_lower']}}-{{$uploadData['upload_link']}}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        @error('setupId') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="status">Case Status</label>
                        <select id="status" class="form-control" wire:model="selectedStatusId">
                            <option value="">Select Status</option>
                            @if($doctorCaseStatus !== NULL)
                                @foreach($doctorCaseStatus as $caseStatus)
                                    @if($caseStatus['id'] != ASSIGNED AND $caseStatus['id'] != UN_ASSIGN AND $caseStatus['id'] != PENDING)
                                        <option value="{{$caseStatus['id']}}">{{$caseStatus['name']}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        @error('selectedStatusId') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <!-- Conditional Rendering is off -->
                    <div class="col-md-6 {{($selectedStatusId != '')? 'show':''}}">
                        <label for="ckeditor_classic_prefilled">Comments</label>
                        <textarea class="form-control" id="ckeditor_classic_prefilled" wire:model="comment" ></textarea>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary h-20"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update Status</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Treatment Plan History</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive border rounded">
				<table class="table">
                    <thead>
                        <tr>
                            <th><i class="ph-hash" aria-hidden="true"></i></th>
                            <th>Link</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Comment</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($doctorAssignCasesHistory->isNotEmpty())
                            @php
                                $count =1;
                            @endphp
                            @foreach($doctorAssignCasesHistory as $record)
                                    <tr>
                                        <td>
                                            {{$count}}
                                        </td>
                                        <td class="fs-4 fw-semibold mb-0"><a href="{{$record['link']}}">3D_Setup</a></td>
                                        <td>{{$record['code']}}</td>
                                        <td>
                                            @foreach($caseStatusData as $status)
                                                @if($status != NULL)
                                                    @if($status['id'] == $record['status_id'])
                                                        @if($status['name'] == "Pending")
                                                            <span class="badge bg-light-warning text-warning">Assign</span>
                                                        @else
                                                            <span class="badge bg-light-warning text-warning">{{$status['name']}}</span>
                                                        @endif
                                                        @php break; @endphp
                                                    @endif
                                                @else
                                                    Reply
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$record['comment']}}
                                        </td>
                                        <td>
                                            @php
                                                $createdDateTime = date("Y-m-d H:i:s A",$record['created']);
                                            @endphp
                                            {{$createdDateTime}}
                                        </td>
                                    </tr>
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        @else
                            <tr>
                                <td>No History Found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{asset('limitless/global_assets/assets/js/vendor/editors/ckeditor/ckeditor_classic.js')}}"></script>
    <script>
    //For CK Editors
    ClassicEditor.create(document.querySelector('#ckeditor_classic_prefilled'), {
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        }
    }).catch(error => {
        console.error(error);
    });
    </script>
</div>
