@extends('admin/common/layout')

@section('title')
    商品回收站
@stop

@section('content')
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">产品回收站</h2>
            <a class="fr top_rt_btn" onclick="window.history.go(-1);">返回上一页</a>
        </div>
        <section class="mtb">
            <select class="select">
                <option>下拉菜单</option>
                <option>菜单1</option>
            </select>
            <input type="text" class="textbox textbox_225" placeholder="输入产品关键词或产品货号..."/>
            <input type="button" value="查询" class="group_btn"/>
        </section>
        <table class="table">
            <tr>
                <th>缩略图</th>
                <th>产品名称</th>
                <th>货号</th>
                <th>单价</th>
                <th>单位</th>
                <th>精品</th>
                <th>新品</th>
                <th>热销</th>
                <th>库存</th>
                <th>操作</th>
            </tr>
            <tr>
                <td class="center"><img src="upload/goods01.jpg" width="50" height="50"/></td>
                <td>这里是产品名称</td>
                <td class="center">A15902</td>
                <td class="center"><strong class="rmb_icon">59.00</strong></td>
                <td class="center">包</td>
                <td class="center"><a title="是" class="link_icon">&#89;</a></td>
                <td class="center"><a title="否" class="link_icon">&#88;</a></td>
                <td class="center"><a title="是" class="link_icon">&#89;</td>
                <td class="center">5559</td>
                <td class="center">
                    <a href="#" title="预览" class="link_icon" target="_blank">&#118;</a>
                    <a href="#" title="恢复到产品列表" class="link_icon">&#47;</a>
                    <a href="#" title="彻底删除" class="link_icon">&#100;</a>
                </td>
            </tr>
            <tr>
                <td class="center"><img src="upload/goods02.jpg" width="50" height="50"/></td>
                <td>这里是产品名称</td>
                <td class="center">A15902</td>
                <td class="center"><strong class="rmb_icon">59.00</strong></td>
                <td class="center">包</td>
                <td class="center"><a title="是" class="link_icon">&#89;</a></td>
                <td class="center"><a title="否" class="link_icon">&#88;</a></td>
                <td class="center"><a title="是" class="link_icon">&#89;</a></td>
                <td class="center">5559</td>
                <td class="center">
                    <a href="#" title="预览" class="link_icon" target="_blank">&#118;</a>
                    <a href="#" title="恢复到产品列表" class="link_icon">&#47;</a>
                    <a href="#" title="彻底删除" class="link_icon">&#100;</a>
                </td>
            </tr>
        </table>
        <aside class="paging">
            <a>第一页</a>
            <a>1</a>
            <a>2</a>
            <a>3</a>
            <a>…</a>
            <a>1004</a>
            <a>最后一页</a>
        </aside>
    </div>
@stop
