@extends('layout.app')
@section('content')
    <div class="page-name">
        <p><i class="fas fa-angle-double-right"></i> Saving Student Result</p>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col content-box box-shadow">
                <div class="content-header bg-white">
                    <h4 class="content-header-title border-bottom-3px">Save Student's Result</h4>
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
                                    <label for="select-course">Course</label>
                                    <select name="course" id="select-course">
                                        <option>Select a course</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Grade Letter</label>
                                    <select name="grade" id="semester">
                                        <option>Select Grade letter</option>
                                        <option value="volvo">1st</option>
                                        <option value="saab">2nd</option>
                                        <option value="mercedes">3rd</option>
                                        <option value="audi">4th</option>
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
                                <button class="btn"><i class="far fa-save icon"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
