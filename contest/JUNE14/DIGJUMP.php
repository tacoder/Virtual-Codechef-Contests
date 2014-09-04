<?php require("../../includes/header.php"); ?><h1>Chef and Digit Jumps</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/DIGJUMP.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/DIGJUMP.pdf">Russian</a>.</h3>
<p>Chef loves games! But he likes to invent his own. Now he plays game "Digit Jump". Chef has sequence of digits <b>S<sub>1</sub>, S<sub>2</sub>,..., S<sub>N</sub>,</b>. He is staying in the first digit (<b>S<sub>1</sub></b>) and want to reach the last digit (<b>S<sub>N</sub></b>) in the minimal number of jumps. </p>
<p>While staying in some digit <b>x</b> with index <b>i</b> (digit <b>S<sub>i</sub></b>) Chef can jump into digits with indices <b>i - 1</b> (<b>S<sub>i-1</sub></b>) and <b>i + 1</b> (<b>S<sub>i+1</sub></b>) but he can't jump out from sequence. Or he can jump into any digit with the same value <b>x</b>. </p>
<p>Help Chef to find the minimal number of jumps he need to reach digit <b>S<sub>N</sub></b> from digit <b>S<sub>1</sub></b>. </p>
<p> </p>
<h3>Input</h3>
<p>Input contains a single line consist of string <b>S</b> of length <b>N</b>- the sequence of digits.</p>
<p> </p>
<h3>Output</h3>
<p>In a single line print single integer - the minimal number of jumps he needs.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li>Each symbol of <b>S</b> is a digit from <b>0</b> to <b>9</b>. </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
01234567890

<b>Output:</b>
1

<b>Input:</b>
012134444444443

<b>Output:</b>
4
</pre><pre>
<p> </p>
<h3>Explanation</h3>
<p>In the first case Chef can directly jump from the first digit (it is <b>0</b>) to the last (as it is also <b>0</b>).</p>
<p>In the second case Chef should jump in such sequence (the number of digits from <b>1</b>: <b>1-2-4-5-15</b>). </p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-03-2014</td>
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