<x-Sbadmin-layout>
    <header
        class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10"
    >
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon">
                                <i data-feather="activity"></i>
                            </div>
                            Dashboard
                        </h1>
                        <div class="page-header-subtitle">
                            Example dashboard overview and content summary
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-n10 px-4">
        <div class="row">
            <x-sbadmin.dashboard-card>
                <x-slot:icon
                    ><i
                        class="feather-xl text-primary mb-3"
                        data-feather="package"
                    ></i
                ></x-slot:icon>
                <x-slot:head>Powerful Components</x-slot:head>
                <x-slot:body
                    >To create informative visual elements on your
                    pages</x-slot:body
                >
            </x-sbadmin.dashboard-card>
        </div>
        <div class="row">
            <div class="col-xxl-8">
                <!-- Tabbed dashboard card example-->
                <x-sbadmin.tabbed-card />
                <!-- Illustration dashboard card example-->
                <x-sbadmin.ilustration-card />
                <div class="row">
                    <x-sbadmin.activity-timeline />
                    <x-sbadmin.pie-chart />
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="row">
                    <x-sbadmin.people-card />
                    <x-sbadmin.tracker-card />
                </div>
                <!-- Illustration dashboard card example-->
                <div class="card">
                    <div class="card-body p-5 text-center">
                        <img
                            class="img-fluid mb-4"
                            src="sbadmin/assets/img/illustrations/team-spirit.svg"
                            alt=""
                            style="max-width: 16.25rem"
                        />
                        <h5>Team Access</h5>
                        <p class="mb-4">
                            Upgrade your plan to get access to team
                            collaboration tools.
                        </p>
                        <a class="btn btn-primary p-3" href="#!">Upgrade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-Sbadmin-layout>
