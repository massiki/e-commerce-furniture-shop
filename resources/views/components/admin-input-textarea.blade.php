<div class="mb-3">
  <label class="form-label" for="{{ $field }}">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
  <textarea class="form-control" id="{{ $field }}" rows="3" wire:model="{{ $field }}"></textarea>
  <x-alert-error field="{{ $field }}" />
</div>
