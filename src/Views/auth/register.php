<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body class="bg-blue-400 min-h-screen flex items-center justify-center">

  <!-- Register Card -->
  <div class="bg-gray-200 w-full max-w-md shadow-lg p-8">
    <h1 class="text-2xl font-bold text-center mb-2">Create Account</h1>
    <p class="text-center text-gray-500 mb-6">Sign up to start applying or posting jobs</p>

    <!-- Register Form -->
    <form id="registerForm" class="space-y-4" action="../../Models/User.php" method="post">
      <div class="p-4 overflow-auto h-72 space-y-4" style="scrollbar-width: thin; scrollbar-color: white blue;">
        <div>
          <input type="text" id="name" required name="name" placeholder="Full Name"
          class="ring-1 ring-black w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-green-500" />
        </div>
        
        <div>
          <input type="email" id="email" required name="email" placeholder="Email Address"
          class="ring-1 ring-black w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-green-500" />
        </div>
        
        <div>
          <input type="tel" id="phone" required name="tel" placeholder="Phone Number"
          class="ring-1 ring-black w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-green-500" />
        </div>
        
        <div class="flex items-center">
          <input type="password" id="password" required name="password" placeholder="Password"
          class="ring-1 ring-black w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-green-500" />
          <div class="bg-white ring-1 ring-black mt-1 px-4 py-2">
            <i id="eye" class="fa-regular fa-eye-slash cursor-pointer"></i>
          </div>
          <!-- <i class="fa-regular fa-eye"></i> -->
        </div>
        
        <div class="flex items-center">
          <input type="password" id="repassword" required name="repassword" placeholder="Confirm Password"
          class="ring-1 ring-black w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-green-500" />
          <div class="bg-white ring-1 ring-black mt-1 px-4 py-2">
            <i id="eye2" class="fa-regular fa-eye-slash cursor-pointer"></i>
          </div>
        </div>
        
        <script defer>
            const eye = document.getElementById('eye');
            const eye2 = document.getElementById('eye2');
            const passInput = document.getElementById('password')
            const repassInput = document.getElementById('repassword');
            [eye,eye2].forEach((eye)=>
              eye.addEventListener('click',function(e){
                const input = e.target.parentElement.previousElementSibling;
              if("text" === input.type){
                eye.classList.remove('fa-eye');
                eye.classList.add('fa-eye-slash');
                input.type="password";
              }else{
                eye.classList.add('fa-eye');
                eye.classList.remove('fa-eye-slash');
                input.type="text";
              }
            }))
        </script>

        <div>
          <label for="role" class="block text-sm font-medium text-gray-600">Register as</label>
          <select id="role" required name="role"
          class="ring-1 ring-black w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-green-500">
          <option value="" disabled selected></option>
          <option value="candidate">Candidate</option>
          <option value="recruiter">Recruiter</option>
        </select>
      </div>
      
    </div>
      <button type="submit"
        class="w-full bg-blue-700 text-white py-2 rounded hover:bg-blue-400 transition">
        Register
      </button>
    </form>

    <!-- Message -->
    <p id="message" class="text-center text-sm mt-4"></p>

    <!-- Footer -->
    <div class="text-center text-sm text-gray-500 mt-6">
      Already have an account?
      <a href="./login.php" class="text-blue-600 hover:underline">Login</a>
    </div>
  </div>

</body>
</html>