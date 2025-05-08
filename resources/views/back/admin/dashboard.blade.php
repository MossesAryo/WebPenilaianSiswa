@extends('back.layout.template')
@section('main')
<h2 class="text-3xl font-extrabold mb-6 tracking-tight leading-tight text-soft-blue">Welcome to the Web Penilaian Siswa Admin Panel</h2>
<p class="mb-8 max-w-prose text-gray-600 text-lg leading-relaxed">
  Manage student data, score records, classes, teachers, and all settings from this intuitive and modern interface. Use the sidebar navigation to switch between different modules seamlessly.
</p>

<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
  <div class="soft-blue-bg rounded-xl shadow-lg p-6 border border-blue-300 hover:shadow-xl transition-shadow">
    <h3 class="text-lg font-semibold text-soft-blue mb-3 tracking-wide">Total Students</h3>
    <p class="text-5xl font-extrabold text-soft-blue">1,245</p>
  </div>
  <div class="soft-blue-bg rounded-xl shadow-lg p-6 border border-blue-300 hover:shadow-xl transition-shadow">
    <h3 class="text-lg font-semibold text-soft-blue mb-3 tracking-wide">Total Classes</h3>
    <p class="text-5xl font-extrabold text-soft-blue">27</p>
  </div>
  <div class="soft-blue-bg rounded-xl shadow-lg p-6 border border-blue-300 hover:shadow-xl transition-shadow">
    <h3 class="text-lg font-semibold text-soft-blue mb-3 tracking-wide">Average Score</h3>
    <p class="text-5xl font-extrabold text-soft-blue">85.3%</p>
  </div>
</section>

<section class="mt-12">
  <h3 class="text-2xl font-bold text-soft-blue mb-6 tracking-tight">Recent Activity</h3>
  <div class="overflow-auto rounded-xl border border-blue-300 bg-white shadow-sm">
    <table class="min-w-full divide-y divide-gray-200 text-gray-700">
      <thead class="bg-blue-100">
        <tr>
          <th scope="col" class="px-7 py-4 text-left text-sm font-semibold uppercase tracking-wide">Date</th>
          <th scope="col" class="px-7 py-4 text-left text-sm font-semibold uppercase tracking-wide">Activity</th>
          <th scope="col" class="px-7 py-4 text-left text-sm font-semibold uppercase tracking-wide">User</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <tr class="hover:bg-gray-100 transition-colors">
          <td class="px-7 py-4 whitespace-nowrap text-sm font-medium">2024-06-20</td>
          <td class="px-7 py-4 text-sm">Added new student data</td>
          <td class="px-7 py-4 whitespace-nowrap text-sm font-semibold">admin</td>
        </tr>
        <tr class="hover:bg-gray-100 transition-colors">
          <td class="px-7 py-4 whitespace-nowrap text-sm font-medium">2024-06-19</td>
          <td class="px-7 py-4 text-sm">Updated class schedules</td>
          <td class="px-7 py-4 whitespace-nowrap text-sm font-semibold">admin</td>
        </tr>
        <tr class="hover:bg-gray-100 transition-colors">
          <td class="px-7 py-4 whitespace-nowrap text-sm font-medium">2024-06-18</td>
          <td class="px-7 py-4 text-sm">Graded exams for grade 8</td>
          <td class="px-7 py-4 whitespace-nowrap text-sm font-semibold">teacher1</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
@endsection