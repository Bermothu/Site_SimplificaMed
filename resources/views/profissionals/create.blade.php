@extends('layout.main')

@section('title', 'profissionals - SimplificaMed')

@section('content')

    <div id="profissional-create-container" class="card p-4 mx-auto mt-4 mb-4" style="max-width: 600px;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Cadastre um profissional</h1>
        <form action="{{ route('cadastrar_profissional') }}" method="POST">
            @csrf

            <!-- Título da profissional -->
            <div class="form-group mb-3">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Senha -->
            <div class="form-group mb-3">
                <label for="password">Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha" required>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Endereço -->
            <div class="form-group mb-3">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" class="form-control" value="{{ old('endereco') }}" required>
                @error('endereco')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- CPF -->
            <div class="form-group mb-3">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}">
                @error('cpf')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Telefone -->
            <div class="form-group mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" value="{{ old('telefone') }}">
                @error('telefone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tipo -->
            <div class="form-group mb-3">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" class="form-control" value="{{ old('tipo') }}">
                @error('tipo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botão de submissão -->
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Cadastrar profissional</button>
                </div>   
        </form>
    </div>

@endsection
