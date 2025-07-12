 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                         
                            <a class="nav-link" href="{{url('Category')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Category
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="{{url('Category')}}" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Hospitals
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="{{ route('hospitals.create') }}">Create Hospital</a>
                                   <a class="nav-link" href="{{ route('hospitals.index') }}">View Hospital</a>

                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="{{url('Category')}}" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Products
                               Mediciine
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{('products/create')}}">Static Add Products</a>
                                    <a class="nav-link" href="{{url('products')}}">View Products</a>
                                    <a class="nav-link" href="{{route('medicines.index')}}">All medicine</a>
                                    <a class="nav-link" href="{{route('order.create')}}">Order medicine</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHospitalCategory" aria-expanded="false" aria-controls="collapseHospitalCategory">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Hospital's Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseHospitalCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('hospital_categories.create') }}">Create Category</a>
                                    <a class="nav-link" href="{{ route('hospital_categories.index') }}">View Category</a>
                                </nav>
                            </div>


                       <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProperties" aria-expanded="false" aria-controls="collapseProperties">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Properties
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseProperties" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('properties.create') }}">Create Property</a>
                                <a class="nav-link" href="{{ route('properties.index') }}">View Properties</a>
                            </nav>
                        </div>




                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSurgeries" aria-expanded="false" aria-controls="collapseSurgeries">
                            <div class="sb-nav-link-icon"><i class="fas fa-syringe"></i></div>
                            Surgeries
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSurgeries" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('surgeries.create') }}">Create Surgery</a>
                                <a class="nav-link" href="{{ route('surgeries.index') }}">View Surgeries</a>
                            </nav>
                        </div>





                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseShop" aria-expanded="false" aria-controls="collapseShop">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                            Shop
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseShop" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('shops.create') }}">Create Product</a>
                                <a class="nav-link" href="{{ route('shops.index') }}">View Products</a>
                            </nav>
                        </div>




                            <!-- Doctor Menu -->
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





                                    <!-- Category Menu (use unique ID) -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCategory" aria-labelledby="headingCategory" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Create Category</a>
                                    <a class="nav-link" href="register.html">View Category</a>
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>