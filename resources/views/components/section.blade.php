<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <section class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-2">
        @if (isset($section_title))
        <div class="px-4 py-5 sm:px-6">
            {{ $section_title }}
        </div>
        @endif

        @if (isset($section_body))
        <div class="border-t border-gray-200 bg-gray-200 overflow-hidden p-3" >
            {{ $section_body }}
        </div>

        <div x-data="{ shown: false, timeout: null }"
        x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 4000);  })"
        x-show.transition.out.opacity.duration.1500ms="shown"
        x-transition:leave.opacity.duration.1500ms
        style="display: none;"
        class="'text-green-900 bg-green-300 py-2 font-bold text-center">
        {{ session('message') }} &#128578;
        </div>

        @endif

    </section>

    <hr class="bg-gray-200">


</div>
