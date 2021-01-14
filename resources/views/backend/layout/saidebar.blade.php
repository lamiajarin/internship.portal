<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">


                <a class="js-arrow" href="{{route('home')}}">
                    <i class="fas fa-star"></i>Home</a>




{{--            <img src="" alt="Cool Admin" />--}}
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{route('dashboard')}}">
                        <i class="fas fa-star"></i>Dashboard</a>

                </li>


                <li>
                    <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#users" aria-expanded="true">
                        <i class="fas fa-user-plus"></i>
                        Users
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <ul id="users" class="collapse">
{{--                        <a href="{{route('employeeList')}}">--}}
{{--                            <i class="fas fa-users"></i>Employee</a>--}}

                            <a href="{{route('companylist')}}">
                                <i class="fas fa-users"></i>Company</a>


                            <a href="{{route('candidateList')}}">
                                <i class="fas fa-users"></i>Candidate</a>

                    </ul>
                </li>
                <li>
                    <a href="{{route('vacancyList')}}">
                        <i class="fas fa-list"></i>Post Internships</a>
                </li>

                <li>
                    <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#category" aria-expanded="true">
                        <i class="fas fa-list-alt"></i>
                        Category
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <ul id="category" class="collapse">

                        <a href="{{route('category')}}">
                            <i class="fas fa-plus-circle"></i>Add Category</a>


                        <a href="{{route('category_list')}}">
                            <i class="fas fa-list"></i>Category List</a>

                    </ul>
                </li>

                <li>
                    <a href="{{route('admin_report')}}">
                        <i class="fas fa-list"></i>Report</a>
                </li>
{{--                <li>--}}
{{--                    <a href="map.html">--}}
{{--                        <i class=""></i>Setting</a>--}}
{{--                </li>--}}

            </ul>
        </nav>
    </div>
</aside>
