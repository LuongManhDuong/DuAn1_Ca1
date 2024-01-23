<div class="row">
    <div class="row formtilte">
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row formconten">
        <form action="index.php?act=updatetk" method="post">
            <?php foreach ($listtaikhoan as $taikhoan): ?>
            <?php extract($taikhoan); ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="user">Tên đăng nhập:</label>
            <input type="text" id="user" name="user" value="<?php echo $user; ?>" required>

            <label for="pass">Mật khẩu:</label>
            <input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>

            <label for="tel">Điện thoại:</label>
            <input type="tel" id="tel" name="tel" value="<?php echo $tel; ?>" required>

            <label for="role">Vai trò:</label>
            <select id="role" name="role">
                <option value="user" <?php echo $role === 'user'
                    ? 'selected'
                    : ''; ?>>Người dùng</option>
                <option value="admin" <?php echo $role === 'admin'
                    ? 'selected'
                    : ''; ?>>Quản trị viên</option>
            </select>

            <input type="submit" name="capnhap" value="Cập nhật">
            <?php endforeach; ?>
        </form>
    </div>
</div>