<style>
/* 导航下拉样式 */
a,
img {
  border: 0;
  text-decoration: none;
}
body {
  font: 12px/180% Arial, Helvetica, sans-serif, "新宋体";
  background-color: #e8e8e8;
}
.clearfix:after {
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.clearfix {
  display: inline-table;
}
*html .clearfix {
  height: 1%;
}
.clearfix {
  display: block;
}
* + html .clearfix {
  min-height: 1%;
}
.nav_menu {
  width: 100%;
  height: 55px;
  background-color: #005aab;
  min-width: 1200px;
}
.nav {
  min-width: 1200px;
  width: 1200px;
  height: 55px;
  position: relative;
  margin: 0 auto;
}
.nav .homePge {
  width: 125px;
  height: 55px;
  float: left;
}
.nav .homePge a {
  display: block;
  line-height: 55px;
  text-align: center;
  font: bold 16px/55px "微软雅黑";
  color: #fff;
}
.nav .homePge a:hover {
  background-color: #ccc;
  color: #005aab;
}
.nav .homePge:last-child {
  background-color: #f90;
}
.nav .homePge:last-child a:hover {
  background-color: #ddd;
}
.nav .list li {
  float: left;
}
.nav .list a {
  float: left;
  display: block;
  width: 125px;
  height: 55px;
  text-align: center;
  font: bold 16px/55px "微软雅黑";
  color: #fff;
}
.nav .list a:hover,
.nav .list .now {
  background: #ddd;
}
.nav .box {
  position: absolute;
  left: -5px;
  top: 55px;
  width: 1200px;
  background: #fff;
  height: 0;
  filter: alpha(opacity=0);
  opacity: 0;
  /* border-bottom: 2px solid #074c52; */
}
.nav .cont {
  position: relative;
  padding: 40px 0 0 24px;
  box-sizing: border-box;
}
.sublist li {
  float: left;
  width: 168px;
  padding-right: 24px;
}
.sublist li .contBoxs {
  width: 1100px;
  height: 180px;
  background-color: #f9f9f9;
  box-sizing: border-box;
}
.sublist li .contBoxs ul {
  float: left;
  width: 160px;
  height: 200px;
}
.sublist li .contBoxs ul li {
  float: none;
  margin-bottom: 6px;
}
.sublist li .contBoxs .contul {
  width: 100px;
}
.sublist li .contBoxs .contText {
  margin-top: 20px;
  display: inline;
  padding: 2px 10px;
  height: 30px;
  border-radius: 5px;
  line-height: 30px;
  font-size: 14px;
  text-decoration: none;
  background-color: #f1f1f1;
  box-sizing: border-box;
  font-family: "sans-serif", "微软雅黑";
}
.sublist li .contBoxs li a {
  color: #347fc2;
}
.sublist li .contBoxs .contText:hover {
  background-color: #347fc2;
  color: #fff !important;
}
.sublist li .conBoxsImg {
  width: 1100px;
  height: 130px;
  margin-top: 10px;
}
.sublist li .conBoxsImg .con_fl {
  float: left;
  margin-left: 20px;
}
.sublist li .clearBox {
  width: 1100px;
  height: 130px;
  margin-bottom: 24px;
}
.sublist li .clearBox .clear_fl {
  width: 400px;
  height: 130px;
  padding: 0 40px;
  box-sizing: border-box;
  float: left;
}
.sublist li .clearBox .clear_fl span {
  display: inline-block;
  margin-right: 15px;
  margin-top: 10px;
}
.sublist li .clearBox .clear_fl span a {
  display: inline;
  padding: 0px 5px;
  text-decoration: none;
  background: #ddd;
  border-radius: 4px;
  height: 25px;
  line-height: 25px;
  font-size: 14px;
  font-family: "sans-serif", "微软雅黑";
}
.sublist li .clearBox .clear_fl span a:hover {
  background-color: #005aab;
  color: #fff;
}
.sublist li .clearBox .clear_fr {
  float: left;
  width: 700px;
  height: 130px;
}
.sublist li .clearBox .clear_fr ul {
  height: 130px;
}
.sublist li .clearBox .clear_fr ul .clear_frli {
  padding-right: 0px;
}
.sublist li .clearBox .clear_fr ul li {
  list-style: none;
  height: 130px;
  margin-right: 3px;
  float: left;
}
.sublist li .clearBox .clear_fr ul li img {
  height: 130px;
}
.sublist li .subBox {
  width: 1100px;
  height: 130px;
  margin-bottom: 24px;
}
.sublist li .subBox .subBox_fl {
  width: 300px;
  height: 100px;
  float: left;
}
.sublist li .subBox .subBox_fl .subBox_flul {
  width: 250px;
  height: 100px;
  float: right;
}
.sublist li .subBox .subBox_fl .subBox_flli {
  width:200px;
  list-style: none;
  float: left;
}
.sublist li .subBox .subBox_fl .subBox_flli a {
  background: #eee;
  border-radius: 4px;
  height: 25px;
  line-height: 25px;
  display: inline-block;
  text-decoration: none;
  font-size: 14px !important;
  color: #005aab;
  margin-bottom: 5px;
  padding: 0 8px ;
  font-size: 12px;
  font-family: "sans-serif", "微软雅黑";
}
.sublist li .subBox .subBox_fl .subBox_flli a:hover {
  border-bottom: 1px solid #ccc;
}
.sublist li .subBox .subBox_fr {
  width: 650px;
  height: 100px;
  float: right;
}
.sublist li .subBox .subBox_fr li {
  width: 130px;
  list-style: none;
  margin-right: 5px;
}




</style>