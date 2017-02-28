<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 2/28/17
 * Time: 3:36 PM
 */
?>
<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); //renders the form element and adds extra functionality, like adding a hidden CSRF prevention field ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br/>

    <label for="text">Text</label>
    <textarea name="text"></textarea><br/>

    <input type="submit" name="submit" value="Create News item"/>

</form>
