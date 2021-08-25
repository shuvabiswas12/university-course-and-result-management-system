
@extends('layout.app')
@section('content')
<div class="page-name">
    <p><i class="fas fa-angle-double-right"></i> Allocate Classrooms</p>
</div>

<div class="container justify-content-center align-items-center">
    <div class="row justify-content-center">
        <div class="col content-box box-shadow">
            <div class="content-header bg-white">
                <h4 class="content-header-title border-bottom-3px">Classroom Allocation</h4>
            </div>
            <div>
                <form>
                    <div class="row">
                        <div class="col">

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
                            <div class="form-group">
                                <label for="room">Room</label>
                                <select name="room" id="room">
                                    <option>Select a Room</option>
                                    <option value="volvo"></option>
                                    <option value="saab"></option>
                                    <option value="mercedes"></option>
                                    <option value="audi"></option>
                                </select>
                            </div>


                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" id="date">
                            </div>

                            <div class="form-group">
                                <label for="time-start">From</label>
                                <input type="time" id="time-start" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="time-end">To</label>
                                <input type="time" id="time-end" class="form-control">
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



