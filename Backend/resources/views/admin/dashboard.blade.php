<x-app-layout>
    <div class="layout-main">
        @include('layouts.header')
        <div class="content-wrapper py-2">
            <section class="custom-breadcrumb">
                <div class="container">
                    <ul class="d-flex align-items-center custom-breadcrumb list-unstyled mb-2 py-1">
                        <li>
                            <a href="FIXME:">Home</a>
                        </li>
                        <li>
                            {{ $pagename ?? '' }}
                        </li>
                    </ul>
                    <h5 class="page-title">{{'Welcome to your dashboard, '.Auth::user()->name}}</h5>
                </div>
            </section>
            <!-- Start Dynamic Sections Starts here -->
            <section class="dashboard py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="dashboard-cards">
                                <p class="mb-0">Clients</p>
                                <span>{{$clients}}</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="dashboard-cards">
                                <p class="mb-0">Relationship Managers</p>
                                <span>{{$relationship_manager}}</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="dashboard-cards">
                                <p class="mb-0">Ideators</p>
                                <span>{{$ideators}}</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="dashboard-cards">
                                <p class="mb-0">Ideas</p>
                                <span>{{$ideas}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="dashboard-cards">
                                <p class="mb-0">Users Distribution</p>
                                <canvas data-labels="{{ implode(',', $label_user) }}" data-values="{{ implode(',', $data_user) }}" id="userChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-cards">
                                <p class="mb-0">Idea Verification Status Distribution</p>
                                <canvas data-verification-labels="{{ implode(',', $label_verification_status) }}" data-verification-values="{{ implode(',', $data_verification_status) }}" id="verificationstatusChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-cards">
                                <p class="mb-0">Idea Status Distribution</p>
                                <canvas data-status-labels="{{ implode(',', $label_status) }}" data-status-values="{{ implode(',', $data_status) }}" id="statusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Start Dynamic Sections Ends here -->
        </div>
    </div>
</x-app-layout>
