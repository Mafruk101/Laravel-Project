<div class = "inside-search-box">
    <input type = "text" id = "searchInput_inside" placeholder = "Search by employee, filter by role, status, department">
</div>

<section class="table-section">
    <div class = "section-header">
        <h2>Employee Directory</h2>
    </div>
    <table>
        <thead>
        <tr>
            <th>Employee</th>
            <th>Role</th>
            <th>Department</th>
            <th>Status</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>Employee {{ $employee->EmployeeId }}</td>
                    <td>{{ $employee->Role }}</td>
                    <td>{{ $employee->Department }}</td>
                    <td>{{ $employee->Status }}</td>
                    <td>{{ $employee->Location }}</td>
                    <td>{{ $employee->Action }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No employees found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
