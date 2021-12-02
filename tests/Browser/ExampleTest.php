<?php

use Laravel\Dusk\Browser;

it('can see home', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->assertSee('Laravel');
    });
});
        
