<div class="p-6 bg-white rounded-lg shadow-md">
    <div class="mb-4">
        <label for="awbno" class="block text-sm font-medium text-gray-700">{{ __('Awbno') }}</label>
        <input type="text" name="awbno" id="awbno" placeholder="Awbno" 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('awbno') border-red-500 @enderror" 
               value="{{ old('awbno', $trackedCargo?->awbno) }}">
        @error('awbno')
            <div class="mt-1 text-red-500 text-sm"><strong>{{ $message }}</strong></div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="flight" class="block text-sm font-medium text-gray-700">{{ __('Flight') }}</label>
        <input type="text" name="flight" id="flight" placeholder="Flight" 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('flight') border-red-500 @enderror" 
               value="{{ old('flight', $trackedCargo?->flight) }}">
        @error('flight')
            <div class="mt-1 text-red-500 text-sm"><strong>{{ $message }}</strong></div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="status" class="block text-sm font-medium text-gray-700">{{ __('Status') }}</label>
        <input type="text" name="status" id="status" placeholder="Status" 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('status') border-red-500 @enderror" 
               value="{{ old('status', $trackedCargo?->status) }}">
        @error('status')
            <div class="mt-1 text-red-500 text-sm"><strong>{{ $message }}</strong></div>
        @enderror
    </div>

    <div class="mb-4">
        <label for="location" class="block text-sm font-medium text-gray-700">{{ __('Location') }}</label>
        <input type="text" name="location" id="location" placeholder="Location" 
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('location') border-red-500 @enderror" 
               value="{{ old('location', $trackedCargo?->location) }}">
        @error('location')
            <div class="mt-1 text-red-500 text-sm"><strong>{{ $message }}</strong></div>
        @enderror
    </div>

    <div class="mt-6">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ __('Submit') }}
        </button>
    </div>
</div>
