<?php require("../../includes/header.php"); ?><h1>Prison Break</h1><div class="content">

<h3>Problem</h3>
<p>Michal Scofield  and Lincon burrow are two brothers. By a murder allegation Lincon Burrow  was sentenced to  jail. Michal Scofield  some how came to know that his brother is not guilty and he don’t have time to file case against the allegations as his brother is going to sit on death chair soon enough. So he made a plan for Prison break before handing himself over to police in a robbery allegation he made tattoos on his whole body a way of encrypting messages. He decided secretly on the number of columns and write the message (letters only) down the columns, padding with extra random letters so as to make a rectangular array of letters. For example, if the message is “There’s no place like home on a snowy night” and there are five columns, Michal would write down</p>
<p><pre>
t o i o y
h p k n n
e l e a i
r a h s g
e c o n h
s e m o t
n l e w x
</pre></p>
<p>Note that Michal Scofield  includes only letters in between the tattoos and writes them all in lower case. In this example, Michael used the character ‘x’ to pad the message out to make a rectangle, although he could have used any letter. Michael then tattooed them by writing the letters in each row, alternating left-to-right and right-to-left. So, the above would be encrypted as</p>
<p>
toioynnkpheleaigshareconhtomesnlewx</p>
<p>
At the time of the break he forget  something about encryption .Your job is to recover for Michal the original message (along with any extra padding letters) from the encrypted one.</p>
<h3>Input</h3>
<p>The first line have a integer T number of test cases. Input for each test case will consist of two lines. The first line will contain an integer c indicating the number of columns used. The next line is a string of up to 200 lower case letters. </p>
<h3>Output</h3>
<p>Each input set should generate one line of output, giving the original plaintext message, with no spaces.</p>
<h3>Constraints</h3>
<pre>1&ltT&lt20	
2&ltC&lt20</pre><h3>Sample Input</h3>
<pre>
2
5
toioynnkpheleaigshareconhtomesnlewx
3
ttyohhieneesiaabss
</pre><h3>Output:</h3>
<pre>
theresnoplacelikehomeonasnowynightx
thisistheeasyoneab
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/opengeest">opengeest</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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