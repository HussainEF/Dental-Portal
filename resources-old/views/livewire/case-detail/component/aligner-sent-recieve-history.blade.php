<div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="px-4 py-3 border-bottom bg-light-info">
                        <h5 class="card-title fw-semibold mb-0 lh-sm">Aligner Sent/Recieve History</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="table-responsive rounded-2 mb-4">
                            <table class="table border text-nowrap customize-table mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th><h6 class="fs-4 fw-semibold mb-0"><i class="fa fa-hashtag" aria-hidden="true"></i></h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Aligner</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Shipping Date</h6></th>
                                        <th><h6 class="fs-4 fw-semibold mb-0">Shipping Comment</h6></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($alignerShippedToDentist->isNotEmpty())
                                        @php
                                            $count =1;
                                        @endphp
                                        @foreach($alignerShippedToDentist as $record)
                                                <tr>
                                                    <td>
                                                        {{$count}}
                                                    </td>
                                                    <td>
                                                        @foreach($nextBatchRequest as $key => $batchRequest)
                                                            @if($batchRequest != NULL)
                                                                @if($batchRequest->id == $record['request_type'])
                                                                    <span class="badge bg-light-warning text-warning fw-semibold fs-2">{{$batchRequest['name']}}</span>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="fs-4 fw-semibold mb-0">{{$record['shipped_date']}}</td>
                                                    <td>
                                                        <h6 class="fs-4 fw-semibold mb-0">{{$record['shipped_remarks']}}</h6>
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
