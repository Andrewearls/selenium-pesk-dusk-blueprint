<?php

it('has a home', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
