<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close float-left ml-0" data-dismiss="modal" aria-label="Close">
                    <img class="img-fluid" src="/img/icons/modal_close.svg">
                </button>
            </div>
            <div class="modal-body">
                <img class="modal__icon modal__icon--{{ str_slug(strtolower($platform)) }}" src="{{ $icon }}">
                <p class="modal__heading">{{ $heading }}</p>
                <p class="modal__subheading">{{ $subheading }}</p>
                {{ $content }}
            </div>
        </div>
    </div>
</div>
