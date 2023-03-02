<x-layouts.main>

    <x-slot:title>
        Yangi post
    </x-slot:title>

    <x-navigation>
        Post yaratish

        <x-slot:pageTitle>
            Post yaratish
            </x-slot>
    </x-navigation>
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" value="{{ old('title') }}"/>
                    @error('title')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                 <div class="control-group mb-4">
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="control-group mb-4">
                    <select name="tags[]" multiple>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="control-group mb-4">
                    <input name="photo" type="file" class="form-control p-4" name="title" placeholder="Rasm" />
                    @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="short_content" placeholder="Qisqacha mazmun" value="{{ old('short_content') }}"/>
                    @error('short_content')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="6" name="content" placeholder="Maqola">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit"
                        id="sendMessageButton">Saqlash</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.main>
