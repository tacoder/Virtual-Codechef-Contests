<?php require("../../includes/header.php"); ?><h1>Save The Planet</h1><div class="content">

<p>The Chef has become the captain of the Universal Army of Earth. There is a war going on between humans and aliens. Chef has appointed you to intercept the alien message transmission system.<br/><br />
The aliens use a different  binary system<br/><br />
'0' means '1' and vice-versa<br/><br />
The message is sent as: [32bits of num1][16bits of num2][num2 bits of num3] <br/><br />
The retransmission they desire is : [32 bits of the remainder] when num3 is divided by num1. <br/><br />
All the numbers are written, MSB(Most significant bit) first.<br/><br />
Output must be showed in given format:<br />
[remainder for 1st instance] <br/><br />
[remainder for 2nd instance] <br/><br />
in the alien binary number system, without leading '1's ('0's).<br/><br />
The number of instances is about 200. <br/><br />
Chef wants you to reply to alien signals.<br/> </br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<p>Go on save the world<br/></br/></p>
<p>Constant bit length numbers will be prefixed by '1's ('0's in their notation).</p>
<h3>Input</h3>
<p>N : number of inputs N&lt;=10<br/><br />
then N lines of input T</br/></p>
<h3>Output</h3>
<p>The reply, (i.e, remainder) to the corresponding signal T</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1111111111111111111111000100111011111111111011110011100111000100
1111111111111111111111000100101111111111111011000100100001000011111

<b>Output:</b>
0101101001
0010001111

<b>Explanation:</b>
num1=945
num2=16
num3=50747
output=662

num1=948
num2=20
num3=376288
output=880
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/s4p3r_c1n0s">s4p3r_c1n0s</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>