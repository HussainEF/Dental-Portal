<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-1">
                    <h5 class="mb-0"><i class="ph ph-chart-pie-slice"></i> Loyality Points Statistics</h5>
                </div>
                <div class="card-body">
                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-4">

                            <!-- Members online -->
                            <div class="card bg-teal text-white">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="mb-0">{{$dentistLoyalityPointsCalculation['grandTotal']}}</h3>
                                        <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto"><i class="ph ph-coins"></i></span>
                                    </div>
                                    
                                    <div>
                                        Total Points
                                    </div>
                                </div>
                                <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Current server load -->
                            <div class="card bg-pink text-white">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mb-0">{{$dentistLoyalityPointsCalculation['grandTotal']-$dentistLoyalityPointsCalculation['remaining']}}</h3>
                                        <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto"><i class="ph ph-currency-circle-dollar"></i></span>
                                    </div>
                                    
                                    <div>
                                        Availed Points
                                    </div>
                                </div>

                                <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class="col-lg-4">

                            <!-- Today's revenue -->
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mb-0">{{$dentistLoyalityPointsCalculation['remaining']}}</h3>
                                        <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto"><i class="ph ph-coin"></i></span>
                                    </div>
                                    
                                    <div>
                                        Remaining Points
                                    </div>
                                </div>

                                <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->
                </div>
            </div>
        </div>
        <div class="col-md-4"> 
            <div class="card p-2">
                <div class="card-body d-flex flex-column justify-content-center">
                    <button class="btn btn-teal mb-3" wire:click="pointsEarned"><i class="ph ph-currency-dollar"></i> Points Earned</button>
                    <button class="btn btn-pink mb-3" wire:click="pointsTransactions"><i class="ph ph-currency-circle-dollar"></i> Points Transactions</button>
                    <button class="btn btn-primary" wire:click="pointsNotifications"><i class="ph ph-notification"></i> Points Notifications</button>
                </div>
            </div>
        </div>
    </div>
    @if($cardNumber == 1)
        <livewire:loyality.components.loyality-points-earned >
    @elseif($cardNumber == 2)
        <livewire:loyality.components.loyality-transactions >
    @else($cardNumber == 3)
        <livewire:loyality.components.loyality-points-notifications >
    @endif
</div>
