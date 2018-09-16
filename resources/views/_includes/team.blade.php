<div class="teamMember" data-member="{{ $slug }}">
    <img class="teamMember__image img-fluid" src="img/team/{{ $slug }}.jpg">
    <div class="teamMember__text">
        <h3 class="teamMember__name">{{ $name }}</h3>
        <p class="teamMember__role">{{ $role }}</p>
        <p class="teamMember__bio">{{ $bio or '' }}</p>
    </div>
</div>
