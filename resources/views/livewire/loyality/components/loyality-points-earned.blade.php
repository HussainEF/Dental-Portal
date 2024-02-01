<div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="mb-0"><i class="ph-medal"></i> Points Earned</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive border rounded">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Case ID</th>
                            <th>Loyality Points</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dentistLoyalityPoints != NULL)
                            @php 
                                $number = 1;
                            @endphp
                            @foreach($dentistLoyalityPoints as $pointsData)

                            <tr>
                                <td>{{$number}}</td>
                                <td>{{$pointsData['case_id']}}</td>
                                <td>{{$pointsData['points']}}</td>
                                <td>{{$pointsData['date']}}</td>
                            </tr>
                            @php 
                                $number++;
                            @endphp
                            @endforeach
                        @else
                            <tr>
                                <td>
                                    No Record Found.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
