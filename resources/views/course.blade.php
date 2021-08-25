
@extends('layout.app')
@section('content')

<div class="page-name">
    <p><i class="fas fa-angle-double-right"></i> Saving Courses</p>
</div>

<div class="container justify-content-center align-items-center">
    <div class="row justify-content-center">
        <div class="col content-box box-shadow">
            <div class="content-header bg-white">
                <h4 class="content-header-title border-bottom-3px">Save Course</h4>
            </div>
            <div>
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="text" id="code" class="form-control" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="credit">Credit</label>
                                <input type="number" id="credit" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" id="description" class="form-control">
                            </div>
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
                                <label for="semester">Semester</label>
                                <select name="department" id="semester">
                                    <option value="volvo">1st</option>
                                    <option value="saab">2nd</option>
                                    <option value="mercedes">3rd</option>
                                    <option value="audi">4th</option>
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

