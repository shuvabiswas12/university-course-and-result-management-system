@extends('layout.app')
@section('content')


    <div class="page-name">
        <p><i class="fas fa-angle-double-right"></i> Saving Departments</p>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col content-box box-shadow">
                <div class="content-header bg-white">
                    <h4 class="content-header-title border-bottom-3px">Save Departments</h4>
                </div>

                <div class="table-with-form">
                    <form class="row flex-column">
                        <div class="row">
                            <div class="form-group col">
                                <label for="code">Code</label>
                                <input type="text" id="code" class="form-control" autofocus>
                            </div>
                            <div class="form-group col">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="button-box">
                            <button class="btn"><i class="far fa-save icon"></i> Save</button>
                        </div>
                    </form>
                </div>

                <div style="margin: 5px 0">
                    <hr>
                </div>

                <div class="px-2">
                    <div class="table-container">
                        <table>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>CS101</td>
                                <td>Data Structure</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CS102</td>
                                <td>Discrete Math</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>EEE211</td>
                                <td>Digital Logic design</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CE421</td>
                                <td>Drawing</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CS101</td>
                                <td>Data Structure</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CS102</td>
                                <td>Discrete Math</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>EEE211</td>
                                <td>Digital Logic design</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CE421</td>
                                <td>Drawing</td>
                                <td>
                                    <button class="btn">Delete</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
