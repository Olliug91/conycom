@props(['project'])

<div class="bg-white p-8 lg:p-12 group hover:bg-brand-dark transition-all duration-700 border-r border-b border-brand-dark/10 flex flex-col justify-between min-h-[400px]">
    <div>
        <div class="flex justify-between items-start mb-12">
            <span class="text-[9px] font-mono p-2 border border-brand-dark/10 text-[#706f6c] group-hover:text-white/40 group-hover:border-white/10 transition-colors uppercase">
                PROJECT_KEY: {{ $project['id'] }}
            </span>
            <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer" class="text-brand-dark group-hover:text-white transition-colors">
                <svg class="h-5 w-5 opacity-40 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
        
        <h3 class="text-3xl font-bold mb-6 tracking-tighter text-brand-dark group-hover:text-white transition-colors uppercase leading-none">
            {{ $project['title'] }}
        </h3>
        
        <p class="text-brand-dark/70 group-hover:text-white/70 transition-colors mb-12 text-sm leading-relaxed font-sans max-w-sm">
            {{ $project['description'] }}
        </p>
    </div>

    <div class="flex flex-wrap gap-4 pt-6 border-t border-brand-dark/5 group-hover:border-white/5 transition-colors">
        @foreach($project['tags'] as $tag)
            <span class="text-[9px] font-mono uppercase tracking-widest text-brand-dark group-hover:text-white/60">
                {{ $tag }}
            </span>
        @endforeach
    </div>
</div>
