<table>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta A</label>
        </th>
        <td>
            <input type="checkbox" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_b">Meta B</label>
        </th>
        <td>
            <input type="text" id="meta_b" name="meta_b" value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_c">Meta C</label>
        </th>
        <td>
            <input type="text" id="meta_c" name="meta_c" value="<?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />
        </td>
    </tr>
     
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_d">Meta D</label>
        </th>
        <td>
            <input type="checkbox" id="meta_d" name="meta_d" value="<?php echo @get_post_meta($post->ID, 'meta_d', true); ?>" />
        </td>
    </tr>
</table>
