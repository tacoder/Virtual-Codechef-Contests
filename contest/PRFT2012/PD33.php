<?php require("../../includes/header.php"); ?><h1>To and Fro</h1><div class="content">

<p>Mo and Larry have devised a way of encrypting messages. They first decide secretly on the number of columns and write the message (letters only) down the columns, padding with extra random letters so as to make a rectangular array of letters. For example, if the message is “There’s no place like home on a snowy night” and there are five columns, Mo would write down</p>
<p>t o i o y<br />
h p k n n<br />
e l e a i<br />
r a h s g<br />
e c o n h<br />
s e m o t<br />
n l e w x</p>
<p>Note that Mo includes only letters and writes them all in lower case. In this example, Mo used the character ‘x’ to pad the message out to make a rectangle, although he could have used any letter. Mo then sends the message to Larry by writing the letters in each row, alternating left-to-right and right-to-left. So, the above would be encrypted as</p>
<p>toioynnkpheleaigshareconhtomesnlewx</p>
<p>Your job is to recover for Larry the original message (along with any extra padding letters) from the encrypted one.</p>
<h3>Input</h3>

<p>
There will be multiple input sets. Input for each set will consist of two lines. The first line will contain an integer in the range 2...20 indicating the number of columns used. The next line is a string of up to 200 lower case letters. The last input set is followed by a line containing a single 0, indicating end of input.</p>
<h3>Output</h3>

<p>
Each input set should generate one line of output, giving the original plaintext message, with no spaces.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

5
toioynnkpheleaigshareconhtomesnlewx
3
ttyohhieneesiaabss
0

<b>Output:</b>

theresnoplacelikehomeonasnowynightx
thisistheeasyoneab

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mani_yadav">mani_yadav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>