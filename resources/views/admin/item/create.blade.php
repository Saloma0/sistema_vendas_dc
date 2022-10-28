@extends('admin.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Cadastrar Item</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Cadastrar Item</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-4">Preencha os campos</h4>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{route('produto.store')}}" method="POST">
                                    @csrf
                                <div class="row mb-3 mt-4">
                                    <label class="col-sm-2 col-form-label">Produto</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="id_fornecedor" aria-label="Default select example">
                                            <option selected="">Selecione o produto</option>
                                            @foreach ($produtos as $item)
                                            <option value="{{$item->id}}">{{$item->nome}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3 mt-4">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">QTD Itens disponiveis</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="nome" placeholder="Nome do produto"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-4">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Valor da compra</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nome" placeholder="Nome do produto"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-4">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Data de compra</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="nome" placeholder="Nome do produto"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3 mt-4">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Data de vencimento</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="nome" placeholder="Nome do produto"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Registrar produto</button>
                            </form>
                            <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
