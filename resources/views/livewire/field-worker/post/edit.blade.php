<div>
    <x-slot name="header"><h2 class="text-xl text-gray-800 leading-tight">{{ __('New Post') }}</h2></x-slot>

    <x-section>
        <x-slot name="section_body">
            <div class="shadow-md overflow-hidden sm:rounded-md bg-white">
                <form method="POST" action="{{ route('fieldworker.posts.update',$post->id) }}">
                    @csrf
                    <div class="md:grid md:grid-cols-2 md:gap-6 p-4">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">{{ __('Date') }}</label>
                            <input type="date" required name="date" id="date" value="{{ $post->date }}" placeholder="{{ __('Date') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('date') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">{{ __('Status') }}</label>
                            <select id="status" required name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option {{ ($post->status == 0)? 'selected' : '' }} value="0">Hidden</option>
                                <option {{ ($post->status == 1)? 'selected' : '' }} value="1">Show</option>
                            </select>
                            @error('author') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                        </div>
                    </div>


                    <div class="px-4 pb-2">
                        <label for="subject" class="block text-sm font-medium text-gray-700">{{ __('Subject') }}</label>
                        <input type="text" required name="subject" id="subject" value="{{ $post->subject }}" placeholder="{{ __('Subject') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('subject') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                    </div>

                    <div class="px-4 py-2">
                        <label for="text" class="block text-sm font-medium text-gray-700">{{ __('Text') }}</label>

                        <textarea name="text" rows="20" maxlength="2500" id="myText">{!! $post->text !!}</textarea>

                        @error('text') <span class="text-sm text-red-600">{{$message}}</span> @enderror
                    </div>


                    @if (session('message') !== null)
                    <div class="bg-green-500 text-green-100 font-bold text-center py-2">{{  session('message')  }}</div>
                    @endif

                    <div class="px-4 py-3 bg-gray-600 text-right sm:px-6">
                        <x-button-submit />
                        <x-button-viewer href="{{ route('fieldworker.posts.view', $post->id) }}" />
                        <a  target="_blanc" href="{{ route('makePDF',$post->id) }}" style="font-size: .85rem" class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md bg-gray-700 text-white hover:bg-black focus:outline-black focus:ring-2 focus:ring-offset-2 focus:ring-black">{{ __('PDF') }}</a>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-section>
    @include('components.modal-delete-show')

    <script src="https://cdn.tiny.cloud/1/ty5pex8yxfo1pdaal5kfq0lm3698qv4aytcg1n2yilrlkmj1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>tinymce.init({ selector: 'textarea' });</script>
</div>
