<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            {{--  <i class="fas fa-laugh-wink"></i>  --}}
            <i class="fas fa-business-time"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('word.dashborad') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseclinet"
            aria-expanded="true" aria-controls="collapseclinet">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            <i class="fas fa-users-cog"></i>
            <span>{{ __('word.clients') }}</span>
        </a>
        <div id="collapseclinet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.clients.index') }}">{{ __('word.all') }} {{ __('word.clients') }}</a>
                <a class="collapse-item" href="{{ route('admin.clients.create') }}">{{ __('word.add') }} {{ __('word.client')  }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecategries"
            aria-expanded="true" aria-controls="collapsecategries">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __('word.portfolio categries') }}</span>
        </a>
        <div id="collapsecategries" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.categries.index') }}">{{ __('word.all') }} Portfolio Categries</a>
                <a class="collapse-item" href="{{ route('admin.categries.create') }}">{{ __('word.add') }} Portfolio Categry</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedetailes"
            aria-expanded="true" aria-controls="collapsedetailes">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            <i class="fas fa-info-circle"></i>
            <span>{{ __('word.portfolio detailes') }}</span>
        </a>
        <div id="collapsedetailes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.detailes.index') }}">{{ __('word.all') }} Portfolio Detailes</a>
                <a class="collapse-item" href="{{ route('admin.detailes.create') }}">{{ __('word.add') }} Portfolio Detaile</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseimages"
            aria-expanded="true" aria-controls="collapseimages">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            <i class="fas fa-images"></i>
            <span>{{ __('word.portfolio detaile images') }}</span>
        </a>
        <div id="collapseimages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.images.index') }}">{{ __('word.all') }} Images</a>
                <a class="collapse-item" href="{{ route('admin.images.create') }}">{{ __('word.add') }} Image</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsequestions"
            aria-expanded="true" aria-controls="collapsequestions">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            <i class="fas fa-question-circle"></i>
            <span>{{ __('word.questions') }}</span>
        </a>
        <div id="collapsequestions" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">{{ __('word.all') }} Questions</a>
                <a class="collapse-item" href="cards.html">{{ __('word.add') }} Question</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseservices"
            aria-expanded="true" aria-controls="collapseservices">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            {{--  <i class="fa fa-usps"></i>  --}}
            <i class="fas fa-concierge-bell"></i>
          <span>{{ __('word.services') }}</span>
        </a>
        <div id="collapseservices" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">{{ __('word.all') }} Services</a>
                <a class="collapse-item" href="cards.html">{{ __('word.add') }} Service</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseteams"
            aria-expanded="true" aria-controls="collapseteams">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            <i class="fas fa-user-friends"></i>
            <span>{{ __('word.teams') }}</span>
        </a>
        <div id="collapseteams" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">{{ __('word.all') }} Teams</a>
                <a class="collapse-item" href="cards.html">{{ __('word.add') }} Team</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetestimonials"
            aria-expanded="true" aria-controls="collapsetestimonials">
            {{--  <i class="fas fa-fw fa-cog"></i>  --}}
            <i class="fas fa-award"></i>
            <span>{{ __('word.testimonials') }}</span>
        </a>
        <div id="collapsetestimonials" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">{{ __('word.all') }} Testimonials</a>
                <a class="collapse-item" href="cards.html">{{ __('word.add') }} Testimonial</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            {{--  <i class="fas fa-fw fa-tachometer-alt"></i>  --}}
            <i class="fas fa-users"></i>
            <span>{{ __('word.users') }}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
