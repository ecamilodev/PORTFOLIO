{{-- Terminal Section --}}
<section id="terminal" class="py-20 px-6 lg:px-12">
    <div class="max-w-3xl mx-auto panel terminal-window rounded-lg overflow-hidden fade-up opacity-0 translate-y-4 transition-all duration-700">
        {{-- Title bar --}}
        <div class="flex items-center gap-2 px-4 py-3 border-b border-border bg-void/50">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
            <span class="font-mono text-xs text-text-muted ml-2">eduard@portfolio:~$</span>
        </div>

        {{-- Body --}}
        @php
            $terminalLines = [
                ['cmd' => 'whoami',    'response' => 'Software Engineer'],
                ['cmd' => 'skills',    'response' => 'Laravel, PHP, Linux, MySQL, DevOps, REST APIs'],
                ['cmd' => 'status',    'response' => 'AVAILABLE FOR WORK'],
                ['cmd' => 'location',  'response' => 'Colombia (Remote) — UTC -5'],
                ['cmd' => 'interests', 'response' => 'Software Architecture, CyberSecurity, Backend Development, DevOps'],
            ];
        @endphp
        <div id="terminal-body"
             class="terminal-body p-6 font-mono text-sm space-y-3 overflow-x-auto min-h-[24rem]"
             data-prompt="eduard@portfolio:~$ "
             data-lines="{{ json_encode($terminalLines) }}">
            @foreach($terminalLines as $line)
                <p><span class="text-cyan">eduard@portfolio:~$</span> <span class="text-neon-green">{{ $line['cmd'] }}</span></p>
                <p class="text-text">{{ $line['response'] }}</p>
            @endforeach
            <p><span class="text-cyan">eduard@portfolio:~$</span> <span class="cursor-blink"></span></p>
        </div>
    </div>
</section>
