<style>
  /* 初始化样式 */
* {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
* a {
  text-decoration: none;
  color: #000;
}
body {
  font: 14px/1.5 Microsoft Yahei, Tahoma, Arial, sans-serif;
}
.w {
  width: 1200px;
  margin: 0 auto;
  overflow: hidden;
}
li {
  list-style: none;
}
 /* 地区导航栏 */
.navTop {
  width: 100%;
  height: 33px;
  background: #28649d;
  min-width: 1200px;
}
.navTop ul {
  padding: 0 40px;
}
.navTop ul li:last-child {
  float: right;
}
.navTop ul li {
  list-style: none;
  float: left;
}
.navTop ul li a {
  margin-left: 15px;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 15px;
  line-height: 33px;
  color: #eee;
}
.navTop ul li:hover {
  background-color: #7a7ae4;
}



/* logo部分 */
.logo {
  min-width: 1200px;
  width: 100%;
  height: 106px;
  background-color: #fff;
  overflow: hidden;
}
.logo .log_fl {
  float: left;
  width: 600px;
}
.logo .log_fl img {
  height: 106px;
}
.logo .log_fr {
  float: left;
  width: 500px;
  height: 106px;
  overflow: hidden;
}
.logo .log_fr .yi {
  text-align: center;
  padding: 30px 30px 0 30px;
  border-left: 1px solid #ededed;
  height: 76px;
  float: left;
  cursor: pointer;
}
.logo .log_fr .yi a {
  text-decoration: none;
  color: #123cb9;
  font-family: "sans-serif", "微软雅黑";
}
.logo .log_fr .yi a.aa {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0 auto;
  background: url(../img/icon/top.png) no-repeat;
  background-position: -1px -230px;
}
.logo .log_fr .yi i.bb {
  display: block;
  width: 12px;
  height: 8px;
  margin: 0 auto;
  background: url(../img/icon/top.png) no-repeat;
  background-position: -5px -398px;
}
.logo .log_fr .er {
  width: 100px;
  text-align: center;
  padding: 30px 30px 0 30px;
  border-left: 1px solid #ededed;
  height: 76px;
  float: left;
  cursor: pointer;
}
.logo .log_fr .er a {
  text-decoration: none;
  color: #123cb9;
  font-family: "sans-serif", "微软雅黑";
}
.logo .log_fr .er a.aa {
  display: block;
  width: 30px;
  height: 30px;
  margin: 0 auto;
  background: url(../img/icon/top.png) no-repeat;
  background-position: 3px -83px;
}
.logo .log_fr .er i.aa {
  display: block;
  width: 12px;
  height: 8px;
  margin: 0 auto;
  background: url(../img/icon/top.png) no-repeat;
  background-position: -5px -398px;
}
.logo .log_fr .san {
  height: 106px;
  float: left;
  border-left: 1px solid #ededed;
  padding-top: 17px;
  box-sizing: border-box;
}
.addbox {
  position: absolute;
  display: none;
  width: 600px;
  height: 306px;
  z-index: 9999;
  left: 750px;
  padding-top: 10px;
}

/* 显隐医院地址 */
.address {
  width: 600px;
  height: 306px;
  opacity: 0.95;
  z-index: 9999;
  background-color: #fff;
  padding: 10px 70px 0px 20px;
  box-sizing: border-box;
}
.address h2 {
  color: #286ba5;
  height: 45px;
  line-height: 45px;
  border-bottom: 1px solid #ddd;
  margin-bottom: 30px;
}
.address p {
  font-size: 12px;
  height: 18px;
  line-height: 18px;
}
.address .addimg {
  width: 100%;
  height: 170px;
  box-sizing: border-box;
  padding: 0 15px;
  padding-top: 25px;
}
.address .addimg img {
  width: 100%;
  height: 100%;
}
.isShow {
  display: block;
}


/* 显隐关注我们 */
.follow {
  display: none;
  width: 390px;
  height: 200px;
  position: absolute;
  z-index: 9999;
  left: 900px;
  box-sizing: border-box;
  padding-top: 10px;
}
.follow .follow_1 {
  width: 100%;
  height: 100%;
  opacity: 0.95;
  background-color: #fff;
  padding: 25px 40px 15px;
  box-sizing: border-box;
}
.follow .follow_1 .follow_2 {
  width: 100%;
  height: 100%;
}
.follow .follow_1 .follow_2 .fl {
  float: left;
  width: 120px;
  height: 100%;
}
.follow .follow_1 .follow_2 .fl .follow_img1 {
  width: 120px;
}
.follow .follow_1 .follow_2 .fl .follow_img1 img {
  margin-left: 6px;
}
.follow .follow_1 .follow_2 .fl p {
  text-align: center;
  font-size: 14px;
  height: 20px;
  line-height: 20px;
}
.follow .follow_1 .follow_2 .fr {
  float: right;
  width: 120px;
  height: 100%;
}
.follow .follow_1 .follow_2 .fr .follow_img1 {
  width: 120px;
}
.follow .follow_1 .follow_2 .fr .follow_img1 img {
  margin-left: 6px;
}
.follow .follow_1 .follow_2 .fr p {
  text-align: center;
  font-size: 14px;
  height: 20px;
  line-height: 20px;
}
.isShow {
  display: block;
}







/* 导航下图片 */
.img {
  min-width: 1200px;
  width: 100%;
  height: 280px;
  margin: 0 auto;
  overflow: hidden;
  text-align: center;
}
.img img {
  width: 1500px;
  margin: 0 auto;
  text-align: center;
}






/* 文章 */
.fo_is {
  width: 1200px;
  margin: 0 auto;
}
.fo_is .fo_fl {
  width: 860px;
  float: left;
  padding: 8px;
  background: #fff;
  box-sizing: border-box;
}
.fo_is .fo_fl .listTitle {
  width: 855px;
  border-bottom: 1px dotted #989595;
  height: 30px;
  line-height: 30px;
}
.fo_is .fo_fl .listTitle h2 {
  font-size: 12px;
  font-weight: 100;
}
.fo_is .fo_fl .listTitle h2 a {
  color: #000;
  font-family: "sans-serif", "微软雅黑";
}
.fo_is .fo_fl .listTitle h2 a:hover {
  color: #123cb9;
}
.fo_is .fo_fl .con {
  width: 860px;
}
.fo_is .fo_fl .con li {
  height: 134px;
  padding: 17px 0;
  border-bottom: 1px dotted #ddd;
}
.fo_is .fo_fl .con li .con_Fl {
  float: left;
}
.fo_is .fo_fl .con li .con_Fl img {
  width: 177px;
  height: 130px;
  border: none;
  vertical-align: top;
  margin-left: 10px;
}
.fo_is .fo_fl .con li .con_Fr {
  float: right;
  width: 72%;
  font-size: 13px;
}
.fo_is .fo_fl .con li .con_Fr span {
  height: 30px;
  line-height: 35px;
}
.fo_is .fo_fl .con li .con_Fr span a {
  font-weight: 700;
  color: #555;
}
.fo_is .fo_fl .con li .con_Fr p {
  color: #999;
  line-height: 25px;
}
.fo_is .fo_fl .con li .con_Fr p a {
  margin-right: 10px;
  color: #555;
}
.fo_is .fo_fl .con li .con_Fr a:hover {
  color: #123cb9;
}
.fo_is .fo_fl .pageList {
  height: 40px;
  box-sizing: border-box;
}
.fo_is .fo_fl .pageList ul {
  margin-top: 20px;
  box-sizing: border-box;
}
.fo_is .fo_fl .pageList ul li:nth-child(9) {
  border: 0;
}
.fo_is .fo_fl .pageList ul li {
  float: left;
  border: 1px solid #ddd;
  height: 22px;
  margin-left: 5px;
}
.fo_is .fo_fl .pageList ul li a {
  padding: 5px 5px;
  font-family: "sans-serif", "微软雅黑";
}
.fo_is .fo_fl .pageList ul li .pageInfo {
  font-size: 14px;
}
.fo_is .fo_fl .pageList ul li:hover {
  background-color: #333;
}
.fo_is .fo_fl .pageList ul li:hover a {
  color: #fff;
  font-family: "sans-serif", "微软雅黑";
}
.fo_is .fo_fr {
  width: 260px;
  float: right;
}
.fo_is .fo_fr h1 {
  width: 260px;
  height: 35px;
  line-height: 35px;
  background: fff;
  font-size: 15px;
  font-family: '宋体';
  margin-bottom: 10px;
}
.fo_is .fo_fr h1 a {
  display: inline-block;
  height: 35px;
  line-height: 35px;
  color: #555;
  border-bottom: 1px solid #123cb9;
  font-family: "sans-serif", "微软雅黑";
}
.fo_is .fo_fr h1 span {
  width: 200px;
  display: inline-block;
  float: right;
  color: #999;
  font-size: 13px;
  padding-left: 133px;
  box-sizing: border-box;
  font-family: '微软雅黑';
  font-weight: 100;
  border-bottom: 1px solid #555;
}
.fo_is .fo_fr .fo_fr_Tit {
  background-color: #fff;
  margin-bottom: 15px;
}
.fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp {
  width: 100%;
}
.fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp .banner1 .div {
  width: 100%;
  height: 360px;
}
.fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp .banner1 .div h2 a {
  color: #333;
  font-family: "微软雅黑";
  font-size: 15px;
  font-weight: bold;
  line-height: 37px;
  font-family: "sans-serif", "微软雅黑";
}
.fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp .banner1 .div p {
  color: #767676;
  line-height: 20px;
  font-size: 15px;
}
.fo_is .fo_fr .tu {
  margin-top: 5px;
}
.fo_is .fo_fr .tu img {
  border: none;
  vertical-align: top;
}
.fo_is .fo_fr .zixun {
  margin-top: 15px;
  margin-bottom: 35px;
}
.fo_is .fo_fr .zixun a {
  width: 100%;
  height: 35px;
  line-height: 35px;
  margin: 0 auto;
  display: block;
  background: #666;
  color: #fff;
  text-align: center;
  font-family: "sans-serif", "微软雅黑";
  font-size: 16px;
}
.fo_is .fo_fr .zixun a:hover {
  background-color: #3384ee;
}
.fo_is .fo_fr .ct_l {
  width: 100%;
}
.fo_is .fo_fr .ct_l ul li:first-child h5 {
  background: #005aab;
}
.fo_is .fo_fr .ct_l ul li {
  margin-bottom: 13px;
}
.fo_is .fo_fr .ct_l ul li h5 {
  height: 32px;
  line-height: 32px;
  width: 100%;
  background: #4e4e4e;
  color: #fff;
  font-weight: 100;
}
.fo_is .fo_fr .ct_l ul li h5 img {
  display: block;
  float: left;
  margin: 8px 5px 0 10px;
}
.fo_is .fo_fr .ct_l ul li h5 a {
  width: 241px;
  display: block;
  font-weight: 100;
  color: #fff;
  font-family: "sans-serif", "微软雅黑";
}
.fo_is .fo_fr .ct_l ul li .imee {
  width: 100%;
  display: block;
}
.fo_is .fo_fr .ct_l ul li .imee .imeeImg {
  width: 100%;
  height: 100%;
}


</style> 











