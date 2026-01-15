<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Job Listing Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <!-- Login Card -->
  <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-8">
    <h1 class="text-2xl font-bold text-center mb-2">Welcome Back</h1>
    <p class="text-center text-gray-500 mb-6">Login to your account</p>

    <!-- Login Form -->
    <form id="loginForm" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" id="email" required
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Password</label>
        <input type="password" id="password" required
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600">Login as</label>
        <select id="role"
          class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="admin">Admin</option>
          <option value="recruiter">Recruiter</option>
          <option value="candidate">Candidate</option>
        </select>
      </div>

      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
        Login
      </button>
    </form>

    <!-- Message -->
    <p id="message" class="text-center text-sm mt-4"></p>

    <!-- Footer -->
    <div class="text-center text-sm text-gray-500 mt-6">
      Don’t have an account?
      <a href="#" class="text-blue-600 hover:underline">Register</a>
    </div>
  </div>

  <!-- JS -->
  <script>
    const form = document.getElementById('loginForm');
    const message = document.getElementById('message');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const role = document.getElementById('role').value;

      // DEMO authentication logic (replace with backend API)
      if (email && password) {
        message.textContent = 'Login successful! Redirecting...';
        message.className = 'text-green-600 text-center text-sm mt-4';

        // Role-based redirect (example)
        setTimeout(() => {
          if (role === 'admin') {
            window.location.href = 'admin-dashboard.html';
          } else if (role === 'recruiter') {
            window.location.href = 'recruiter-dashboard.html';
          } else {
            window.location.href = 'candidate-dashboard.html';
          }
        }, 1000);
      } else {
        message.textContent = 'Invalid credentials';
        message.className = 'text-red-600 text-center text-sm mt-4';
      }
    });
  </script>

</body>
</html>
