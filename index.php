<form action="/data.php" method="post">
รหัสนิสิต
<input type="text" name="id" value="" placeholder="ตัวอย่าง: 59160001"><br><br>
ชื่อ - นามสกุล
<input type="text" name="firstname" value="" placeholder="ตัวอย่าง: สมชาย">
<input type="text" name="lastname" value="" placeholder="ตัวอย่าง: รักเรียน"><br><br>
วันเกิด
<input type="date" name="birthday" value="" placeholder="mm/dd/yyyy"><br><br>
เพศ
<input type="radio" name="gender" value="หญิง">หญิง<br>
<input type="radio" name="gender" value="ชาย">ชาย<br>
ทักษะ
<input type="checkbox" name="exp1" value="ฐานข้อมูล">ฐานข้อมูล<br>
<input type="checkbox" name="exp2" value="พัฒนาโปรแกรม">พัฒนาโปรแกรม<br>
<input type="checkbox" name="exp3" value="เครือข่าย">เครือข่าย<br>
<input type="checkbox" name="exp4" value="เครื่องแม่ข่าย">เครื่องแม่ข่าย<br>
<input type="checkbox" name="exp5" value="ฮาร์ดแวร์">ฮาร์ดแวร์<br>
<input type="checkbox" name="exp6" value="จัดการโครงการ">จัดการโครงการ<br>
สาขา-คณะ
<select name="major">
   <option>กรุณาเลือกสาขา - คณะ</option>
   <option>คณะวิทยาการสารสนเทศ - เทคโนโลยีสารสนเทศ</option>
   <option>คณะวิทยาการสารสนเทศ - วิทยาการคอมพิวเตอร์</option>
   <option>คณะวิทยาการสารสนเทศ - วิศวกรรมซอฟต์แวร์</option>
</select><br><br>
หมายเหตุ
<textarea name="comment" rows="1" cols="50"></textarea><br>
<input type="submit" value = "submit">
</form>
