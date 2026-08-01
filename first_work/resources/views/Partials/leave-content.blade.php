<div class = "inside-search-box">
    <input type = "text" id = "searchInput_inside" placeholder = "Search by employee, filter by role, status, department">
</div>

<section class="table-section">
    <div class = "section-header">
        <h2>Leave Requests</h2>
    </div>
    <table>
        <thead>
        <tr>
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($leaveRequests as $leave)
                <tr>
                    <td>Employee {{ $leave->EmployeeId }}</td>
                    <td>{{ $leave->EmployeeName ?? $leave->Name }}</td>
                    <td>{{ $leave->Status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No leave requests found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
