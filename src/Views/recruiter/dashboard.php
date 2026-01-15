<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recruiter Dashboard | Job Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg hidden md:block">
    <div class="p-6 text-xl font-bold text-indigo-600">Recruiter Panel</div>
    <nav class="px-4 space-y-2">
      <button class="nav-btn w-full text-left px-4 py-2 rounded bg-indigo-100 text-indigo-700" data-section="dashboard">Dashboard</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="jobs">My Jobs</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="applications">Applications</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="profile">Company Profile</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="settings">Settings</button>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6">

    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold" id="sectionTitle">Dashboard</h1>
      <div class="flex items-center gap-3">
        <span class="text-sm text-gray-600">Recruiter</span>
        <img src="https://i.pravatar.cc/40?img=12" class="rounded-full" />
      </div>
    </div>

    <!-- Dashboard -->
    <section id="dashboard" class="section">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Active Jobs</p>
          <h2 class="text-2xl font-bold">12</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Total Applications</p>
          <h2 class="text-2xl font-bold">386</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Shortlisted</p>
          <h2 class="text-2xl font-bold text-green-600">48</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Interviews</p>
          <h2 class="text-2xl font-bold text-indigo-600">16</h2>
        </div>
      </div>
    </section>

    <!-- My Jobs -->
    <section id="jobs" class="section hidden">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">My Job Posts</h2>
        <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">+ Post Job</button>
      </div>
      <div class="bg-white rounded shadow p-4">
        <table class="w-full text-sm">
          <thead class="bg-gray-100">
            <tr>
              <th class="text-left p-2">Job Title</th>
              <th class="text-left p-2">Status</th>
              <th class="text-left p-2">Applicants</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="p-2">UI/UX Designer</td>
              <td class="p-2 text-green-600">Active</td>
              <td class="p-2">64</td>
              <td class="p-2 text-center">
                <button class="text-indigo-600 hover:underline">View</button>
              </td>
            </tr>
            <tr class="border-t">
              <td class="p-2">Backend Developer</td>
              <td class="p-2 text-red-600">Closed</td>
              <td class="p-2">122</td>
              <td class="p-2 text-center">
                <button class="text-indigo-600 hover:underline">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Applications -->
    <section id="applications" class="section hidden">
      <div class="bg-white rounded shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Recent Applications</h2>
        <table class="w-full text-sm">
          <thead class="bg-gray-100">
            <tr>
              <th class="text-left p-2">Candidate</th>
              <th class="text-left p-2">Job</th>
              <th class="text-left p-2">Status</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="p-2">John Doe</td>
              <td class="p-2">UI/UX Designer</td>
              <td class="p-2 text-yellow-600">Pending</td>
              <td class="p-2 text-center">
                <button class="text-green-600 hover:underline">Shortlist</button>
              </td>
            </tr>
            <tr class="border-t">
              <td class="p-2">Sarah Smith</td>
              <td class="p-2">Backend Developer</td>
              <td class="p-2 text-green-600">Shortlisted</td>
              <td class="p-2 text-center">
                <button class="text-indigo-600 hover:underline">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Company Profile -->
    <section id="profile" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Company Profile</h2>
        <p class="text-gray-600">Company Name: <strong>TechCorp</strong></p>
        <p class="text-gray-600">Industry: Software & IT</p>
        <p class="text-gray-600">Location: Remote</p>
      </div>
    </section>

    <!-- Settings -->
    <section id="settings" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Settings</h2>
        <p class="text-gray-600">Manage account and notification settings.</p>
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
        buttons.forEach(b => b.classList.remove('bg-indigo-100','text-indigo-700'));
        btn.classList.add('bg-indigo-100','text-indigo-700');

        sections.forEach(sec => sec.classList.add('hidden'));
        document.getElementById(btn.dataset.section).classList.remove('hidden');

        title.textContent = btn.textContent;
      });
    });
  </script>

</body>
</html>
