<div>
    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Aligner Sent/Recieve History</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive border rounded">
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="ph-hash" aria-hidden="true"></i></th>
                            <th>Aligner</th>
                            <th>Shipping Date</th>
                            <th>Shipping Comment</th>
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
                                                        <span class="badge">{{$batchRequest['name']}}</span>
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
