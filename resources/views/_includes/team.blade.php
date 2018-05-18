<div class="teamMember" data-member="{{ $slug }}">
    <img class="teamMember__picture img-fluid" src="img/team/{{ $slug }}.jpg">
    <div class="teamMember__text">
        <h3 class="teamMember__name">{{ $name }}</h3>
        <p class="teamMember__position">{{ $position }}</p>
        <p class="teamMember__bio">{{ $bio or ''}}</p>
    </div>
</div>
