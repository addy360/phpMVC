<?php include APPROOT.'/views/pages/inc/header.php' ?>
	<h1><?php echo $data['welcome']; ?></h1>
	<p><?php echo $data['title']; ?></p>
	<?php if(!isset($data['post'])): ?>
		<ul>
			<?php foreach ($data['posts'] as $post) :?>
				<li><?php echo $post->title;  ?></li>
			<?php endforeach ?>
		</ul>
	<?php else: ?>
		<h1>No posts</h1>
	<?php endif ?>

<?php include APPROOT.'/views/pages/inc/footer.php' ?>