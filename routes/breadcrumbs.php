<?php
/**
 * Created by PhpStorm.
 * User: Boiko Sergii
 * Date: 20.10.2018
 * Time: 12:48
 */

Breadcrumbs::for('upload', function ($trail) {
    $trail->push('Upload', route('upload'));
});
