@props(['name'])

<label class="block mb-2 uppercase font-bold text-xs ext-gray-700" for={{ $name }}>
    {{ ucwords($name) }}
</label>
