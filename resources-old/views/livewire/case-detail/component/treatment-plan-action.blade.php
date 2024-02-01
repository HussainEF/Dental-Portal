<div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom bg-light-info">
                        <h5 class="card-title fw-semibold mb-0 lh-sm">Treatment Plan Action</h5>
                    </div>
                    <div class="card-body p-4">
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
                                <div class="col-md-6">
                                    @if($selectedStatusId != '')
                                        <label for="summernote">Comments</label>
                                        <textarea name="comment" id="summernote" wire:model="comment"></textarea>
                                    @endif
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom bg-light-info">
                        <h5 class="card-title fw-semibold mb-0 lh-sm">Treatment Plan History</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive rounded-2 mb-4">
                            <table class="table border text-nowrap customize-table mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th><h6 class="fs-4 fw-semibold mb-0"><i class="fa fa-hashtag" aria-hidden="true"></i></h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Link</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Code</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Status</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Comment</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Created</h6></th>
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
                                                    <td class="fs-4 fw-semibold mb-0">{{$record['code']}}</td>
                                                    <td>
                                                        @foreach($caseStatusData as $status)
                                                            @if($status != NULL)
                                                                @if($status['id'] == $record['status_id'])
                                                                    @if($status['name'] == "Pending")
                                                                        <span class="badge bg-light-warning text-warning fw-semibold fs-2">Assign</span>
                                                                    @else
                                                                        <span class="badge bg-light-warning text-warning fw-semibold fs-2">{{$status['name']}}</span>
                                                                    @endif
                                                                @endif
                                                            @else
                                                                Reply
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <h6 class="fs-4 fw-semibold mb-0">{{$record['comment']}}</h6>
                                                    </td>
                                                    <td>
                                                        @php
                                                            $createdDateTime = date("Y-m-d H:i:s A",$record['created']);
                                                        @endphp
                                                        <h6 class="fs-4 fw-semibold mb-0">{{$createdDateTime}}</h6>
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
            </div>
        </div>
    </div>
</div>
