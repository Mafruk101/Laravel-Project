<section class="table-section">
    <div class = "section-header">
        <h2>Recruitment Pipeline</h2>
    </div>
    <table>
        <thead>
        <tr>
            <th>Application Id</th>
            <th>Name</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Assigned To</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($recruitmentRequests as $recruitment)
                <tr>
                    <td>Employee {{ $recruitment->EmployeeId }}</td>
                    <td>{{ $recruitment->Name }}</td>
                    <td>{{ $recruitment->Status }}</td>
                    <td>{{ $recruitment->Priority }}</td>
                    <td>{{ $recruitment->AssignedTo }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No recruitment requests found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
