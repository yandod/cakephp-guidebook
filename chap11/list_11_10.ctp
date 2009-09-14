<h3>Friend Timeline</h3>
<table>
<?php foreach ($statuses as $status): ?>
<tr>
<td><?php echo $html->image($status->user->profile_image_url); ?></td>
<td style="text-align: left"><?php echo h($status->user->screen_name); ?>　<?php echo h($status->text); ?><br /><?php echo h($time->format('Y/m/d H:i:s', $status->created_at)); ?></td>
</tr>
<?php endforeach; ?>
</table>