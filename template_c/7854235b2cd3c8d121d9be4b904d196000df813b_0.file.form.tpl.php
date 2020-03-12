<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-12 09:01:44
  from 'C:\xampp\htdocs\projects\smart1\template\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e69ec68bf8140_63542498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7854235b2cd3c8d121d9be4b904d196000df813b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\smart1\\template\\form.tpl',
      1 => 1584000093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e69ec68bf8140_63542498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
;




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16401639125e69ec68bf6e67_56877386', 'body');
?>

</body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_16401639125e69ec68bf6e67_56877386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16401639125e69ec68bf6e67_56877386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <!DOCTYPE html>  
    <html>  
     <body>
       <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label for="name">id</label>
                        <input type="text" name="id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    
                     <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                     <div class="form-group">
                        <label for="city">city</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                        <label for="status">Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <div class="form-group">
                       <button class="btn btn-success">Register</button>
                    </div>
                
                </div>
            </div>
        </div>
        </div>
    </div>
    </form>
    <?php
}
}
/* {/block 'body'} */
}
