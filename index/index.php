<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>管理员登陆</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK 
href="../管理员登陆.files/style_left.css" type=text/css rel=stylesheet>
<SCRIPT type=text/javascript>
    <!--
    if(self!=top){top.location=self.location;} 
    function ShowSoftKeyboard(obj)
    {
        if((typeof(CheckLoaded) == "function"))
        {
            password1 = obj;
            showkeyboard();
            Calc.password.value = '';
        }
        else
        {
            return false;
        }
    }
    // -->
    </SCRIPT>
<SCRIPT src="管理员登陆.files/softkeyboard.js" type=text/javascript></SCRIPT>
<META content="MSHTML 6.00.2900.5880" name=GENERATOR>
</HEAD>
<BODY id=loginbody>
<FORM name=AdminLogin action=checklogin.php method=post>
  <DIV id=adminboxall>
  <DIV class=adminboxtop></DIV>
  <DIV id=adminboxmain>
    <DIV style="MARGIN-TOP: 5px; MARGIN-LEFT: 380px">
      <INPUT id=IbtnEnter 
style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; WIDTH: 76px; HEIGHT: 26px; BORDER-RIGHT-WIDTH: 0px" 
type=image src="../管理员登陆.files/admin_menu.gif" name=IbtnEnter>
    </DIV>
  </DIV>
  <DIV class=adminboxbottom>
    <DIV id=login>
      <UL>
        <LI class=text>用户名：<BR>
          <DIV class=box1>
            <INPUT class=smallInput id=LoginName style="WIDTH: 80px" 
  name=LoginName>
          </DIV>
        </LI>
        <LI class=text>密 码：<BR>
          <DIV class=box2>
            <INPUT class=smallInput id=LoginPassword style="WIDTH: 80px" 
  type=password name=LoginPassword>
          </DIV>
        </LI>
        <LI class=text>验证码：<BR>
          <DIV class=box4>
            <INPUT class=smallInput id=code maxLength=5 size=8 
  name=code>
            &nbsp;<IMG onClick="this.src='../Include/code.asp'" alt=看不清楚请点击刷新验证码 
  src="../管理员登陆.files/code.bmp" border=0> </DIV>
        </LI>
      </UL>
    </DIV>
  </DIV>
  </DIV>
</FORM>
</BODY>
</HTML>
