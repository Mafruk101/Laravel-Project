                 <section class= "cards">
                        <div class = "card">
                            <h2>{{ $totalEmployees }}</h2>
                           <p>Total Employees </p>
                        </div>
                        <div class = "card">
                            <h2>{{ $activeEmployees }}</h2>
                            <p>Active Employees</p>
                        </div>
                        <div class = "card">
                            <h2>{{ $inactiveEmployees }}</h2>
                            <p>Inactive Employees</p>
                        </div>
                        <div class = "card">
                            <h2>{{ $employees->pluck('Department')->unique()->count() }}</h2>
                            <p>Departments</p>
                        </div>
                </section>

                <section class="table-section">
                    <div class = "section-header">
                        <h2>Attendance Overview</h2>
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

                 <!-- Bottom Section -->

        <div class="bottom-grid">

            <!-- Leave -->

            <section class="table-section">
                <div class="section-header">
                    <h2>Leave Requests</h2>
                </div>

                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Employee ID</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($leaveRequests as $leave): ?>
                    <tr>
                        <td><?= $leave[0] ?></td>
                        <td><?= $leave[1] ?></td>
                        <td>
                            <?php if($leave[2]=="Approved"): ?>
                                <span class="badge success">
                                    Approved
                                </span>
                            <?php else: ?>
                                <span class="badge danger">
                                    Pending
                                </span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </section>

            <!-- Recruitment -->

            <section class="table-section">
                <div class="section-header">
                    <h2>Recruitment Pipeline</h2>
                </div>

                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Applicant ID</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Assigned To</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($recruitments as $rec): ?>
                    <tr>
                        <td><?= $rec[0] ?></td>
                        <td><?= $rec[1] ?></td>
                        <td><?= $rec[2] ?></td>
                        <td><?= $rec[3] ?></td>
                        <td><?= $rec[4] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
