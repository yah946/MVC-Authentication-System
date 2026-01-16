<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Listing Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

  <!-- Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">JobPlatform</h1>
      <nav class="space-x-4">
        <a href="#hero" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#features" class="text-gray-700 hover:text-blue-600">Features</a>
        <a href="#jobs" class="text-gray-700 hover:text-blue-600">Jobs</a>
        <a href="#about" class="text-gray-700 hover:text-blue-600">About</a>
        <a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a>
        <a href="login.html" class="text-gray-700 hover:text-blue-600">Login</a>
        <a href="register.html" class="text-gray-700 hover:text-blue-600">Register</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="bg-blue-50 py-24">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-5xl font-bold mb-4">Find Your Dream Job</h2>
      <p class="text-gray-700 mb-8 text-lg">Explore thousands of job listings from top companies and apply in seconds.</p>
      <a href="register.html" class="bg-blue-600 text-white px-8 py-3 rounded hover:bg-blue-700 transition">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="font-semibold text-xl mb-2">For Candidates</h3>
        <p class="text-gray-600">Search jobs, apply quickly, and track your applications.</p>
      </div>
      <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="font-semibold text-xl mb-2">For Recruiters</h3>
        <p class="text-gray-600">Post jobs, review applicants, and manage your hiring process.</p>
      </div>
      <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="font-semibold text-xl mb-2">Easy Access</h3>
        <p class="text-gray-600">Login or register instantly to start using the platform seamlessly.</p>
      </div>
    </div>
  </section>

  <!-- Job Listings Section -->
  <section id="jobs" class="py-20">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12">Featured Jobs</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded shadow">
          <h3 class="font-semibold text-xl mb-2">Frontend Developer</h3>
          <p class="text-gray-600 mb-4">TechCorp • Remote</p>
          <a href="register.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Apply Now</a>
        </div>
        <div class="bg-white p-6 rounded shadow">
          <h3 class="font-semibold text-xl mb-2">Backend Engineer</h3>
          <p class="text-gray-600 mb-4">DataSoft • Onsite</p>
          <a href="register.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Apply Now</a>
        </div>
        <div class="bg-white p-6 rounded shadow">
          <h3 class="font-semibold text-xl mb-2">UI/UX Designer</h3>
          <p class="text-gray-600 mb-4">DesignPro • Remote</p>
          <a href="register.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Apply Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 max-w-3xl text-center">
      <h2 class="text-3xl font-bold mb-6">About JobPlatform</h2>
      <p class="text-gray-700 mb-4">JobPlatform is a modern job portal connecting job seekers with top companies. We provide a seamless experience for candidates to find jobs and for recruiters to hire talent efficiently.</p>
      <p class="text-gray-700">Our mission is to make job searching and hiring fast, simple, and effective for everyone.</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20">
    <div class="container mx-auto px-6 max-w-xl">
      <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>
      <form class="bg-white p-6 rounded shadow space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-600">Name</label>
          <input type="text" class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Email</label>
          <input type="email" class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600">Message</label>
          <textarea class="w-full mt-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4"></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white shadow mt-12">
    <div class="container mx-auto px-6 py-6 text-center text-gray-500">
      &copy; 2026 JobPlatform. All rights reserved.
    </div>
  </footer>

</body>
</html>
