<div class="pb-12">
    <x-section>
        <x-slot name="section_title">
        </x-slot>
        <x-slot name="section_body">

        <div
        class="font-italic"
        x-data="{show: false}"
        x-show.transition.opacity.out.duration.1500ms="show"
        x-init="@this.on('saved', () => { show = true; setTimeout(() => { show = false; }, 2000) })"
        style="display: none"> Data Saved.
        </div>
        </x-slot>
    </x-section>
</div>
