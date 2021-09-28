@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="display-2">Ada Pertanyaan?</h3>
                        </div>
                        <div class="col-md-12">
                            <p class="display-6">
                                Mari bincangkan bagaimana kami dapat membantu perniagaan anda 
                                dengan panggilan rundingan percuma untuk membincangkan projek atau idea anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Nama Penuh</label>
                            <input type="text" class="form-control" id="inputFullName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Email</label>
                            <input type="email" class="form-control" id="inputFullName">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Syarikat</label>
                            <input type="text" class="form-control" id="inputFullName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">No. Telefon</label>
                            <input type="text" class="form-control" id="inputFullName">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="inputFullName">Apa yang kami boleh bantu?</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <button class="btn btn-primary">Hantar</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection