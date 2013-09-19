<!doctype html>
<html>
<head>
  <TITLE>JS/UIX - Terminal</TITLE>
  <!-- (c) mass:werk 2003; www.masswerk.at; all rights reserved -->
  <META name="description" content="JS/UIX - virtual JavaScript-OS and UNIX-emulator">
  <META name="keywords"
        content="JS/UIX,JavaScript virtual UN*X,JavaScript virtual OS,JavaScript virtual Operating System,virtual Operating System for web browsers,JavaScript UNIX emulator,Hosted Operating System,by Norbert Landsteiner">

  <STYLE TYPE="text/css">
    html {
      margin 0;
      padding: 0;
    }

    body {
      padding: 0;
      margin: 0;
      background-color: #222;
      color: #33d011;
    }

    body, p, a, td {
      font-family: courier, fixed;
      font-size: 12px;
      color: #33d011;
    }

    a, a:link, a:visited {
      text-decoration: none;
      color: #77dd11;
    }

    a:hover {
      text-decoration: underline;
      color: #77dd11;
    }

    a:active {
      text-decoration: underline;
      color: #dddddd;
    }

    .term {
      font-family: courier, fixed;
      font-size: 12px;
      color: #33d011;
      background: none;
    }

    termReverse, .termReverse {
      font-family: courier, fixed;
      font-size: 12px;
      color: #111111;
      background: #33d011;
    }

    grey, .grey {
      font-family: courier, fixed;
      font-size: 12px;
      color: #999999;
    }

    disclaimer, .disclaimer {
      font-family: courier, fixed;
      font-size: 10px;
      color: #999999;
    }

    keywords, .keywords {
      font-family: arial, helvetica, sans-serif;
      font-size: 10px;
      color: #222222;
    }

    a.disclaimer, a.disclaimer:link, a.disclaimer:visited {
      text-decoration: none;
      color: #b0b0b0;
    }

    a.disclaimer:hover {
      text-decoration: underline;
      color: #77dd11;
    }

    a.disclaimer:active {
      text-decoration: underline;
      color: #dddddd;
    }

    a.termopen, a.termopen:link, a.termopen:visited {
      text-decoration: none;
      color: #77dd11;
      background: none;
    }

    a.termopen:hover {
      text-decoration: none;
      color: #222222;
      background: #77dd11;
    }

    a.termopen:active {
      text-decoration: none;
      color: #222222;
      background: #dddddd;
    }

  </STYLE>



  <!--
          *********** VIP CONFIGURATION ***********
  -->

  <form class="vip-configuration">
    <input type="hidden" class="instance-address" value="<?= $_GET['vip'] ?>" /> <br>
  </form>


  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_gui.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_krnl.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_shell.js" TYPE="text/javascript"></SCRIPT>

  <script src="js/vendor/jquery-1.9.1.min.js"></script>
  <script src="js/uri.js"></script>
  <script src="js/jsuix_net.js"></script>

  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_cmd.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_vi.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_inv.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_man.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" SRC="js/jsuix_rc.js" TYPE="text/javascript"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript1.5" SRC="js/jsuix_trycatch.js" TYPE="text/javascript"></SCRIPT>
</HEAD>

      <span style="padding:10px;" class="instance-title">
        <span>No IP Address</span>
      </span>

<DIV STYLE="float:right; right:0; vertical-align: top;">
  <TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" WIDTH="140">
    <TR>
      <TD HEIGHT="35">&nbsp;</TD>
    </TR>
    <TR>
      <TD ALIGN="left">
      </TD>
    </TR>
  </TABLE>
</DIV>

<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">
  <TR>
    <TD HEIGHT="35">
      <TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0" WIDTH="105" HEIGHT="35">
        <TR>
          <TD>&nbsp;</TD>
        </TR>
      </TABLE>
    </TD>
    <TD VALIGN="top">&nbsp;</TD>
  </TR>
  <TR>
    <TD><IMG SRC="js/keycaps/spacer.gif" HEIGHT="408" WIDTH="1"></TD>
    <TD VALIGN="top" HEIGHT="408">


      <BR><BR>
      <A HREF="javascript:termOpen()" onfocus="if(this.blur)this.blur();"
         onmouseover="window.status='JS/UIX: open terminal and boot system'; return true"
         onmouseout="window.status=''; return true" CLASS="termopen">&gt; open terminal&nbsp;</A><BR><BR><BR>
      For an overview of implemented commands have a look at the<BR>
      complete <A HREF="man.txt" onfocus="if(this.blur)this.blur();" TARGET="_term_man">&gt; JS/UIX-Manual-Pages</A>;
      see also the <A HREF="history.txt" onfocus="if(this.blur)this.blur();" TARGET="_term_man">&gt; Version-History</A>.<BR><BR>
      interfaces have a look at <A HREF="http://www.masswerk.at/termlib/" TARGET="_blank">mass:werk
        termlib.js</A>.<BR><BR>
      <BR>


    </TD>
  </TR>
  <TR>
    <TD></TD>
    <TD CLASS="grey">
      Alternate key mappings (may depend on system and browser):<SUB>&nbsp;</SUB><BR>
      &nbsp;&nbsp;&nbsp;&nbsp;CTRL + SHIFT + [KEYPAD]&lt;4&gt; for left<BR>
      &nbsp;&nbsp;&nbsp;&nbsp;CTRL + SHIFT + [KEYPAD]&lt;6&gt; for right<BR>
      &nbsp;&nbsp;&nbsp;&nbsp;CTRL + SHIFT + [KEYPAD]&lt;8&gt; for up<BR>
      &nbsp;&nbsp;&nbsp;&nbsp;CTRL + SHIFT + [KEYPAD]&lt;2&gt; for down<BR>
      &nbsp;&nbsp;&nbsp;&nbsp;CTRL + SHIFT + [KEYPAD]&lt;0&gt; for backspace.<BR>
      <BR>&nbsp;
    </TD>
  </TR>
  <TR>
    <TD></TD>
    <TD CLASS="disclaimer">
      Note/Disclaimer: No data of any kind is transmitted to any kind of<BR>
      server or service. JS/UIX is demo software and provided &quot;as is&quot;.<BR>
    </TD>
  </TR>
  <TR>
    <TD></TD>
    <TD CLASS="disclaimer">
      &nbsp;<BR><BR>
      For technical information see the: <A HREF="jsuix-documentation.txt" onfocus="if(this.blur)this.blur();"
                                            TARGET="_term_man" CLASS="disclaimer">&gt; JS/UIX documentation</A>.
      <BR>&nbsp;
    </TD>
  </TR>
</TABLE>

<P CLASS="keywords"><FONT COLOR="#222222">KEYWORDS: JS/UIX, JavaScript virtual UN*X, JavaScript virtual OS, JavaScript
    virtual Operating System, virtual Operating System for web browsers, JavaScript UNIX emulator<BR>http://www.masswerk.at/jsuix/
    by Norbert Landsteiner</FONT></P>

<DIV ID="termDiv" STYLE="position:absolute; top:20; left:100;"></DIV>
<DIV ID="termKbdDiv" STYLE="position:absolute; top:290; left:100;visibility:hidden"></DIV>

</BODY>
</HTML>

