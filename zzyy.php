<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自助预约_顺义口腔自助预约_顺义口腔医院</title>
  <link rel="stylesheet" href="./css/swiper.min.css">
  <link rel="stylesheet" href="./css/zzyy.css">
  <script src="./js/swiper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>

</head>
<body>
  <!-- 头部 -->
  <?php include './head.php'; ?>

    
  <!-- 导航栏 -->
  <?php include './nav.php'; ?>

  <!-- 文章 -->
  <div class="fo_is">
    <div class="w">

      <!-- 左侧内容 -->
      <div class="fo_fl" style="width: 100%;">
        <div class="listTitle" style="width: 100%;">
          <h2 style="font-size: 16px;">
            <a href="#">博爱口腔</a> > <a href="#">自助预约</a> >
          </h2>
        </div>
        <!-- 表单区域 -->
        <table
          style="width:100%; background:#fcfcfc; color:#666; margin:0 auto; line-height:45px; border:1px dotted #ccc; margin-top: 50px; ">
          <tbody>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">就诊地区 ：
              </td>
              <td style=" margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="radio" style="margin-left: 10px;" name="diqua" class="np" value="口腔" checked> 口腔
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">称谓 ：
              </td>
              <td style=" margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="radio" style="margin-left: 10px;" name="chenhua" class="np" value="先生" checked> 先生
                <input type="radio" name="chenhua" class="np" value="女士"> 女士
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">姓名：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="text" name="xinminga" style="width:250px;  margin-left: 10px;;" class="intxt" id="xinminga"
                  value> *
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">手机号码：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="text" name="xinminga" style="width:250px;  margin-left: 10px;;" class="intxt" id="xinminga"
                  value> *
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">手机号码：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <select name="xiangmua"
                  style="width:180px; text-align:center;  margin-left: 10px;; color:#666; font-size:14px;" id="">
                  <option></option>
                  <option value="种植牙">种植牙</option>
                  <option value="牙齿矫正">牙齿矫正</option>
                  <option value="牙齿不齐">牙齿不齐</option>
                  <option value="烤齿牙">烤齿牙</option>
                  <option value="牙齿缺失">牙齿缺失</option>
                  <option value="牙痛">牙痛</option>
                  <option value="补牙">补牙</option>
                  <option value="拔牙">拔牙</option>
                  <option value="治疗">治疗</option>
                  <option value="洗牙">洗牙</option>
                  <option value="智齿">智齿</option>
                  <option value="复诊">复诊</option>
                </select> *
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">预约时间：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="text" name="xinminga" style="width:250px;  margin-left: 10px;;" class="intxt" id="xinminga"
                  value>
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">备注：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <textarea name="beizhua" id="beizhua"
                  style="width:90%;margin-left: 10px;margin-top: 10px;height:80px;"></textarea>
              </td>
            </tr>
          </tbody>
        </table>

        <div style="height:30px;padding-top:40px; margin-left: 40%; margin-bottom: 40px;">
          <input type="button" class="tijiao" value="提交预约">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="button" class="chongzhi" value="重置预约">
        </div>
      </div>
    </div>
  </div>






  <!-- 底部 -->
  <?php include './footer.php'; ?>
  <script src="./js/public.js"></script>
</body>
</html>



