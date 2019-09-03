<html>
<head>
<title>照片排版</title>
</head>
<body>
<form id="sandphotoform" action="sandphoto.php" method="POST" enctype="multipart/form-data"><strong>第一步</strong>, 选择你要冲洗的证件
照片的尺寸：<br />
<select name='target_type' id='target_type'><option value='0'>1寸 (2.50cm * 3.50cm)</option><option value='1'>大一寸 (3.30cm * 4.80cm)</option><option value='2'>小一寸 (2.20cm * 3.20cm)</option><option value='3'>彩色大一寸 (4.00cm * 5.50cm)</option><option value='4'>彩色小一寸 (2.70cm * 3.80cm)</option><option value='5'>黑白大一寸 (3.30cm * 4.80cm)</option><option value='6'>黑白小一寸 (2.20cm * 3.20cm)</option><option value='7'>2寸 (3.80cm * 5.10cm)</option><option value='8'>大二寸 (3.50cm * 5.00cm)</option><option value='9'>小二寸 (3.50cm * 4.50cm)</option><option value='10'>>身份证 (2.20cm * 3.20cm)</option><option value='11'>第二代身份证 (2.60cm * 3.20cm)</option><option value='12'>驾驶证 (2.20cm * 3.20cm)</option><option value='13'>中国护照 (3.30cm * 4.80cm)</option><option value='14'>赴美非移民签证 (5.10cm * 5.10cm)</option><option value='15'>赴美移民签证 (3.50cm * 4.00cm)</option><option value='16'>加拿大签证 (3.50cm * 4.50cm)</option><option value='17'>英国签证 (3.50cm * 4.50cm)</option><option value='18'>澳大利亚签证 (3.50cm * 4.50cm)</option><option value='19'>日本签证 (4.50cm * 4.50cm)</option><option value='20'>港澳通行证 (3.30cm * 4.80cm)</option><option value='21'>香港特区护照 (4.00cm * 5.00cm)</option><option value='22'>普通证件照 (3.30cm * 4.80cm)</option><option value='23'>机动
车行驶证 (6.00cm * 8.80cm)</option><option value='24'>毕业生照 (3.30cm * 4.80cm)</option><option value='25'>在美申请申根签证 (3.00cm * 4.00cm)</option><option value='26'>中国国家司法考试报名照片2寸 (3.20cm * 4.60cm)</option><option value='33'>阿根廷签证 (4.00cm * 4.00cm)</option><option value='34'>意大利签证 (3.40cm * 4.00cm)</option><option value='42'>日本资格考试报名 (2.40cm * 3.00cm)</option><option value='43'>加拿大签证B (5.00cm * 7.00cm)</option><option value='44'>结婚证照片 (6.00cm * 4.00cm)</option><option value='45'>赴美非移民签证(备选-缩小了一点点-为了能在6寸照片上多哦
放一些） (5.00cm * 5.00cm)</option></select><br /><strong>第二步<strong>, 选择用多大的照片冲洗（一般选择6寸的就好，这个价格最合适）:<br /><select name='container_type' id='container_type'><option value='27'>5寸(3R) (12.70cm * 8.90cm)</option><option value='28'>6寸(4R) (15.20cm * 10.20cm)</option><option value='29'>7寸(5R) (17.80cm * 12.70cm)</option><option value='30'>8寸(6R) (20.30cm * 15.20cm)</option><option value='31'>10寸(8R) (25.40cm * 20.30cm)</option><option value='32'>12寸 (25.40cm * 30.48cm)</option><option value='35'>A3 (29.70cm * 42.00cm)</option><option value='36'>A4 (21.00cm * 29.70cm)</option><option value='37'>A5 (14.80cm * 21.00cm)</option><option value='38'>B3 (50.00cm * 70.70cm)</option><option value='39'>B4 (25.00cm * 35.30cm)</option><option value='40'>B5 (17.60cm * 25.00cm)</option><option value='41'>Letter (21.59cm * 27.94cm)</option></select></p>
<p><strong>第三步</strong>, 选择分割线的颜色：</p>
<p><input id="bgcolorid" type="radio" name="bgcolorid" value="blue" checked="checked" /> 蓝色 <input id="bgcolorid" type="radio" name="bgcolorid" value="white" />白色 <input id="bgcolorid" type="radio" name="bgcolorid" value="gray" /> 灰色</p>
<p>将来的照片就是这个样子的：</p>
<p><img id="previewImg" alt="" /></p>
<p><strong>第四步</strong>, 选择你的证件照片：</p>
<p><input id="filename" type="file" name="filename" /></p>
<p><strong>最后一步</strong>, 点击下载，照片就可以去冲印了：</p>
<p><input type="submit" value="下载" /></p>
<p>如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。</p>
</form>
</body>
</html>
