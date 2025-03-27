@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit {{ $category->name }} for {{ $city->name }}</h5>
            <a href="{{ route('admin.cities.categories', $city) }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to Categories
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.cities.category.update', ['city' => $city->id, 'category' => $category->id]) }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Category Image</label>
                    @if($categoryDetail && $categoryDetail->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $categoryDetail->image) }}" 
                                 alt="{{ $category->name }}" 
                                 style="max-width: 200px; height: auto;">
                        </div>
                    @endif
                    <input type="file" 
                           name="image" 
                           class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea name="content" 
                              rows="10" 
                              class="form-control @error('content') is-invalid @enderror">{{ old('content', $categoryDetail->content ?? '') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection