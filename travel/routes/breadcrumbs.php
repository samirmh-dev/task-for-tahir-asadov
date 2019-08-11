<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Əsas səhifə', route('home'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->parent('home');
    $trail->push('İdarə paneli', route('dashboard'));
});

// Home > Flights
Breadcrumbs::for('flights', function ($trail) {
    $trail->parent('home');
    $trail->push('Uçuşlar', route('flights'));
});

// Home > Flights
Breadcrumbs::for('flights.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Uçuşlar', route('flights.index'));
});

// Home > Flights > Create
Breadcrumbs::for('flights.create', function ($trail) {
    $trail->parent('flights.index');
    $trail->push('Yeni', route('flights.create'));
});

// Home > Flights > Edit
Breadcrumbs::for('flights.edit', function ($trail, $flight) {
    $trail->parent('flights.index');
    $trail->push('Redaktə', route('flights.edit', $flight->id));
});




// Home > Hotels
Breadcrumbs::for('hotels', function ($trail) {
    $trail->parent('home');
    $trail->push('Otellər', route('hotels'));
});

// Home > Hotels
Breadcrumbs::for('hotels.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Otellər', route('hotels.index'));
});

// Home > Hotels > Create
Breadcrumbs::for('hotels.create', function ($trail) {
    $trail->parent('hotels.index');
    $trail->push('Yeni', route('hotels.create'));
});

// Home > Hotels > Edit
Breadcrumbs::for('hotels.edit', function ($trail, $flight) {
    $trail->parent('hotels.index');
    $trail->push('Redaktə', route('hotels.edit', $flight->id));
});
