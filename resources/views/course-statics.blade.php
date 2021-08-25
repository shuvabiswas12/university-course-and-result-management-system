@extends('layout.app')
@section('content')

    <div class="page-name">
        <p><i class="fas fa-angle-double-right"></i> View Course Statics</p>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col content-box box-shadow">
                <div class="content-header bg-white">
                    <h4 class="content-header-title border-bottom-3px"><i class="fas fa-arrows-alt icon"></i> Courses
                        Statics</h4>
                </div>
                <div class="table-with-form">
                    <form class="row flex-column justify-content-center">
                        <div class="row justify-content-center">
                            <div class="form-group col ">
                                <label for="dept">Departments</label>
                                <select name="department" id="dept">
                                    <option>Choose a department</option>
                                    <option value="">CSE</option>
                                    <option value="">EEE</option>
                                    <option value="">ME</option>
                                    <option value="">Math</option>
                                    <option value="">IT</option>
                                </select>
                            </div>
                        </div>

                        <div class="table-container my-2">
                            <table>
                                <tr>
                                    <th>Code</th>
                                    <th>Name/Title</th>
                                    <th>Semester</th>
                                    <th>Assigned To</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
