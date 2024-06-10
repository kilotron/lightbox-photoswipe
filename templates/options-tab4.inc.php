<table id="lbwps-tab-4" class="form-table" style="display:none;">
    <tr>
        <th scope="row">
            <?php echo __('General', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('show_caption'); ?> <?php echo __('Show caption if available', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usepostdata'); ?> <?php echo __('Get the image captions from the database (this may cause delays on slower servers)', 'lightbox-photoswipe'); ?></label>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo __('Used elements', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('usetitle'); ?> <?php echo __('Title', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usecaption'); ?> <?php echo __('Caption', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usedescription'); ?> <?php echo __('Description', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('use_alt'); ?> <?php echo __('Alternative text', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif'); ?> <?php echo __('EXIF data if available', 'lightbox-photoswipe'); ?><?php if (!function_exists('exif_read_data')) { ?>(<?php echo __('<a href="https://www.php.net/manual/en/book.exif.php" target="_blank">the PHP EXIF extension</a> is missing on this server!', 'lightbox-photoswipe'); ?>)<?php } ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_camera'); ?> <?php echo __('Camera', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_lens'); ?> <?php echo __('Lens', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_shutter'); ?> <?php echo __('Shutter speed', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_fstop'); ?> <?php echo __('F-stop', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_focal'); ?> <?php echo __('Focal length', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_iso'); ?> <?php echo __('ISO', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_date'); ?> <?php echo __('Date', 'lightbox-photoswipe'); ?></label>
        </td>
    </tr>
    <tr class="lbwps-ver5">
        <th scope="row">
            <?php echo __('Type of caption', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlRadio('caption_type', ['auto', 'aside', 'below', 'overlay'], [__('dynamic, automatic', 'lightbox-photoswipe'), __('dynamic, aside', 'lightbox-photoswipe'), __('dynamic, below', 'lightbox-photoswipe'), __('overlay', 'lightbox-photoswipe')], '<br>'); ?></label>
        </td>
    </tr>
</table>
