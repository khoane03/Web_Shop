<h2>Add product</h2>

<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
  
<table>
        <tbody>
            <tr>
                <th>Tên Sản Phẩm</th>
                <td><input type="text" name="product_name" id=""></td>
            </tr>
            <tr>
                <th>Mã Sản Phẩm</th>
                <td><input type="text" name="product_code" id=""></td>
            </tr>
            <tr>
                <th>Giá gốc</th>
                <td><input type="text" name="price" id=""></td>
            </tr>
            <tr>
                <th>Giá giảm</th>
                <td><input type="text" name="price_sale" id=""></td>
            </tr>
            <tr>
                <th>Số lượng</th>
                <td><input type="text" name="quantity" id=""></td>
            </tr>
            <tr>
                <th>Nội dung</th>
                <td><textarea name="content" id=""  rows="10"></textarea></td>
            </tr>
            <tr>
                <th>Tóm tắt</th>
                <td><textarea name="sort_content" id="" rows="10"></textarea></td>
            </tr>
            <tr>
                <th>Hình ảnh</th>
                <td><input type="file" name="image" id=""></td>
            </tr>
            <tr>
                <th>Trạng thái</th>
                <td>
                    <select name="actives" id="">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiện</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="btn">Thêm</button>
</form>