<?php include_once 'staff-header.php'; ?>
<?php



?>
    <div class="col-md-10">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active">Add</a>
                <a href="course-search.php" class="nav-item nav-link disabled">Search</a>
                <a href="course-schedule.php" class="nav-item nav-link disabled">Schedule</a>
                <a href="course-overview.php" class="nav-item nav-link disabled">Overview</a>
                <a href="course-reports.php" class="nav-item nav-link disabled">Reports</a>
            </div>
        </nav>
        <div class="tab-content">
            <div class="tab-pane mt-4 show active">
                <form method="post" action="">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Course ID</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="cid" value="" placeholder="ENG001">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="fname" placeholder="ENGLISH" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Grade</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <select name="Grade" class="form-control">
                                        <option value="1">Grade 01</option>
                                        <option value="2">Grade 02</option>
                                        <option value="3">Grade 03</option>
                                        <option value="4">Grade 04</option>
                                        <option value="5">Grade 05</option>
                                        <option value="6">Grade 06</option>
                                        <option value="7">Grade 07</option>
                                        <option value="8">Grade 08</option>
                                        <option value="9">Grade 09</option>
                                        <option value = "10">Grade 10</option>
                                        <option value = "11">Grade 11</option>
                                        <option value = "12">A/L ICT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hall</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <select name="Hall" class="form-control">
                                        <option value="01">H01</option>
                                        <option value="02">H03</option>
                                        <option value="03">H03</option>
                                        <option value="04">H04</option>
                                        <option value="05">H05</option>
                                        <option value="06">H06</option>
                                        <option value="07">H07</option>
                                        <option value="08">H08</option>
                                        <option value="09">H09</option>
                                        <option value = "10 ">H10</option>
                                        <option value = "11">H11</option>
                                        <option value = "12">H12</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Day</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <select name="Day" class="form-control">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday ">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Start Time</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="time" class="form-control" name="fname" placeholder="" required>
                                    <span class="hours">Class hours  8AM to 5PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">End time</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="time" class="form-control" name="fname" placeholder="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Fee</label>
                        <div class="col-sm-10">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="doby" placeholder="1500" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-dark">Add Course</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once 'staff-footer.php'; ?>