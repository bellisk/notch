<h2>Delete Post</h2>

<script type="text/javascript">
$(function() {
    $('#btn-no').click(function(e) {
        console.log('here');
        e.preventDefault();
        document.location.href = "/post/detail/<?php echo $post['id']; ?>";
    });
});
</script>

<?php if(isset($success)):
    $type = ($success === false) ? 'alert-danger' : 'alert-success';
    ?>
    <div class="alert <?php echo $type; ?>" role="alert"><?php echo $message; ?></div>
<?php endif; ?>

<p>
Are you sure you want to delete <b><?php echo $post['title']; ?></b>?<br/>
This action cannot be undone!
</p>
<form action="/post/delete/<?php echo $post['id']; ?>" method="post">
    <button type="submit" class="btn">Yes</button>
    <input type="button" id="btn-no" class="btn" value="No"/>
</form>