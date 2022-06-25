
<style>
.input {
    outline:none;
     width:100%;
     height:40px;
     margin-top: 5px;
     border-radius: 2px;
}
.btn_submit {
    background-color:royalblue ;
    margin-top: 15px; 
    outline:none;
    border-radius: 2px;
}
</style>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Nhập Thông Tin Sản Phẩm</h2>
            </div>
            <div class="panel-body">
                <form method="post" id="update">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <?php echo '<h2 style="color:red" class="text-center"> '.$msg.' <h2>'; ?>
                            </div>
                            <div class="form-group">
                                <label for="text">Tên sản phẩm :</label>
                                <input class="input"  type="text"  placeholder="bookId" name="bookId" value="<?php echo $book_list->bookId; ?>" hidden=false>
                                <input class="input"  type="text"  placeholder="Tên sản phẩm" name="bookName" value="<?php echo $book_list->bookName; ?>" required/>
                            </div>
                            <div class="form-group" >
                                <label for="text">Tên danh mục :</label>
                                <select style="width:100%;height:40px" name="idCategory" id="idCategory">
                                    <?php
                                    foreach ($category_list as $item)
                                    {
                                        echo '<option value='.$item->categoryId.'>'.$item->categoryName.' </option>';
                                    }
                                    ?>
                                </select>
                                
                                <label for="text">Tên Nhà xuất bản :</label>
                                <select style="width:100%;height:40px" name="publishId" id="publishId">
                                    <?php
                                    foreach ($publish_list as $item)
                                    {
                                        echo '<option value="'.$item->publishId.'">'.$item->publishName.' </option>';
                                    }
                                    ?>
                                </select> 
                                
                                <label for="text">Tên tác giả :</label>
                                <select style="width:100%;height:40px" name="authId" id="authId">
                                    <?php
                                    foreach ($auth_list as $item)
                                    {
                                        echo '<option value="'.$item->authId.'">'.$item->authName.' </option>';
                                    }
                                    ?>
                                </select>      
                            </div>
                            <div class="form-group">
                                <label for="text">Link img :</label>
                                <input class="input"  type="text"  placeholder="URL:" name="bookImg" value="<?php echo $book_list->bookImg; ?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="text">Số lượng :</label>
                                <input class="input"  type="number"  placeholder="Số lượng" name="bookQuantity" value="<?php echo $book_list->bookQuantity; ?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="text">Giá :</label>
                                <input class="input"  type="number"  placeholder="Số lượng" name="bookPrice" value="<?php echo $book_list->bookPrice; ?>" required/>
                            </div>
                            <div class="form-group" style="margin-top: 2em;">
                                <a type="submit" name="action" value="save" class="btn_submit_update btn btn-primary">Submit</a>
                            </div>  
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   