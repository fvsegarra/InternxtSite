<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close float-left ml-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="modal__icon" src="{{ $slot }}">
                <p class="modal__heading">{{ $heading }}</p>
                <p class="modal__subheading">{{ $subheading }}</p>

                <div class="modal__buttons">
                    {{ $content }}
                </div>{{-- /.modal__buttons --}}
            </div>
        </div>
    </div>
</div>
