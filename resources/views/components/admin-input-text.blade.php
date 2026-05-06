<div class="mb-3">
  <label class="form-label" for="{{ $field }}">{{ ucfirst($field) }}</label>
  <input type="text" class="form-control" id="{{ $field }}" wire:model="{{ $field }}">
  <x-alert-error field="{{ $field }}" />
</div>
