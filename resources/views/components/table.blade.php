<div class="shadow-md overflow-hidden border-b border-gray-200 sm:rounded-lg mt-1">
    <table class="min-w-full divide-y divide-gray-900">
        @if (isset($table_head))
        <thead class="bg-gray-700">
            <tr>
                {{ $table_head }}
            </tr>
        </thead>
        @endif
        @if (isset($table_body))
        <tbody class="bg-white divide-y divide-gray-300">
            {{ $table_body }}
        </tbody>
        @endif
        @if (isset($table_foot ))
        <tfoot class="bg-gray-700">
            <tr>
                {{ $table_foot }}
            </tr>
        </tfoot>
        @endif
    </table>
</div>

