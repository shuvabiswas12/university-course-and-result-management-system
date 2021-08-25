@extends('layout.app')
@section('content')

    <div class="page-name">
        <p><i class="fas fa-angle-double-right"></i> Course Assigning to Teachers</p>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col content-box box-shadow">
                <div class="content-header bg-white">
                    <h4 class="content-header-title border-bottom-3px"><i class="fas fa-arrows-alt icon"></i> Courses
                        Assign</h4>
                </div>
                <div>
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <select name="department" id="department">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="teacher">Teacher</label>
                                    <select name="department" id="teacher">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="credit-taken">Credit to be taken</label>
                                    <input type="number" id="credit-taken" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remaining-credit">Remaining Credit</label>
                                    <input type="number" id="remaining-credit" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="course-code">Course Code</label>
                                    <select name="department" id="course-code">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="credit">Credit</label>
                                    <input type="text" id="credit" class="form-control" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="button-box">
                                <button class="btn"><i class="far fa-save icon"></i> Assign</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


