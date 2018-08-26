<form method="post" action="" enctype="multipart/form-data">
    <ul class="ulColumn2">
        <li>
            <span class="item_name" style="width:120px;">商品名称：</span>
            <input type="text" class="textbox textbox_295" placeholder="商品名称..."/>
            <span class="errorTips">错误提示信息...</span>
        </li>
        <li>
            <span class="item_name" style="width:120px;">商品货号：</span>
            <input type="text" class="textbox" placeholder="商品货号..."/>
            <span class="errorTips">错误提示信息...</span>
        </li>
        <li>
            <span class="item_name" style="width:120px;">品牌：</span>
            <select class="select">
                <option>选择品牌</option>
            </select>
            <span class="errorTips">错误提示信息...</span>
        </li>
        <li>
            <span class="item_name" style="width:120px;">分类：</span>
            <select class="select">
                <option>选择产品分类</option>
            </select>
            <span class="errorTips">错误提示信息...</span>
        </li>
        <li>
            <span class="item_name" style="width:120px;">推荐：</span>
            <label class="single_selection"><input type="radio" name="name"/>是否精品</label>
            <label class="single_selection"><input type="radio" name="name"/>是否热销</label>
            <label class="single_selection"><input type="radio" name="name"/>是否新品</label>
        </li>
        <li>
            <span class="item_name" style="width:120px;">上传图片：</span>
            <label class="uploadImg">
                <input type="file"/>
                <span>上传图片</span>
            </label>
        </li>
        <li>
            <span class="item_name" style="width:120px;">产品详情：</span>
            <textarea id="editor" type="text/plain" style="width:1024px;height:500px;margin-left:120px;margin-top:0;"></textarea>
        </li>
        <li>
            <span class="item_name" style="width:120px;"></span>
            <input type="submit" class="link_btn"/>
        </li>
    </ul>
</form>