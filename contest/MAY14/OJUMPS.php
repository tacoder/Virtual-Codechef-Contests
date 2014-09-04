<?php require("../../includes/header.php"); ?><h1>Chef-jumping</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/OJUMPS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/OJUMPS.pdf">Russian</a>.</h3>
<p>This morning Chef wants to jump a little. In a few minutes he will arrive at the point <b>0</b>. Then he will perform a lot of jumps in such a sequence: <b>1</b>-jump, <b>2</b>-jump, <b>3</b>-jump, <b>1</b>-jump, <b>2</b>-jump, <b>3</b>-jump, <b>1</b>-jump, and so on.</p>
<p><b>1</b>-jump means that if Chef is at the point <b>x</b>, he will jump to the point <b>x+1</b>. </p>
<p><b>2</b>-jump means that if Chef is at the point <b>x</b>, he will jump to the point <b>x+2</b>. </p>
<p><b>3</b>-jump means that if Chef is at the point <b>x</b>, he will jump to the point <b>x+3</b>. </p>
<p>Before the start Chef asks you: will he arrive at the point <b>a</b> after some number of jumps?</p>
<h3>Input</h3>
<p>
The first line contains a single integer <b>a</b> denoting the point Chef asks about. </p>
<h3>Output</h3>
<p>Output "yes" without a quotes if Chef can arrive at point <b>a</b> or "no" without a quotes otherwise.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>0</b> ≤ <b>a</b> ≤ <b>10<sup>18</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
0

<b>Output:</b>
yes

<b>Input:</b>
1

<b>Output:</b>
yes

<b>Input:</b>
2

<b>Output:</b>
no

<b>Input:</b>
3

<b>Output:</b>
yes

<b>Input:</b>
6

<b>Output:</b>
yes

<b>Input:</b>
7

<b>Output:</b>
yes

<b>Input:</b>
10

<b>Output:</b>
no

</pre><h3>Explanation</h3>
<p> The first reached points are: 0 (+1) 1 (+2) 3 (+3) 6 (+1) 7, and so on. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-02-2014</td>
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