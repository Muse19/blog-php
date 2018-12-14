
<!-- Modal -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/pricing-table%20(7).jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <form action="login.php" method="POST" id="logIn">
            <div class="md-form mb-5">
              <input type="email" id="Form-email5" name="email" class="form-control validate white-text">
              <label data-error="wrong" data-success="right" for="Form-email5">Your email</label>
            </div>

            <div class="md-form pb-3">
              
              <input type="password" id="Form-pass5" name="pwd" class="form-control validate white-text">  
              <label data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
            </div>

            <!--Grid row-->
            <div class="row d-flex align-items-center mb-4">

              <!--Grid column-->
              <div class="text-center mb-3 col-md-12">
                <button type="submit" id="send" class="btn btn-success btn-block btn-rounded z-depth-1">Iniciar sesión</button>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            </div>
            <!--Grid row-->
          </form>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
