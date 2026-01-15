<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard | Job Listing Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg hidden md:block">
    <div class="p-6 text-xl font-bold text-blue-600">Admin Panel</div>
    <nav class="px-4 space-y-2">
      <button class="nav-btn w-full text-left px-4 py-2 rounded bg-blue-100 text-blue-700" data-section="dashboard">Dashboard</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="jobs">Jobs</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="companies">Companies</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="users">Users</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="settings">Settings</button>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6">

    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold" id="sectionTitle">Dashboard</h1>
      <div class="flex items-center gap-3">
        <span class="text-sm text-gray-600">Admin</span>
        <img src="https://i.pravatar.cc/23" class="rounded-full" />
      </div>
    </div>

    <!-- Dashboard Section -->
    <section id="dashboard" class="section">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Total Jobs</p>
          <h2 class="text-2xl font-bold">1,248</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Companies</p>
          <h2 class="text-2xl font-bold">342</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Job Seekers</p>
          <h2 class="text-2xl font-bold">8,920</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Pending Approvals</p>
          <h2 class="text-2xl font-bold text-red-500">18</h2>
        </div>
      </div>
    </section>

    <!-- Jobs Section -->
    <section id="jobs" class="section hidden">
      <div class="bg-white rounded shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Job Listings</h2>
        <table class="w-full text-sm">
          <thead class="bg-gray-100">
            <tr>
              <th class="text-left p-2">Title</th>
              <th class="text-left p-2">Company</th>
              <th class="text-left p-2">Status</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="p-2">Frontend Developer</td>
              <td class="p-2">TechCorp</td>
              <td class="p-2 text-green-600">Approved</td>
              <td class="p-2 text-center">
                <button class="text-blue-600 hover:underline">View</button>
              </td>
            </tr>
            <tr class="border-t">
              <td class="p-2">Backend Engineer</td>
              <td class="p-2">DataSoft</td>
              <td class="p-2 text-yellow-600">Pending</td>
              <td class="p-2 text-center">
                <button class="text-green-600 hover:underline">Approve</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Companies Section -->
    <section id="companies" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Companies</h2>
        <ul class="space-y-2">
          <li class="flex justify-between border p-2 rounded">
            <span>TechCorp</span><span class="text-gray-500">24 Jobs</span>
          </li>
          <li class="flex justify-between border p-2 rounded">
            <span>DataSoft</span><span class="text-gray-500">12 Jobs</span>
          </li>
        </ul>
      </div>
    </section>

    <!-- Users Section -->
    <section id="users" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Users</h2>
        <p class="text-gray-600">Manage job seekers and employers here.</p>
      </div>
    </section>

    <!-- Settings Section -->
    <section id="settings" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Settings</h2>
        <p class="text-gray-600">Platform configuration and admin preferences.</p>
      </div>
    </section>

  </main>

  <!-- JS -->
  <script>
    const buttons = document.querySelectorAll('.nav-btn');
    const sections = document.querySelectorAll('.section');
    const title = document.getElementById('sectionTitle');

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        buttons.forEach(b => b.classList.remove('bg-blue-100','text-blue-700'));
        btn.classList.add('bg-blue-100','text-blue-700');

        sections.forEach(sec => sec.classList.add('hidden'));
        document.getElementById(btn.dataset.section).classList.remove('hidden');

        title.textContent = btn.textContent;
      });
    });
  </script>

</body>
</html>
