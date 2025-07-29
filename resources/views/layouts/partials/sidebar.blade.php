<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            {{-- Core Section --}}
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ url('dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            {{-- Interface Section --}}
            <div class="sb-sidenav-menu-heading">Interface</div>

            {{-- Hospitals --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHospitals" aria-expanded="false" aria-controls="collapseHospitals">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Hospitals
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseHospitals" aria-labelledby="headingHospitals" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('hospitals.create') }}">Create Hospital</a>
                    <a class="nav-link" href="{{ route('hospitals.index') }}">View Hospitals</a>
                </nav>
            </div>

            {{-- Labs --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLabs" aria-expanded="false" aria-controls="collapseLabs">
                <div class="sb-nav-link-icon"><i class="fas fa-vials"></i></div>
                Labs
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLabs" aria-labelledby="headingLabs" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('labs.create') }}">Create Lab</a>
                    <a class="nav-link" href="{{ route('labs.index') }}">View Labs</a>
                    <a class="nav-link" href="{{ route('lab_tests.create') }}">Create Lab Test</a>
                    <a class="nav-link" href="{{ route('lab_tests.index') }}">View Lab Tests</a>
                    <a class="nav-link" href="{{ route('bookings.create') }}">Book Lab Test</a>
                </nav>
            </div>

            {{-- Medicine Section --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMedicine" aria-expanded="false" aria-controls="collapseMedicine">
                <div class="sb-nav-link-icon"><i class="fas fa-pills"></i></div>
                Medicine Section
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseMedicine" aria-labelledby="headingMedicine" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('medicine.create') }}">Add New Medicine</a>
                    <a class="nav-link" href="{{ route('medicine.admin.index') }}">All Medicines</a>
                    <a class="nav-link" href="{{ route('order.create') }}">Order Medicine</a>
                </nav>
            </div>

            {{-- Medicine Category --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMedCategory" aria-expanded="false" aria-controls="collapseMedCategory">
                <div class="sb-nav-link-icon"><i class="fas fa-capsules"></i></div>
                Medicine Category
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseMedCategory" aria-labelledby="headingMedCategory" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('medcategories.create') }}">Add Category</a>
                    <a class="nav-link" href="{{ route('medcategories.index') }}">All Categories</a>
                </nav>
            </div>

            {{-- Hospital's Category --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHospitalCategory" aria-expanded="false" aria-controls="collapseHospitalCategory">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Hospital's Category
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseHospitalCategory" aria-labelledby="headingHospitalCategory" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('hospital_categories.create') }}">Create Category</a>
                    <a class="nav-link" href="{{ route('hospital_categories.index') }}">View Categories</a>
                </nav>
            </div>

            {{-- Properties --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProperties" aria-expanded="false" aria-controls="collapseProperties">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Properties
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseProperties" aria-labelledby="headingProperties" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('properties.create') }}">Create Property</a>
                    <a class="nav-link" href="{{ route('properties.index') }}">View Properties</a>
                </nav>
            </div>

            {{-- Surgeries --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSurgeries" aria-expanded="false" aria-controls="collapseSurgeries">
                <div class="sb-nav-link-icon"><i class="fas fa-syringe"></i></div>
                Surgeries
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseSurgeries" aria-labelledby="headingSurgeries" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('surgeries.create') }}">Create Surgery</a>
                    <a class="nav-link" href="{{ route('surgeries.index') }}">View Surgeries</a>
                </nav>
            </div>

            {{-- Shop --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseShop" aria-expanded="false" aria-controls="collapseShop">
                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                Shop
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseShop" aria-labelledby="headingShop" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('shops.create') }}">Create Product</a>
                    <a class="nav-link" href="{{ route('shops.index') }}">View Products</a>
                </nav>
            </div>

            {{-- Doctor --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDoctor" aria-expanded="false" aria-controls="collapseDoctor">
                <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                Doctor
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDoctor" aria-labelledby="headingDoctor" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('doctors.create') }}">Create Doctor</a>
                    <a class="nav-link" href="{{ route('doctors.index') }}">View Doctors</a>
                </nav>
            </div>

            {{-- Disease --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDisease" aria-expanded="false" aria-controls="collapseDisease">
                <div class="sb-nav-link-icon"><i class="fas fa-virus"></i></div>
                Disease
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDisease" aria-labelledby="headingDisease" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('diseases.create') }}">Create Disease</a>
                    <a class="nav-link" href="{{ route('diseases.index') }}">View Diseases</a>
                </nav>
            </div>

            {{-- Category --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                Category
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCategory" aria-labelledby="headingCategory" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('categories.create') }}">Create Category</a>
                    <a class="nav-link" href="{{ route('categories.index') }}">View Categories</a>
                </nav>
            </div>

            {{-- Pages --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingPages" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    {{-- Authentication --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingAuth" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="login.html">Login</a>
                            <a class="nav-link" href="register.html">Register</a>
                            <a class="nav-link" href="password.html">Forgot Password</a>
                        </nav>
                    </div>

                    {{-- Error Pages --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                        Error
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingError" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="401.html">401 Page</a>
                            <a class="nav-link" href="404.html">404 Page</a>
                            <a class="nav-link" href="500.html">500 Page</a>
                        </nav>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</nav>
