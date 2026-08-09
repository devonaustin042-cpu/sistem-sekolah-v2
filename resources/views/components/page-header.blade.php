@props([
    'title',
    'subtitle' => null,
    'description' => '',
    'backUrl' => null,
    'backText' => 'Kembali'
])

<div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">
    <div>
        @if($backUrl)
            <a href="{{ $backUrl }}"
                class="mb-1 block text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">
                &larr; {{ $backText }}
            </a>
        @elseif($subtitle)
            <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">{{ $subtitle }}</p>
        @endif

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">{{ $title }}</h1>

        @if($description)
            <p class="mt-1 text-sm text-slate-500">{{ $description }}</p>
        @endif
    </div>

    @if(isset($action))
        <div>
            {{ $action }}
        </div>
    @endif
</div>