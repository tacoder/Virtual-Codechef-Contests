<?php require("../../includes/header.php"); ?><h1>Cipher</h1><div class="content">

<p>Problem text...<br />
Orders have been sent from the head quarters to submarine to “MOVE SOUTH WEST<br />
TO 30 KM”, but the message is in encoded (Encrypted) form. As M has ASCII code of<br />
77, but they added 1(i.e. key) in it, then M became 77+1 i.e. N. So the entire<br />
message is in encrypted form i.e. our hackers has stolen the following line<br />
“NPWF!TPVUI!XFTU!UP!41LN”.<br />
The key can be from -30 to 115. The value of key is not known and we got another<br />
message from our hackers. The problem is to find the key, and only thing that you<br />
know the word “CRAZY BLACK CAT” which is the part of the string some where in it.</p>
<h3>Input</h3>

<p>Input description...<br />
1) Encrypted message received:<br />
SPZ[LU3’[OL’JYHa`’ISHJR’JH['Z[VW’^OLYL’`V\’HYL<br />
2) Known sub string<br />
CRAZY BLACK CAT</p>
<h3>Output</h3>

<p>Output description...<br />
1) Key=7<br />
2) Message= LISTEN, THE CRAZY BLACK CAT STOP WHERE YOU ARE<br />
Note: There will be multiple test cases and the input will end on the line containing a<br />
single 0.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
NPWF!TPVUI!XFTU!UP!41LN
WEST TO
SPZ[LU3’[OL’JYHa`’ISHJR’JH['Z[VW’^OLYL’`V\’HYL
CRAZY BLACK CAT
0

<b>Output:</b>
MOVE SOUTH WEST TO 30 KM
LISTEN, THE CRAZY BLACK CAT STOP WHERE YOU ARE
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>