<?php
defined('_JEXEC') or die('Restricted access');
?>

<?php
$c = 0;
foreach($this->group as $row) {?>
<tr id="<?php echo $row->id;?>" class="<?php echo $row->class;?> row<?php echo $c % 2;?>">
	<?php foreach ($this->headings as $heading=>$label) {	?>
		<td <?php echo $this->cellClass[$heading]?>><?php echo @$row->data->$heading;?></td>
	<?php }?>
</tr>
<?php
$c++;
}
?>
