<!-- Login Form
      ============================================= -->
      <div class="col-md-6 d-flex align-items-center">
        <div class="container my-4">
          <div class="row g-0">
            <div class="col-11 col-lg-9 col-xl-8 mx-auto">
              <h3 class="fw-400 mb-4">Log In</h3>
              <form id="loginForm" method="post">
                <div class="mb-3">
                  <label for="emailAddress" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="emailAddress" required placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="loginPassword" required placeholder="Enter Password">
                </div>
                <div class="row mb-3">
                  <div class="col-sm">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" id="remember-me" name="remember" type="checkbox">
                      <label class="form-check-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-sm text-end"><a class="btn-link" href="#">Forgot Password ?</a></div>
                </div>
                <div class="d-grid mb-3"><button class="btn btn-primary" type="submit">Login</button></div>
              </form>
              <p class="text-3 text-center text-muted">Don't have an account? <a class="btn-link" href="signup.html">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login Form End --> 
    </div>
  </div>
</div>

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>