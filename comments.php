
<div class="comments">
						<h4>Comments</h4>
							<?php 
							
							$post_id = get_the_ID();
							foreach (get_comments('post_id='.$post_id.'') as $comment): ?>
							<div class="comment">
							<span class="avatar"><?php echo get_avatar($comment, 75); ?></span>
							<span class="author"><p><?php echo $comment->comment_author; ?></p></span>
							<span class="date"><p><?php echo get_comment_date('j F Y H:i', $comment); ?></p></span>
							<span class="content"><p><?php echo $comment->comment_content; ?></p></span>
							</div>
							<?php endforeach; ?>
							<?php // happens when no comments
							if ($comment == 0)
							
							echo "No entries";
							
							?>
							
							<?php 
								comment_form();
							?>
						
						
</div><!--comments-->