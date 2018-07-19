<?php

namespace wp_whise\view\admin\project;

use wp_whise\model\Project;

global $post;

$project = new Project();

$project->set_post( $post->ID );

?>
<table class="form-table">

    <tbody>
    <tr>
        <th scope="row"><label for="street"><?php _e( 'Street', 'wp_whise' ); ?></label></th>
        <td>
            <input name="_street" type="text" id="street" value="" class="regular-text">
            <p class="description" id="tagline-description"><?php _e( 'The project street.', 'wp_whise' ); ?></p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="city"><?php _e( 'City', 'wp_whise' ); ?></label></th>
        <td>
            <input name="_city" type="text" id="city" value="" class="regular-text">
            <p class="description" id="tagline-description"><?php _e( 'The project city.', 'wp_whise' ); ?></p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="buildyear"><?php _e( 'Build year', 'wp_whise' ); ?></label></th>
        <td>
            <input name="_buildyear" type="text" id="buildyear" value="" class="regular-text" aria-describedby="tagline-description">
            <p class="description" id="tagline-description"><?php _e( 'The year project was released.', 'wp_whise' ); ?></p>
        </td>
    </tr>

    <tr>
        <th scope="row"><label for="surface"><?php _e( 'Surface', 'wp_whise' ); ?></label></th>
        <td>
            <input name="_surface" type="text" id="surface" value="" class="regular-text">
            <p class="description" id="tagline-description"><?php _e( 'The project surface.', 'wp_whise' ); ?></p>
        </td>
    </tr>

    </tbody>
</table>