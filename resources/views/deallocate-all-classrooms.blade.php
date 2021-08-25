@extends('layout.app')
@section('content')
    <div class="page-name">
        <p><i class="fas fa-angle-double-right"></i> Un-assigning all rooms</p>
    </div>

    <div class="container justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col content-box box-shadow">
                <div class="content-header bg-white">
                    <h4 class="content-header-title border-bottom-3px"><i class="fas fa-arrows-alt icon"></i>Unallocate
                        Rooms</h4>
                </div>
                <div>
                    <form>
                        <div class="col">
                            <div class="button-box">
                                <button class="btn"><i class="far fa-save icon"></i> Un-allocate rooms</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
