<?php require("../../includes/header.php"); ?><h1>River! River! Take Me Home</h1><div class="content">

<p>Chef has gone out camping. One day while coming back to his tent he lost his way.<br/><br />
While searching for the way back he encountered THREE SUPERNATURAL RIVERS,out of which only one can take him back to his tent.<br/><br />
Each river has rocks besides it with numbers on it starting from 1,3 and 9 respectively.<br/><br />
The next rock in the series has number as the previous number plus the sum of digits of previous number.<br/><br />
eg for river with rock no. 1 as first rock the series will be: 1,1+1=2,2+2=4,4+4=8,8+8=16,16+1+6=23,23+2+3=28,... or 1,2,4,8,16,23,28,38,49.....<br/><br />
or for river with rock no 3 as first rock:<br/> 3,3+3=6,6+6=12,12+1+2=15,15+1+5=21,21+2+1=24,24+2+4=30.... or 3,6,12,15,21,24,30,33,39,51...<br/><br />
or the series for 29 will be: <br/>29,29+2+9=40,40+4+0=44,44+4+4=52,52+5+2=59,59+5+9=73..... or 29,40,44,52,59,73.....<br/><br />
<br/><br />
Chef also has a number in his mind. This number will help him to determine that which river he has to cross and from which rock.<br/><br />
He has to cross at the roch number of the specific river where both the series of river and the series of the number he has thought have a number in common.<br/><br />
eg. if has thought of the number 29, then he would have to cross river 1 at rock number 107.<br/><br />
Explanation: series of 1: <br/>1,2,4,8,16,23,28,38,49,62,70,77,91,101,103,107,....<br />
                   <br/>series of 29: 29,40,44,52,73,83,94,107,....<br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>T, T= number of inputs (1&lt;=T&lt;=100)<br/><br />
      then T lines with N,  N= number Chef has thought (1&lt;=N&lt;=1000000)</br/></p>
<h3>Output</h3>
<p>The river he has to cross (i.e 1 or 3 or 9) and the rock number on that river where he has to cross</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
29
42

<b>Output:</b>
1 107
3 111

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