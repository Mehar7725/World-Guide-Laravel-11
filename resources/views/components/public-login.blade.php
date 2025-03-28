 


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w-full bg-[#42a7df] flex rounded-t-lg overflow-hidden">
          <div
            id="signInTab"
            class="px-6 py-2 font-bold cursor-pointer bg-[#fff] text-[#42a7df]"
            onclick="toggleTab('signIn')"
          >
            Sign In 
          </div>
          <div
            id="signUpTab"
            class="px-6 py-2 font-bold text-white cursor-pointer"
            onclick="toggleTab('signUp')"
          >
            Sign Up
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!-- Sign In Form -->
      <form action="/login" method="POST">@csrf
        <div id="signInForm" class="bg-white p-8 rounded-b-lg">
          <div class="flex flex-col gap-y-4">
            <input
              type="email" name="email"
              placeholder="Email"
              class="w-full px-4 py-2 border border-gray-300 rounded"
            />
            <input
              type="password" name="password"
              placeholder="Password"
              class="w-full px-4 py-2 border border-gray-300 rounded"
            />
            <button
              class="w-full bg-[#42a7df] text-white py-2 rounded hover:bg-[#3590c0]"
            >
              Sign In
            </button>
          </div>
        </div>
        </form>
  
        <!-- Sign Up Form -->
        <form action="/signup" method="POST">@csrf
        <div id="signUpForm" class="bg-white p-8 rounded-b-lg hidden">
          <div class="flex flex-col gap-y-4">
            <input
              type="text" name="name"
              placeholder="User Name" required
              class="w-full px-4 py-2 border border-gray-300 rounded"
            />
            <input
              type="email" name="email"
              placeholder="Email" required
              class="w-full px-4 py-2 border border-gray-300 rounded"
            />
            <input
              type="password" name="password"
              placeholder="Password" required
              class="w-full px-4 py-2 border border-gray-300 rounded"
            />
            <input
              type="password" name="c_password"
              placeholder="Confirm Password" required
              class="w-full px-4 py-2 border border-gray-300 rounded"
            />
            <button
              class="w-full bg-[#42a7df] text-white py-2 rounded hover:bg-[#3590c0]"
            >
              Sign Up
            </button>
          </div>
        </div>
      </form>

      <form action="/google/redirect" method="GET" style="text-align: center;">
          
      <button type="submit"  name="google_action"   >
        <div class="google-btn">
          <div class="google-icon-wrapper">
            <img class="google-icon" src="https://i.ibb.co/ydLySMx/google.png" />
          </div>
          <p class="btn-text">Sign up with Google</p>
        </div>
      </button>

    </form>
      
      <br>
      
      <form action="/facebook/redirect" method="GET">
      
      <button type="submit"  name="facebook_action"   class="btn-fb"  >
        <div class="fb-content">
          <div class="logo">
            <img src="https://i.ibb.co/pnpDRC6/facebook.png" alt="" width="32px" height="32px">
          </div>
          <p>Sign in with Facebook</p>
        </div>
      </button>
    </form>

      
    </div>
 
  
        <script src="assets/public/JS/LoginBtnToggles.js"></script>
      </div>
      

    


    </div>
  </div>
</div>


<style>
  .google-btn,
.btn-fb {
  margin: auto;
  width: 50%;
}
/* Facebook Button */
.btn-fb {
  display: inline-block;
  border-radius: 3px;
  text-decoration: none;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
  -webkit-transition: background-color 0.218s, border-color 0.218s,
    box-shadow 0.218s;
  transition: background-color 0.218s, border-color 0.218s, box-shadow 0.218s;
}
.fb-content,
.btn-fb,
.btn-fb .fb-content {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
  align-items: center;
  width: 210px;
  height: 40px;
}
.fb-content .logo,
.btn-fb .logo,
.btn-fb .fb-content .logo {
  padding: 3px;
  height: inherit;
}

.fb-content svg,
.btn-fb svg,
.btn-fb .fb-content svg {
  width: 18px;
  height: 18px;
}
.fb-content p,
.btn-fb,
.btn-fb .fb-content p {
  width: 100%;
  width: 220px;
  line-height: 1;
  letter-spacing: 0.21px;
  text-align: center;
  font-weight: 500;
  font-size: 14px;
  font-family: "Roboto", sans-serif;
}

.btn-fb {
  padding-top: 1.5px;
  background: #1877f2;
  background-color: #1877f2;
}
.btn-fb:hover {
  box-shadow: 0 0 3px 3px rgba(59, 89, 152, 0.3);
}
.btn-fb .fb-content p {
  color: rgba(255, 255, 255, 0.87);
}

/* Google Button */
@import url(
  https://fonts.googleapis.com/css?family=Roboto:300,
  400,
  500,
  700&subset=cyrillic
);

.google-btn {
  width: 200px;
  height: 40px;
  background-color: #4285f4;
  border-radius: 2px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
  -webkit-transition: background-color 0.218s, border-color 0.218s,
    box-shadow 0.218s;
  transition: background-color 0.218s, border-color 0.218s, box-shadow 0.218s;
}
.google-btn .google-icon-wrapper {
  position: absolute;
  margin-top: 1px;
  margin-left: 1px;
  width: 38px;
  height: 38px;
  border-radius: 2px;
  background-color: #fff;
}
.google-btn .google-icon {
  position: absolute;
  margin-top: 11px;
  margin-left: 11px;
  width: 18px;
  height: 18px;
}
.google-btn .btn-text {
  float: right;
  margin: 11px 18px 0 0;
  color: #fff;
  font-size: 14px;
  letter-spacing: 0.2px;
  font-family: "Roboto";
  font-weight: 500;
}
.google-btn:hover {
  box-shadow: 0 0 6px #4285f4;
  cursor: pointer;
}
.google-btn:active {
  background: #1669f2;
}

</style>




  