<div>
    <form wire:submit.prevent="submit">
        <div class="mb-3">
            <label for="formInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="formInputName" value="{{ $name }}" wire:model.lazy="name">
            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="formInputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="formInputEmail" value="{{ $email }}" wire:model.lazy="email">
            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="FormControlContact" class="form-label">Message</label>
            <textarea class="form-control" id="FormControlContact" rows="3" wire:model.lazy="content">{{ $content }}</textarea>
            @error('content') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>

{{--    <form wire:submit.prevent="submit">--}}
{{--        <input type="text" wire:model.lazy="name">--}}
{{--        @error('name') <span class="error">{{ $message }}</span> @enderror--}}

{{--        <input type="text" wire:model.lazy="email">--}}
{{--        @error('email') <span class="error">{{ $message }}</span> @enderror--}}

{{--        <textarea rows="10" cols="30" wire:model.lazy="content"></textarea>--}}
{{--        @error('content') <span class="error">{{ $message }}</span> @enderror--}}

{{--        <button type="submit">Save Contact</button>--}}
{{--    </form>--}}
</div>
