
@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodawanie cabla</div>
                <div class="card-body">
        <form method="POST" action="{{ route('chargekables.store') }}">
        @csrf
            <div class="form-group row">
                <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>
                <div class="col-md-6 form-group">

                    <select class="form-control, custom-select" name="type_id">
                        <option value="">Select Item</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" @if($type->id)
                                {{ $value }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                <input id="name" class="form-control" @error('name') is-invalid @enderror name="name"
                       type="text" name="name" value={{ "old('name')" }} required autocomplete="name" autofocus />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
