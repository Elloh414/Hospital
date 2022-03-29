<!DOCTYPE html>
<html lang="en">
  <head>


    <style>
        label{
            display: inline-block;
            width: 150px;
        }

    </style>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
@include('admin.navbar')
        <!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding-top:100px">

        <form action="">

            <div style="padding: 15px">

                <label> Name:</label>
                <input type="text" name="name" style="color:black" placeholder="Write Doctor's Name">
            </div>

            <div style="padding: 15px">

                <label> Phone Number:</label>
                <input type="number" name="number" style="color:black" placeholder="Mobile Number">
            </div>

            <div style="padding: 15px">

                <label> Speciality:</label>
                <select name="" id="" style="color: black">
                    <option value="">--Select--</option>
                    <option value="">General</option>
                    <option value="">Skin</option>
                    <option value="">Eyes</option>
                    <option value="">ENT</option>
                    <option value="">Bones</option>
                    <option value="">Teeth</option>
                </select>
            </div>

            <div style =" Padding: 15px">
<label >Room Number</label>
<input type="number" name="RoomNumber" style="color:black" placeholder="Room Number">
            </div>

            <div style="padding: 15px">

                <label> Image:</label>
                <input type="file" name="image" style="color:black" placeholder="Input Doctor's Image">
            </div>


            <div style="padding: 15px">

            <input type="submit" class="btn btn-success"></div>
        </form>
    </div>
</div>
        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
