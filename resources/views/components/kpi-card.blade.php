<div class="col-span-1">
	<div class="bg-secondary-color rounded-[10px] p-6">
		<div class="flex items-star gap-10 mb-4">
			<div class="w-[60px] h-[60px] bg-[#bddcdc] rounded-[50%] flex items-center justify-center">
				<img src={{$icon}} alt=""/>
			</div>
			<div class="text-left">
				<h3 class="text-[1.375rem] font-[800] opacity-[0.7]">{{$value}}</h3>
				<div class="text-sm text-gray-600">
					{{$trend}}
				</div>
			</div>
		</div>
		<div class="flex items-center justify-between">
			<div class="text-sm font-medium text-gray-700">
				{{$title}}
			</div>
			<div class="text-[{{$color}}] text-xs">
				{{$trend_up}}
			</div>
		</div>
	</div>
</div>