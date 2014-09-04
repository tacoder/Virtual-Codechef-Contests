<?php require("../../includes/header.php"); ?><h1>Question to Life, Universe and Everything</h1><div class="content">
<p>Long ago on planet Xartha there lived a wise man, Lavit. He found the Ultimate question to Life, Universe<br /> and everything. But then there was captain Xoxo who wanted this supreme knowledge. To thwart the evil <br />plans of Xoxo, Lavit encoded the Ultimate question into a magical matrix. </p>
<p>The magical matrix was a <b>M</b> X <b>N</b> matrix of characters where words can be formed by moving horizontally<br /> or vertically, and using each character at most once. When Captain Xoxo hears this news from a spy, he<br /> wages a war against Lavit. Lavit manages to keep the matrix to himself, but he forgets the ultimate<br /> question. Still he has his hands on a list of questions and he is sure the question was one from this list. <br />Now since finding all the words in the matrix is too tedious a task, Lavit needs you to find the question for him.</p>
<p>You will be given access to the special matrix, and Lavit will give you his list of questions. You will need<br /> to tell Lavit the Ultimate question. You need to ignore character case while comparing. </p>
<h3>Input</h3>
<p>The first line will contain two Integers, <b>M</b> and <b>N</b>.<br /><br />
The next <b>M</b> lines will contain a string of <b>N</b> characters each.<br /><br />
Next Line will contain an Integer <b>L</b> denoting number of questions in Lavit's list.<br /><br />
Each of the next <b>L</b> lines will contain a question.
</p>
<h3>Output</h3>
<p>Output a single line, The ultimate question to Life, Universe and everything.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>M, N</b> ≤ <b>6</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>Length of each question in List </b> ≤ <b>6*M*N</b></li>
</ul>
<p><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
3 3
has
pps
ine
5
food
luxury
money
happiness
happening

<b>Output:</b>
happiness
</pre><h3>Explanation</h3>
<p>The only word from the list that can be found in the matrix is <b>happiness</b><br />
(0,0)--&gt;(0,1)--&gt;(1,1)--&gt;(1,0)--&gt;(2,0)--&gt;(2,1)--&gt;(2,2)--&gt;(1,2)--&gt;(0,2)
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aichemzee">aichemzee</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2013</td>
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