<?php

it('belongs to a boxuser', function () {
    $boxuser = App\Models\Boxuser::factory()->create();
    $concept = App\Models\Concept::factory()->create([
        'boxuser_id' => $boxuser->id]);

    expect($concept->boxuser->is($boxuser))->toBeTrue();
});

it('can have tags', function() {
    $concept = App\Models\Concept::factory()->create();
    $concept->tag('frontend');
    expect($concept->tags)->toHavecount(1);
});
