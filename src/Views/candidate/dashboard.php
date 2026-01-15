<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Candidate Dashboard | Job Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg hidden md:block">
    <div class="p-6 text-xl font-bold text-emerald-600">Candidate Panel</div>
    <nav class="px-4 space-y-2">
      <button class="nav-btn w-full text-left px-4 py-2 rounded bg-emerald-100 text-emerald-700" data-section="dashboard">Dashboard</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="jobs">Browse Jobs</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="applications">My Applications</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="profile">My Profile</button>
      <button class="nav-btn w-full text-left px-4 py-2 rounded hover:bg-gray-100" data-section="settings">Settings</button>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-6">

    <!-- Top Bar -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold" id="sectionTitle">Dashboard</h1>
      <div class="flex items-center gap-3">
        <span class="text-sm text-gray-600">Candidate</span>
        <img src="https://i.pravatar.cc/40?img=3" class="rounded-full" />
      </div>
    </div>

    <!-- Dashboard -->
    <section id="dashboard" class="section">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Applications Sent</p>
          <h2 class="text-2xl font-bold">24</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Under Review</p>
          <h2 class="text-2xl font-bold text-yellow-600">6</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Shortlisted</p>
          <h2 class="text-2xl font-bold text-green-600">3</h2>
        </div>
        <div class="bg-white p-4 rounded shadow">
          <p class="text-gray-500">Interviews</p>
          <h2 class="text-2xl font-bold text-emerald-600">1</h2>
        </div>
      </div>
    </section>

    <!-- Browse Jobs -->
    <section id="jobs" class="section hidden">
      <div class="bg-white rounded shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Available Jobs</h2>
        <div class="space-y-3">
          <div class="border p-3 rounded flex justify-between items-center">
            <div>
              <h3 class="font-semibold">Frontend Developer</h3>
              <p class="text-sm text-gray-500">TechCorp • Remote</p>
            </div>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700">Apply</button>
          </div>
          <div class="border p-3 rounded flex justify-between items-center">
            <div>
              <h3 class="font-semibold">Backend Engineer</h3>
              <p class="text-sm text-gray-500">DataSoft • Onsite</p>
            </div>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700">Apply</button>
          </div>
        </div>
      </div>
    </section>

    <!-- My Applications -->
    <section id="applications" class="section hidden">
      <div class="bg-white rounded shadow p-4">
        <h2 class="text-lg font-semibold mb-4">My Applications</h2>
        <table class="w-full text-sm">
          <thead class="bg-gray-100">
            <tr>
              <th class="text-left p-2">Job</th>
              <th class="text-left p-2">Company</th>
              <th class="text-left p-2">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="p-2">Frontend Developer</td>
              <td class="p-2">TechCorp</td>
              <td class="p-2 text-yellow-600">Under Review</td>
            </tr>
            <tr class="border-t">
              <td class="p-2">UI Designer</td>
              <td class="p-2">DesignPro</td>
              <td class="p-2 text-green-600">Shortlisted</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Profile -->
    <section id="profile" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">My Profile</h2>
        <p class="text-gray-600">Name: <strong>Alex Johnson</strong></p>
        <p class="text-gray-600">Email: alex@email.com</p>
        <p class="text-gray-600">Skills: JavaScript, React, Tailwind</p>
        <button class="mt-4 bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700">Edit Profile</button>
      </div>
    </section>

    <!-- Settings -->
    <section id="settings" class="section hidden">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Settings</h2>
        <p class="text-gray-600">Update password, notifications, and privacy settings.</p>
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
        buttons.forEach(b => b.classList.remove('bg-emerald-100','text-emerald-700'));
        btn.classList.add('bg-emerald-100','text-emerald-700');

        sections.forEach(sec => sec.classList.add('hidden'));
        document.getElementById(btn.dataset.section).classList.remove('hidden');

        title.textContent = btn.textContent;
      });
    });
  </script>

</body>
</html>