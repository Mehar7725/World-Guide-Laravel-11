


<div id="myModal" class="modal" style="display: none;">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="w-full bg-[#42a7df] flex rounded-t-lg overflow-hidden">
        <div
          id="signInTab"
          class="px-6 py-5 font-bold cursor-pointer bg-[#fff] text-[#42a7df]"
          onclick="toggleTab('signIn')"
        >
          Sign In
        </div>
        <div
          id="signUpTab"
          class="px-6 py-5 font-bold text-white cursor-pointer"
          onclick="toggleTab('signUp')"
        >
          Sign Up
        </div>
      </div>

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

      <script src="assets/public/JS/LoginBtnToggles.js"></script>
    </div>
  </div>