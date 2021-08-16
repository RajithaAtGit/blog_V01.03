<div x-data="{ show: false}" @click.outside="show = false">
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="absolute py-2 bg-gray-100 lg:w-max w-full mt-2 rounded-xl z-50 max-h-60 overflow-auto">
        {{$slot}}
    </div>
</div>
