<div class="max-w-md mx-auto p-4 bg-white shadow-md rounded-lg">
    <form>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <label for="awbno" class="block text-gray-700">{{ __('Awbno') }}</label>
            </div>
            <div class="col-span-1">
                <input type="text" name="awbno" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('awbno') border-red-500 @enderror" value="{{ old('awbno', $cargo?->awbno) }}" id="awbno" placeholder="Awbno">
                {!! $errors->first('awbno', '<div class="text-red-500 text-sm mt-1"><strong>:message</strong></div>') !!}
            </div>

            <div class="col-span-1">
                <label for="from" class="block text-gray-700">{{ __('From') }}</label>
            </div>
            <div class="col-span-1">
                <input type="text" name="from" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('from') border-red-500 @enderror" value="{{ old('from', $cargo?->from) }}" id="from" placeholder="From">
                {!! $errors->first('from', '<div class="text-red-500 text-sm mt-1"><strong>:message</strong></div>') !!}
            </div>

            <div class="col-span-1">
                <label for="to" class="block text-gray-700">{{ __('To') }}</label>
            </div>
            <div class="col-span-1">
                <input type="text" name="to" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('to') border-red-500 @enderror" value="{{ old('to', $cargo?->to) }}" id="to" placeholder="To">
                {!! $errors->first('to', '<div class="text-red-500 text-sm mt-1"><strong>:message</strong></div>') !!}
            </div>

            <div class="col-span-1">
                <label for="weight" class="block text-gray-700">{{ __('Weight') }}</label>
            </div>
            <div class="col-span-1">
                <input type="text" name="weight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('weight') border-red-500 @enderror" value="{{ old('weight', $cargo?->weight) }}" id="weight" placeholder="Weight">
                {!! $errors->first('weight', '<div class="text-red-500 text-sm mt-1"><strong>:message</strong></div>') !!}
            </div>

            <div class="col-span-1">
                <label for="pieces" class="block text-gray-700">{{ __('Pieces') }}</label>
            </div>
            <div class="col-span-1">
                <input type="text" name="pieces" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('pieces') border-red-500 @enderror" value="{{ old('pieces', $cargo?->pieces) }}" id="pieces" placeholder="Pieces">
                {!! $errors->first('pieces', '<div class="text-red-500 text-sm mt-1"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Submit') }}
            </button>
        </div>
    </form>
</div>



