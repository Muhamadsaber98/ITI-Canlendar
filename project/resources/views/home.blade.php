<!DOCTYPE html>
<html>

<head>
    <title>Iti calendar</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/javascript/formScript.js"> </script>


    <script>
        //pop
        function closeForm() {

            document.getElementById("myForm").style.display = "none";

        }

        //pop

    </script>


</head>

<body>

    <!-- popup window -->
    <div class="form-popup" id="myForm">
        <div class="form-container">
            <h1>session</h1>

            <label for="instructor"><b>instructor:</b></label>
            <input type="text" id="ins" name="instructor_name">

            <label for="course"><b>course:</b></label>
            <input type="text" name="course" id="course">
            <label for="course"><b>track::</b></label>
            <input type="text" name="course" id="track">

            <button type="button" class="btn">add</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </div>
    </div>
    <!-- popup window -->

    {{-- header-p2  -1 --}}

    <div class="header">
        {{-- <a href="#default" class="logo">ITI Calendar</a> --}}

        <div class="header-right">
            <a href="/aboutus.php">Contact</a>
            <a href="https://www.iti.gov.eg/iti/about-us">About</a>
            <a href="{{ route('home') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </div>

    {{-- header-p2  -2 --}}
    <div class="container">
        <div class="row">
            <div class="col-3 bg-secondary text-white">
                <nav>
                    <img src="/images/iti-logo.png" alt="itilogo" height="80px" width="100px">
                    <h1 class="text-center bg-danger text-white rounded-pill" style="margin: 20px">Course</h1>
                    <hr>
                    <section class="text-center"><b>Budget Section</b></section>
                    <hr>
                    <div class="btn-group">
                        <form>

                            <label><b>Program: </b></label> <br>
                            <select class="form-control-plaintext text-white" value="program">
                                <option class="bg-secondary" value="ITP">
                                    Intensive Training Program
                                    <!-- ITP -->
                                </option>
                                <option class="bg-secondary" value="STP">
                                    Summer Training Program
                                    <!-- STP -->
                                </option>
                            </select>

                            <br>
                            <label><b>Branch: </b></label> <br>
                            <select value="intake" class="form-control-plaintext text-white">
                                <option selected class="bg-secondary" value="ITP 2021/2022">
                                    Minia
                                </option>
                            </select>

                            <br>


                            <form name="form1" id="form1" action="/action_page.php">
                                <label><b>Intake: </b></label> <br>
                                <select name="Branch" id="Branch"
                                    class="bg-secondary form-control-plaintext text-white">
                                    <option value="" selected="selected">Select Quarter</option>
                                </select>
                                <br>
                                <label><b>Track: </b></label> <br>
                                <select name="Track" id="Track" class="bg-secondary form-control-plaintext text-white">
                                    <option value="" selected="selected">Select Track </option>
                                </select>
                                <br>

                                {{-- @foreach ($key as $item => $val) --}}


                                {{-- <select onchange="gettrack()" class="form-control" id="dat" name="user_selected"
                                    required focus>
                                    <option value="" disabled selected>Please select user</option>
                                    @foreach ($key as $user)
                                        <option value="{{ $user->Track_Name }}">{{ $user->Track_Name }}</option>
                                    @endforeach
                                </select> --}}

                                <label><b>Track Courses: </b></label> <br>
                                <select name="Track Courses" id="Track Courses" size="5"
                                    aria-label="size 3 select example"
                                    class=" bg-secondary form-control-plaintext text-white">
                                    <option value="" selected="selected"> Select Course</option>
                                </select>
                                <br>
                                {{-- <input type="submit" value="Submit" > --}}
                            </form>


                        </form>
                </nav>
            </div>
            <div class="col-9">
                <br />

                <h1 class="text-center text-white bg-secondary rounded-pill"> Calendar</h1>
                <br />@yield('name')
                <div id="calendar"></div>
            </div>
        </div>

    </div>
        {{-- Footer p2 -1 --}}


        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">

                        <h4> ITI Info</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">

                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">


                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="#">28 Km by Cairo / Alexandria Desert Road, 6 October, B148, Egypt</a></li>
                            <li><a href="#"> • (+202) 353-55656</a></li>
                            <li><a href="#">ITIinfo@iti.gov.eg</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">


                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/ITIchannel/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/itichannel2" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/user/itichannel" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/school/information-technology-institute-iti-/"
                                target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- Footer p2 -2 --}}

    <script src="/javascript/calendarScript.js"></script>

</body>

</html>
