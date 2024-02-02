<div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="mb-0"><i class="ph-medal"></i> Points Notifications</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive border rounded">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <!-- <th>Description</th> -->
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dentistLoyalityPointsNotifications != NULL)
                            @foreach($dentistLoyalityPointsNotifications as $key => $notficationsData)
                            <tr>
                                <td>{{ $notficationsData['medical_primary_cases']['patient'] }}</td>
                                <td>
                                    @if($notficationsData['status'] == LOYALTY_POINTS_NOTIFICATION_STATUS_PENDING)
                                        Pending
                                    @elseif($notficationsData['status'] == LOYALTY_POINTS_NOTIFICATION_STATUS_APPROVED)
                                        Approved
                                    @else
                                        Rejected
                                    @endif
                                </td>
                                <td>
                                    @if($notficationsData['status'] == LOYALTY_POINTS_NOTIFICATION_STATUS_PENDING)
                                        <button type="button" class="btn btn-success" wire:click="updateStatus({{$notficationsData['id']}}, {{LOYALTY_POINTS_NOTIFICATION_STATUS_APPROVED}})">Yes</button>
                                        <button type="button" class="btn btn-danger" wire:click="updateStatus({{$notficationsData['id']}}, {{LOYALTY_POINTS_NOTIFICATION_STATUS_REJECTED}})">No</button>
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
