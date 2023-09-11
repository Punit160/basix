@include("Component.sidebar");

@include("Component.header");
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4> -->

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Add BC Sakhi</h5>
          @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                    {{session('status')}}
                    </div>
                    @endif
          <div class="card-body">
            <form method="post" action="{{route('import-bcsakhi')}}"  enctype="multipart/form-data">
              @csrf
              <div class="row my-3">
                <div class="form-group col-md-5 ">
                  <!-- <label>Example file input</label> -->
                  <input type="file" name="bcsakhiexcel" class="form-control-file form-control height-auto">
                </div>
                <div class="form-group col-md-5">
                  <a style="width:100%" href="#" class="btn btn-primary">Download Sample File</a>
                </div>
                <div class="form-group col-md-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
               </form>
              <p class="text-center">or</p>
              <hr>
              <form method="post" action="{{route('save-bcsakhi')}}">
              @csrf
              <div class="row">
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Name of BC Sakhi/Digipay Sakhi/Paypoints</label>
                  <input class="form-control" name="name" type="text" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Designation</label>
                  <select class="form-control" name="designation">
                    <option selected disabled>Select...</option>
                    <option>BC</option>
                    <option>DG</option>
                    <option>PP</option>
                  </select>
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Contact/Mobile No.</label>
                  <input class="form-control" type="number" name="contact" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Name of parent Self Help Group</label>
                  <input class="form-control" type="text" name="parent_shg" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Village</label>
                  <input class="form-control" type="text" name="village" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Bank/ CSC/Others name</label>
                  <input class="form-control" type="text" name="bank_name" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Service/Link Branch Name</label>
                  <input class="form-control" type="text" name="branch_name" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>IFSC/Branch Code</label>
                  <input class="form-control" type="text" name="branch_code" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Block</label>
                  <input class="form-control" type="text" name="block" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Block Type</label>
                  <input class="form-control" type="text" name="block_type" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>District</label>
                  <input class="form-control" type="text" name="district" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Name of Corporate BC</label>
                  <input class="form-control" type="text" name="corporate_bc" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Agent ID/KO Code</label>
                  <input class="form-control" type="text" name="agent_id" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Date of Code creation (MM-DD-YY)</label>
                  <input class="form-control" type="date" name="date_code_creation" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>IIBF Certification</label>
                  <select class="form-control" name="iibf_certificate">
                    <option selected disabled>Select...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Model</label>
                  <select class="form-control" name="model">
                    <option selected disabled>Select...</option>
                    <option>Kiosk</option>
                    <option>POS</option>
                    <option>Mobile</option>
                  </select>
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>Machine ID</label>
                  <input class="form-control" name="machine_id" type="text" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>No of Villages being serviced by BC Sakhi</label>
                  <input class="form-control" name="no_village" type="number" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>No of SHGs being serviced by BC Sakhii</label>
                  <input class="form-control" name="no_shg" type="number" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>OD limit of BC Sakhi</label>
                  <input class="form-control" name="od_limit" type="number" placeholder="">
                </div>
                <div class="form-group col-md-4 my-2 col-sm-12">
                  <label>OD/Settlement Account no</label>
                  <input class="form-control" name="settlement_account" type="text" placeholder="">
                </div>

              </div>
              <center><button type="submit" class="btn btn-primary my-3" style="width: 25% !important">Submit</button>
              </center>
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- / Content -->

  <!-- Footer -->
  @include("component.footer");