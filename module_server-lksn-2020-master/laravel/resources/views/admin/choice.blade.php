@extends('layouts/app')

@section('content')

<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Choice
        </div>
        <div class="card-body">
            <form method="post" action="/polls">
                @csrf
                <div class="form-group">
                    <label for="plate-number">Title</label>
                    <input type="text" class="form-control" id="plate-number" name="plate_number"
                        placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="seat">Description</label>
                    <input type="text" class="form-control" id="seat" name="seat" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="brand">Hari</label>
                    <select id="brand" class="form-control" name="brand">
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input type="text" class="form-control" id="deadline" name="Deadline"
                        placeholder="Deadline">
                </div>
                <button type="submit" class="btn btn-primary">Add Choices</button>
            </form>
        </div>
    </div>
</div>

@endsection
