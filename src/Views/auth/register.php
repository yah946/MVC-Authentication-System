<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register | Job Listing Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <!-- Register Card -->
  <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-8">
    <h1 class="text-2xl font-bold text-center mb-2">Create Account</h1>
    <p class="text-center text-gray-500 mb-6">Sign up to start applying or posting jobs</p>

    <!-- Register Form -->
    <form id="registerForm" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-600">Full Name</label>
        <input type="text" id="name" required
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" id="email" required
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Password</label>
        <input type="password" id="password" required
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Register as</label>
        <select id="role" required
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
          <option value="candidate">Candidate</option>
          <option value="recruiter">Recruiter</option>
        </select>
      </div>

      <button type="submit"
        class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
        Register
      </button>
    </form>

    <!-- Message -->
    <p id="message" class="text-center text-sm mt-4"></p>

    <!-- Footer -->
    <div class="text-center text-sm text-gray-500 mt-6">
      Already have an account?
      <a href="login.html" class="text-green-600 hover:underline">Login</a>
    </div>
  </div>

  <!-- JS -->
  <script>
    const form = document.getElementById('registerForm');
    const message = document.getElementById('message');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const role = document.getElementById('role').value;

      // DEMO registration logic (replace with backend API)
      if (name && email && password) {
        message.textContent = 'Registration successful! Redirecting to login...';
        message.className = 'text-green-600 text-center text-sm mt-4';

        setTimeout(() => {
          window.location.href = 'login.html';
        }, 1500);
      } else {
        message.textContent = 'Please fill all fields';
        message.className = 'text-red-600 text-center text-sm mt-4';
      }
    });
  </script>

</body>
</html>