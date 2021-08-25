@extends('layout.app')
@section('content')
    <div class="page-name">
        <p><i class="fas fa-angle-double-right"></i> Enroll For a Course</p>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col content-box box-shadow">
                <div class="content-header bg-white">
                    <h4 class="content-header-title border-bottom-3px">Course Enroll</h4>
                </div>
                <div>
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="reg-no">Student Reg. no</label>
                                    <select name="reg-no" id="reg-no">
                                        <option>Select Reg. no</option>
                                        <option value="volvo">112</option>
                                        <option value="saab">321</option>
                                        <option value="mercedes">917</option>
                                        <option value="audi">362</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" id="date">
                                </div>
                                <div class="form-group">
                                    <label for="course">Select Course</label>
                                    <select name="course" id="course">
                                        <option>Select Grade letter</option>
                                        <option value="volvo">Algo</option>
                                        <option value="saab">DS</option>
                                        <option value="mercedes">Ethics</option>
                                        <option value="audi">Math</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select name="department" id="department">
                                        <option>Select a dept</option>
                                        <option value="volvo">CSE</option>
                                        <option value="saab">EEE</option>
                                        <option value="mercedes">ME</option>
                                        <option value="audi">ENG</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="button-box">
                                <button class="btn"><i class="far fa-save icon"></i> Enroll</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
