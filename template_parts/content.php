<div class="panel panel-default">
    <div class="panel-heading">
        <article <?php post_class(); ?>>
        <h3 class="panel-title">
            <strong><a href="<?php the_permalink();?> "> <?php the_title(); ?></a></strong>
            <span class="pull-right"><i class="fa fa-user" aria-hidden="true"></i>  <strong><?php the_author();  ?>
                </strong><i class="fa fa-calendar" aria-hidden="true">  </i> <strong><?php the_time('j.F Y') ?></strong>
                <?php foreach((get_the_category()) as $category) { echo '<i class="fa fa-tag" aria-hidden="true"></i> Kategorie <strong>' . $category->cat_name . '<strong>'; } ?>
            </span>
        </h3>
        </article>
    </div>
    <div class="panel-body">
        <?php the_content() ?>
    </div>
</div>
     