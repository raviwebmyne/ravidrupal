<div id="node-<?php print $node->nid; ?>" class="sh-lastest-news <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        
    <div class="blog-image clearfix">
        <?php print render($content['field_image']);?>
        <div class="image-overlay">
            <a title="<?php print $title; ?>" href="<?php print $node_url; ?>" class="image-overlay-inside"></a>
        </div>
    </div>
    
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <div class="blog-content-tile clearfix" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print substr($title,0,25); ?>...</a></div>
    <?php endif; ?>
    <?php print render($title_suffix); ?>    
    
    <div class="blog-content content"<?php print $content_attributes; ?>>
        <?php print render($content['body']);?>
        <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        //print render($content);
        ?>
    </div>
    
    <div class="article-info">
        <span class="cdate"><?php print format_date($created,'custom','d M Y');?></span>
    </div>
    <?php //print render($content['links']); ?>
    <?php //print render($content['comments']); ?>
</div>