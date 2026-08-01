<div class = "inside-search-box">
    <input type = "text" id = "searchInput_inside" placeholder = "Search by employee, filter by role, status, department">
</div>

<section class="table-section">
    <div class = "section-header">
        <h2>Attendance Directory</h2>
    </div>
    <table>
        <thead>
        <tr>
            <th>Employee Id</th>
            <th>Employee Name</th>
            <th>Date</th>
            <th>Present</th>
            <th>Absent</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($attendance as $record)
                <tr>
                    <td>Employee {{ $record->EmployeeId }}</td>
                    <td>{{ $record->EmployeeName ?? $record->Name }}</td>
                    <td>{{ $record->Date }}</td>
                    <td>{{ $record->Present }}</td>
                    <td>{{ $record->Absent }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No attendance records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
