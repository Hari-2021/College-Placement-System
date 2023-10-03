<?php
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <!-- Include Bootstrap CSS (you can use a CDN or a local file) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <style>
        /* Styles for the sidebar */
        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: -250px;
            background-color: #333;
            padding-top: 60px;
            transition: 0.3s;
        }

        .sidenav a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.2s;
        }

        .sidenav a:hover {
            background-color: #555;
        }

        /* Styles to push content to the right when the sidebar is open */
        .content {
            margin-left: 0;
            transition: margin-left 0.3s;
            padding: 15px;
        }

        /* Button to open the sidebar */
        #openNav {
            position: fixed;
            left: 10px;
            top: 10px;
            font-size: 24px;
            cursor: pointer;
            z-index: 2;
        }
        .row{
          margin-top: 50px;
          margin-left: 350px;
        }
    </style>
</head>
<body>
    <!-- Button to open the sidebar -->
    <span id="openNav">&#9776; </span>

    <!-- The sidebar -->
    <div class="sidenav" id="mySidenav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Portfolio</a>
        <a href="#">Contact</a>
    </div>

    <!-- Page content -->
    <!-- <div class="content" id="main">
        <h2>Main Content</h2>
        <p>This is the main content area. Use the button above to open the sidebar.</p>
    </div> -->

    <script>
        // JavaScript to open/close the sidebar
        const openNavButton = document.getElementById("openNav");
        const mySidenav = document.getElementById("mySidenav");
        const mainContent = document.getElementById("main");

        openNavButton.addEventListener("click", () => {
            if (mySidenav.style.left === "0px") {
                mySidenav.style.left = "-250px";
                mainContent.style.marginLeft = "0";
                openNavButton.innerHTML = "&#9776; Open Sidebar";
            } else {
                mySidenav.style.left = "0px";
                mainContent.style.marginLeft = "250px";
                openNavButton.innerHTML = "&times; Close Sidebar";
            }
        });
    </script>
</body>
</html>


<div class="row">
            <!-- Column -->
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex">
                    <div>
                      <h5 class="card-title">Projects of the Month</h5>
                    </div>
                    <div class="ms-auto">
                      <select class="form-select b-0">
                        <option selected="">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive mt-3 no-wrap">
                    <table class="table vm no-th-brd pro-of-month">
                      <thead>
                        <tr>
                          <th colspan="2">Course</th>
                          <th>Company</th>
                          <th>Attempted</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width: 50px">
                            <span class="round">W</span>
                          </td>
                          <td>
                            <h6>Practice Test</h6>
                            <small class="text-muted">Web Designer</small>
                          </td>
                          <td>Wipro</td>
                          <td>02</td>
                        </tr>
                        <tr class="active">
                          <td> M</td>
                          <td>
                            <h6>Mock Test</h6>
                            <small class="text-muted">Graduate Engineering Trainee</small>
                          </td>
                          <td>Mallow</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td><span class="round round-success">B</span></td>
                          <td>
                            <h6>Mock Interview</h6>
                            <small class="text-muted">Junior Software Engineer</small>
                          </td>
                          <td>Bosh Technology</td>
                          <td>01</td>
                        </tr>
                        <tr>
                          <td><span class="round round-primary">A</span></td>
                          <td>
                            <h6>Practice Course</h6>
                            <small class="text-muted">Back-end Devloper</small>
                          </td>
                          <td>Accenture</td>
                          <td>01</td>
                        </tr>
                        <tr>
                          <td><span class="round round-warning">C</span></td>
                          <td>
                            <h6>Developer</h6>
                            <small class="text-muted">UI/UX designer</small>
                          </td>
                          <td>Cognizant</td>
                          <td>0</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>




</body>
<!-- jQuery and Bootstrap JavaScript (place these before your closing </body> tag) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</html>