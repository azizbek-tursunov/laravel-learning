<x-layouts.main>

    <x-slot:title>
        O'zgartirish
    </x-slot:title>

    <x-navigation>
        {{$post->title}}

        <x-slot:pageTitle>
            Edit
            </x-slot>
    </x-navigation>
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" value="{{ $post->title }}" />
                    @error('title')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                    
                </div>
                <div class="control-group mb-4">
                    <input name="photo" type="file" class="form-control p-4" name="title" placeholder="Rasm" />
                    @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="short_content" placeholder="Qisqacha mazmun" value="{{ $post->short_content }}"/>
                    @error('short_content')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="6" name="content" placeholder="Maqola">{{ $post->title }}</textarea>
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
