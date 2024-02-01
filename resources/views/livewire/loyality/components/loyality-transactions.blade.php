<div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="mb-0"><i class="ph-medal"></i> Points Transactions</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive border rounded">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dentist ID</th>
                            <th>Remaining Balance</th>
                            <th>Avail Balance</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dentistLoyalityPointsTransactions != NULL)
                            @foreach($dentistLoyalityPointsTransactions as $transactionData)

                            <tr>
                                <td>{{$transactionData['dentist_id']}}</td>
                                <td>{{$transactionData['remaining']}}</td>
                                <td>{{$transactionData['avail_balance']}}</td>
                                <td>
                                    @if($transactionData['status'] == HARD_CODE_ID_NO)
                                        Pending
                                    @else
                                        Approved
                                    @endif
                                </td>
                            </tr>
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
