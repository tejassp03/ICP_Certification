<?php
include 'config.php';
$sql1="select * from info";
$res=mysqli_query($con,$sql1);

$row=mysqli_fetch_array($res);
$description= $row['description'];
if(isset($_POST['submitit']))
{

$cont = addslashes($_POST['content']);



$sql="insert into info (description) values ('$cont')";
$res=mysqli_query($con,$sql);
if($res)
{
    echo 'succesful';

}
else
{
    echo "failure";
}
}
?>
<html>
    <head>


<script src="https://tinymce.cachefly.net/4.2/tinymce.min.js"></script>

        <script>
         tinymce.PluginManager.add('placeholder', function (editor) {
            editor.on('init', function () {
                var label = new Label;
                onBlur();
                tinymce.DOM.bind(label.el, 'click', onFocus);
                editor.on('focus', onFocus);
                editor.on('blur', onBlur);
                editor.on('change', onBlur);
                editor.on('setContent', onBlur);
                function onFocus() { if (!editor.settings.readonly === true) { label.hide(); } editor.execCommand('mceFocus', false); }
                function onBlur() { if (editor.getContent() == '') { label.show(); } else { label.hide(); } }
            });
            var Label = function () {
                var placeholder_text = editor.getElement().getAttribute("placeholder") || editor.settings.placeholder;
                var placeholder_attrs = editor.settings.placeholder_attrs || { style: { position: 'absolute', top: '2px', left: 0, color: '#aaaaaa', padding: '.25%', margin: '5px', width: '80%', 'font-size': '17px !important;', overflow: 'hidden', 'white-space': 'pre-wrap' } };
                var contentAreaContainer = editor.getContentAreaContainer();
                tinymce.DOM.setStyle(contentAreaContainer, 'position', 'relative');
                this.el = tinymce.DOM.add(contentAreaContainer, "label", placeholder_attrs, placeholder_text);
            }
            Label.prototype.hide = function () { tinymce.DOM.setStyle(this.el, 'display', 'none'); }
            Label.prototype.show = function () { tinymce.DOM.setStyle(this.el, 'display', ''); }
            
        });
        
        
        tinymce.init({

            selector:'textarea#content',
            height:120,
            plugins: ["placeholder image"],
            content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
              menubar: false,
                statusbar: false,
                toolbar: false
             
             });
</script>
            </head>
            <body>
<form action="sample.php" method="POST">


<textarea name="content" id="content" cols="30" rows="10">



</textarea>

<button type="submit" name="submitit">
    Submit
</button>

</form>
<div><?php echo $description; ?></div>
            </body>
</html>