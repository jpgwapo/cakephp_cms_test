<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    // echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    // echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Ck->input('body');
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>


<script type="text/javascript">
 
var editor = CKEDITOR.replace( "<?php echo $Type ?>Summary" , {customConfig : "/js/ckeditor/alternate_config.js", height : "150px"});
 
CKEDITOR.add
 
CKEDITOR.config.contentsCss = '<?php echo $html->webroot('/js/ckeditor/mycontents.css') ?>' ;
 
</script>