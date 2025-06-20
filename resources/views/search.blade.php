@php
  if(!isset($categorySelected))
    $categorySelected = '';
@endphp

<x-template>
  <x-header :search="$search" long="true"/>
  <main class="grid grid-cols-4 gap-8 py-4 px-16" style="grid-template-areas: 'side main main main';">
    <sidebar style="grid-area: side;">
      <span class="flex flex-col mb-3">
        <h2 class="text-xl font-semibold text-gray-700">{{ $search }}</h2>
        <span class="text-gray-500 text-sm font-semibold">
          {{ $products->count() }} {{ Str::plural('producto', $products->count()) }}
        </span>
      </span>
      <div class="flex flex-col gap-1 w-min">
        <h3 class="text-lg">Categorias</h3>
        @foreach ($categories as $category)
          <a class="w-full p-1 rounded-md hover:text-blue-700 hover:scale-105 {{ $category->id == $categorySelected ? 'bg-box' : '' }}" href="{{ route('productsByNameCategoy.show', [$search, $category->id]) }}">{{ $category->name }}</a>
        @endforeach
      </div>
    </sidebar>
    <section class="flex flex-wrap gap-3" style="grid-area: main;">
      @foreach ($products as $product)
        <div class="p-2 rounded-md bg-box">
          <x-product-card :product="$product" long="true"/>
        </div>
      @endforeach
    </section>
  </main>
</x-template>
