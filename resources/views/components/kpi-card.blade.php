<div class="col-span-1">
    <div class="bg-[{{$background}}] shadow-[0_4px_14px_rgba(0,0,0,0.25)] rounded-[16.3861px] p-6">
        <div class="flex justify-between items-start gap-10">
            <div class="text-white">
                <div class="text-sm font-semibold">
                    {{$title}}
                </div>

                <div class="flex items-end gap-2 mt-[15px]">
                    <h3 class="text-[35px] font-[800] text-white">
                        {{$value}}
                    </h3>

                    <div class="text-[0.75rem] flex gap-2 items-center
                        {{ $trend < 10 ? 'bg-[#FFE5E5] text-[#FF2A2A]' : 'bg-[#DFFDDD] text-[#008000]' }}
                        rounded-[30px] px-[10px] py-[4px]">

                        {{$trend}}%

                        @if($trend < 10)
                            <!-- Down Arrow -->
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none">
                                <path d="M0.55127 0.566406L5.94346 5.81486L8.63955 3.19063L14.0317 8.43909"
                                    stroke="#FF2A2A" stroke-width="1.58074"/>
                            </svg>
                        @else
                            <!-- Up Arrow -->
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none">
                                <path d="M0.55127 8.26587L5.82481 3.13289L8.46159 5.69938L13.7351 0.566406"
                                    stroke="#008000" stroke-width="1.58074"/>
                            </svg>
                        @endif
                    </div>
                </div>
            </div>

            <img src="{{$icon}}" alt="icon"/>
        </div>
    </div>
</div>
