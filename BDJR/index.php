<?php get_header() ?>

<h1>Liste des types</h1>
<?php wp_list_categories(['taxonomy' => 'Type_ouvrage']); ?>

<?php if (have_posts()): ?>
 <div class="row">

 <?php while(have_posts()): the_post(); ?>
 <div class="col-sm-4" >
 <div class="card" >
 <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '' , 'style' => 'height: auto;' ]) ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
	<ul>
	<?php the_terms(get_the_ID(), 'Type_ouvrage', '<li>','</li><li>', '</li>');
	?>
	</ul>
	 <p class="card-text"><?php the_content()?></p>
    <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
  </div>
  
</div>
</div>
 <?php endwhile ?>
 </div>
<?php ma_pagination(); ?>
  

<?php else: ?>
<h1>Pas de bd</h1>
<?php endif; ?>

<?php get_footer() ?>

<?php include 'custom.php'; ?>