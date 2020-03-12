{extends file="layout.tpl"};




{block name= body}
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
    {/block}
</body>
</html>