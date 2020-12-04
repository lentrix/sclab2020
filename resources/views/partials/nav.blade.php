    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('images/sclab_logo_50x.png')}}" alt="Logo" id="logo" style="width: 40px">
            {{env('APP_NAME')}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            @auth
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/patients')}}">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consultations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/labtests')}}">Lab Tests</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownDataset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Data Set
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownDataset">
                        <a class="dropdown-item" href="{{url('/templates')}}">Test Templates</a>
                        <a class="dropdown-item" href="{{url('/signatories')}}">Signatories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        [<span class="upper">{{auth()->user()->username}}</span>]
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                        <a class="dropdown-item" href="{{url('/change-password')}}">Change Password</a>

                        <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                    </div>
                </li>
            </ul>
            @endauth
        </div>
    </nav>
