<!-- file path View/Subcategories/get_by_category.ctp -->
<?php foreach ($docs as $key => $value): ?>
<option value="<?php echo $key; ?>"><?php echo $value; ?> (Data Sudah ada)</option>
<?php endforeach; ?>